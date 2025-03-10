<?php
require_once 'Models/NotificationModel.php';
require_once 'BaseController.php';
class NotificationController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new NotificationModel();
    }

    function notifications()
    {
        $notifications = $this->model->getnotifications();
        $this->views('Notifications/notification.php',['notifications'=>$notifications]);
    }
}