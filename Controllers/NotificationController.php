<?php

require_once 'BaseController.php';

class NotificationController extends BaseController
{
    private $model;

    function __construct()
    {
        
    }

    function index()
    {
        // echo "Your Notification";

        $this->views('/notification/notification.php');
    }

   
}
