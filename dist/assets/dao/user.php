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


    public static function find_all() {
        return self::find_by_sql("SELECT * from users");
    }

    public static function find_by_id($id = 0) {
        $result_array = self::find_by_sql("SELECT * FROM users WHERE user_id={$id} LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_sql($sql = "") {
        global $db;
        $result_set = $db->query($sql);
        $object_array = array();
        while ($row = $db->fetch_array($result_set)) {
            $object_array[] = self::instantiate($row);
        }
        return $object_array;
    }

    public static function authenticate($user_name = "", $user_password = "") {
        global $db;
        $user_name = $db->escape_value($user_name);
        $user_password = $db->escape_value($user_password);
        $sql = "SELECT * FROM users WHERE user_name = '{$user_name}' AND user_password = '{$user_password}' LIMIT 1";
        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;

    }

    public function full_name() {
        if (isset($this->user_name) && isset($this->user_lastname)) {
            return $this->user_name . ' ' . $this->user_lastname;
        } else {
            return "";
        }
    }

    private static function instantiate($record) {
        $object = new self;
        foreach ($record as $attribute => $value) {
            if ($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }

        return $object;
    }

    private function has_attribute($attribute) {
        $object_vars = get_object_vars($this);
        return array_key_exists($attribute, $object_vars);
    }

}