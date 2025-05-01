<?php

require_once 'BaseController.php';
require_once "Models/NotificationModel.php";
require_once "Models/ProductModel.php";
require_once "Models/AdminModel.php";

class NotificationController extends BaseController
{
    private $model;
    private $model_product;
    private $model_Notification;  
    private $model_admin;  


    function __construct()
    {
        $this->model = new NotificationModel;
        $this->model_Notification= new NotificationModel();
        $this->model_product = new ProductModel();
        $this->model_admin = new AdminModel();
    }

    function index()
    {
        $orders= $this->model->getOrder();
        $notifications = $this->model->getNotifications();
        $UsersName= $this->model_admin->getAllAdmins();
        $this->views('/notification/OrderNotification.php', ["notifications" => $notifications, "UsersName" => $UsersName, "orders" => $orders]);
        $this->views('/layout/nav.php', ["notifications" => $notifications]);
    }
    function UserContact()
    {
        $notifications = $this->model->getNotifications();
        $UsersName= $this->model_admin->getAllAdmins();
        $this->views('/notification/UserCOntact.php', ["notifications" => $notifications, "UsersName" => $UsersName]);
        $this->views('/layout/nav.php', ["notifications" => $notifications]);
    }
    function UserOrder()
    {
        $orders= $this->model->getOrder();
        $notifications = $this->model->getNotifications();
        $UsersName= $this->model_admin->getAllAdmins();
        $this->views('/notification/OrderNotification.php', ["notifications" => $notifications, "UsersName" => $UsersName, "orders" => $orders]);
        $this->views('/layout/nav.php', ["notifications" => $notifications]);
    }

    function store($id)
    {
       
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $lastProductId = $this->model_product->getLastProductId();
            $data = [
                'user_id'=>$id,
                'first_name' => $_POST['first_name'] ?? '',
                'last_name' => $_POST['last_name'] ?? '',
                'phone_number' => $_POST['phone_number'] ?? '',
                'message' => $_POST['message'] ?? '',
                'product_id' => $_POST['product_id'] ?? $lastProductId, // Default to 1 if product_id is not provided
                'created_at' => date('Y-m-d H:i:s'),
                'status' => "unread",
                "type"=>"contact"
            ];

            $this->model->createNotification($data);
            $this->redirect('/contact');
        }
    }

    function view($id)
    {
        $orders= $this->model->getOrder();
        // var_dump($orders);
        $notificationID = $this->model->getNotification($id);
    
        $UsersName= $this->model_admin->getAllAdmins();
        $this->views('/notification/view.php', ["notificationID" => $notificationID, "UsersName" => $UsersName, "orders" => $orders]);
        
    }

    function destroy($id)
    {
        $this->model->delete($id); // Call the delete method from the model
        $this->redirect('/notifications'); // Fix the redirect URL
    }
    function destroyOrder($id)
    {
        $this->model->delete($id); // Call the delete method from the model
        $this->redirect('/Notification/order'); // Fix the redirect URL
    }
    function destroyOutstock($id)
    {
        $this->model->delete($id); // Call the delete method from the model
        $this->redirect('/Notification/stock'); // Fix the redirect URL
    }

    function update($id)
    {
        $data = [
            'status' => "read", // Set the status to "read"
            'id' => $id
        ];
        $this->model->updateRead($data);
        $this->redirect('/notifications');
    }
    function stock()
    {
       $Notifications = $this->model_Notification->getNotifications();
       
          $this->views("/notification/ProductOutStock.php",["Notifications" => $Notifications]);
    }
}
