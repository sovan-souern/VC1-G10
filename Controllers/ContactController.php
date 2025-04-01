<?php
require_once 'Controllers/BaseController.php';

class ContactController extends BaseController {
    function index() {
        $this->ViewsUser('E-commerce-user/contact/contact.php'); 
    }
}