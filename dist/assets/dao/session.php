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
    public $user_id;
    public $user_name;
    public $user_lastname;

    function __construct() {
        session_start();
        $this->check_login();
        if ($this->logged_in) {

        } else {

        }
    }

    public function is_logged_in() {
        return $this->logged_in;
    }

    public function login($user) {
        if ($user) {
            $this->user_id = $_SESSION['user_id'] = $user->user_id;
            $this->user_name = $_SESSION['user_name'] = $user->user_name;
            $this->user_lastname = $_SESSION['user_lastname'] = $user->user_lastname;
            $this->logged_in = true;
        }
    }

    public function log_out() {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->logged_in = false;
    }

    private function check_login() {
        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->logged_in = true;
        } else {
            unset($this->user_id);
            $this->logged_in = false;
        }
    }
}

$session = new Session();