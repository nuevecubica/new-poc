<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Login Admin";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');


/*$user = new User();
$user->user_name = "Claudio";
$user->user_lastname = "Dieguez";
$user->user_middlename = "Carnero";
$user->user_nickname = "Crady";
$user->user_password = password_encrypt("cradortue");
$user->user_email = "crady@crady.net";
$user->user_confirm = 0;
$user->user_initial_date = date('Y-m-d H:i:s');
$user->save();*/


/*$user = User::find_by_id(14);
$user->user_name = "alex";
$user->user_lastname = "Vaught";
$user->user_middlename = "Ortiz";
$user->user_nickname = "Alexoboy";
$user->user_password = "SECRET";
$user->user_email = "alex@vaught.studio";
$user->user_initial_date = date('Y/m/d');
$user->save();*/

/*$user = User::find_by_id(16);
$user->delete();
echo 'deleted user: ' . $user->user_name;*/


?>