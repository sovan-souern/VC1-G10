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
        echo "Order";

        $this->views('/notification/notification.php');
    }

   
}
