<?php

/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Coder : ALEX VAUGHT
 * Copyright : nuevecubica 2017
 * Type : PHP CLASS
 * Decription : SESSIONS
 *
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
class Session {

    private $logged_in = false;
    public $id;
    public $user_name;
    public $user_lastname;
    public $message;


    function __construct() {
        session_start();
        $this->check_login();
        $this->check_message();
        if ($this->logged_in) {

        } else {

        }
    }



    public function is_logged_in() {
        return $this->logged_in;
    }

    public function login($user) {
        if ($user) {
            $this->user_id = $_SESSION['id'] = $user->id;
            $this->user_name = $_SESSION['user_name'] = $user->user_name;
            $this->user_lastname = $_SESSION['user_lastname'] = $user->user_lastname;
            $this->logged_in = true;
        }
    }

    public function log_out() {
        unset($_SESSION['id']);
        unset($this->user_id);
        $this->logged_in = false;
    }

    public function message($msg=""){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;
        }else{
            return $this->message;
        }
    }

    private function check_login() {
        if (isset($_SESSION['id'])) {
            $this->user_id = $_SESSION['id'];
            $this->logged_in = true;
        } else {
            unset($this->user_id);
            $this->logged_in = false;
        }
    }

    private function check_message() {
        if (isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }
    }

}// end class

$session = new Session();
$message = $session->message();