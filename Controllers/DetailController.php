<?php
require_once 'Controllers/BaseController.php';

class DetailController extends BaseController{
        function index(){
            require_once 'Views/E-commerce-user/card/detail.php';        
        }
}