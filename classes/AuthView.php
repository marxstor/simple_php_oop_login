<?php

class AuthView extends Auth {
    public $errors = array();
    public $messages = [];
    
    public function __construct() {
        session_start();
        if(isset($_GET["logout"])) {
            $this->logOut();
        } elseif(isset($_POST["login"])) {
            $this->login();
        } elseif(isset($_POST["register"])) {
            $this->isUserExist();
        }
        // var_dump($_POST);
    }

    public function isUserLoggedIn() {
        if(isset($_SESSION["user_login_status"]) && $_SESSION["user_login_status"] == 1 ) {
            return true;
        }
        return false;
    }
}