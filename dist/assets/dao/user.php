<?php
require_once(SITE_DAO.'mysqldatabase.php');

class User extends DatabaseObject{

    public $user_id;
    public $user_name;
    public $user_lastname;
    public $user_middlename;
    public $user_nickname;
    public $user_fb_id;
    public $user_email;
    public $user_password;
    public $user_avatar;
    public $user_confirm;
    public $user_initial_date;


    public function full_name() {
        if (isset($this->user_name) && isset($this->user_lastname)) {
            return $this->user_name . ' ' . $this->user_lastname;
        } else {
            return "";
        }
    }

    public static function authenticate($user_name = "", $user_password = "") {
        global $db;
        $user_name = $db->escape_value($user_name);
        $user_password = $db->escape_value($user_password);
        $sql = "SELECT * FROM users WHERE user_name = '{$user_name}' AND user_password = '{$user_password}' LIMIT 1";
        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;

    }



}