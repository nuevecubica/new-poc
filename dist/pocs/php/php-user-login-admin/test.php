<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Login Admin";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');


$user = new User();
$user->user_name = "Claudio";
$user->user_lastname = "Carnero";
$user->user_middlename = "Dieguez";
$user->user_nickname = "EL HOMBRE";
$user->user_password = password_encrypt("SECRET PASSWORD");
$user->user_email = "crady@crady.net";
$user->user_confirm = 0;
$user->user_initial_date = date('Y-m-d H:i:s');
$user->save();


/*$user = User::find_by_id(39);
$user->user_name = "Charlie Bananas";
$user->user_lastname = "Venenos";
$user->user_middlename = "Ortega";
$user->user_nickname = "El Poisson";
$user->user_password = "SECRET PASSWORD";
$user->user_email = "elcharilie@veneno.com";
$user->user_initial_date = date('Y/m/d');
$user->save();*/

/*$user = User::find_by_id(56);
$user->delete();
echo 'deleted user: ' . $user->user_name;*/


