<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/FavoriteModel.php';

class FavoriteController extends BaseController {



    

    function index() {


        // Pass data to the history view
        
        require_once 'Views/E-commerce-user/card/favorite.php';
    }

}
