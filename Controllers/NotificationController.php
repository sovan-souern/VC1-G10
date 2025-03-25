<?php

require_once 'BaseController.php';
require_once "Models/NotificationModel.php";
// require_once "Models/ProductModel.php";

class NotificationController extends BaseController
{
    private $model;
    // private $product_model;  // Add your ProductModel here for out of stock notification.

    function __construct()
    {
        $this->model = new NotificationModel;
        // $this->product_model = new ProductModel;
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
}
