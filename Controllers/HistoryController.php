<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/HistoryModel.php';

class HistoryController extends BaseController {



    

    function index() {


        // Pass data to the history view
        
        require_once 'Views/E-commerce-user/history/history.php';
    }

}
