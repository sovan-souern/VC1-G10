<?php

require_once 'BaseController.php';
require_once "Models/NotificationModel.php";
// require_once "Models/ProductModel.php";

class NotificationController extends BaseController
{
    private $model;


    function __construct()
    {
        $this->model = new NotificationModel;
    }

    function index()
    {
        $notifications = $this->model->getNotifications();
        $this->views('/notification/notification.php', ["notifications" => $notifications]);
        $this->views('/layout/nav.php', ["notifications" => $notifications]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'first_name' => $_POST['first_name'] ?? '',
                'last_name' => $_POST['last_name'] ?? '',
                'phone_number' => $_POST['phone_number'] ?? '',
                'message' => $_POST['message'] ?? '',
                'created_at' => date('Y-m-d H:i:s'),
                'status' => "unread"
            ];
            $this->model->createNotification($data);
            $this->redirect('/home');
        }
    }

    function view($id)
    {
        $notification = $this->model->getNotification($id);
        if ($notification) {
            $this->views('/notification/view.php', ["notification" => $notification]);
        } else {
            echo "Notification not found.";
        }
    }

    function destroy($id)
    {
        $this->model->delete($id); // Call the delete method from the model
        $this->redirect('/notifications'); // Fix the redirect URL
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
}
