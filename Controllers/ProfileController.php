<?php
require_once 'Controllers/BaseController.php';

class ProfileController extends BaseController {
    function update() {
        $this->views('/accountSetting/updateProfile.php');
    }
    function reset() {
        $this->views('/accountSetting/resetPassword.php');
    }



}


