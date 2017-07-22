<?php
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Coder : ALEX VAUGHT
 * Copyright : nuevecubica 2017
 * Type : PHP
 * Decription : INITIALIZE APP
 *
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_DAO') ? null : define('SITE_DAO',  $_SERVER["DOCUMENT_ROOT"].'assets'.DS.'dao'.DS);
defined('SITE_ELEMENTS') ? null : define('SITE_ELEMENTS', $_SERVER["DOCUMENT_ROOT"].'pocs'.DS);
defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER["DOCUMENT_ROOT"].'pocs'.DS.'php'.DS.'php-user-login-admin'.DS);


/************************************
 * LOADS
*************************************/
// CONFIG FILE
require_once(SITE_DAO.'connect.php');
// FUNCTIONS
require_once(SITE_DAO.'functions.php');
// CORE OBJECTS
require_once(SITE_DAO.'session.php');
require_once(SITE_DAO.'mysqldatabase.php');
require_once(SITE_DAO.'database_object.php');
require_once(SITE_DAO.'comments.php');
// USERS
require_once(SITE_DAO.'user.php');
// IMAGES
require_once(SITE_DAO.'images.php');


