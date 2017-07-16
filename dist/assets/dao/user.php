<?php
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Coder : ALEX VAUGHT
 * Copyright : nuevecubica 2017
 * Type : PHP CLASS
 * Decription : USER class extends DatabaseObject
 *
 *
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

require_once(SITE_DAO . 'mysqldatabase.php');

class User extends DatabaseObject {

    protected static $table_name = "users";
    protected static $db_fields = array("user_id", 'user_name', 'user_lastname', 'user_middlename', 'user_nickname', 'user_fb_id', 'user_email', 'user_password', 'user_avatar', 'user_confirm', 'user_initial_date');

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
        $db_user_password = "";
        $user_name = $db->escape_value($user_name);
        $user_password = $db->escape_value($user_password);
        $sql = "SELECT * FROM users WHERE (user_name = '{$user_name}' OR user_email='{$user_name}') LIMIT 1";
        $result_array = self::find_by_sql($sql);

        foreach ($result_array as $result) {
            $db_user_password = $result->user_password;
        }

        if ($result_array) {
            $check_pass = password_check($user_password, $db_user_password);
            if ($check_pass) {
                return array_shift($result_array);
            } else {
                return false;
            }
        }
    }


}// DatabaseObject