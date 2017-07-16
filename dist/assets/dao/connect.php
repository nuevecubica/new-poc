<?php
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Coder : ALEX VAUGHT
 * Copyright : nuevecubica 2017
 * Type : PHP
 * Decription : Connects to DB use p for production use d for
 * development.
 *
 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$server_type = 'd';

if ($server_type == 'p') {
    define("DB_SERVER" , '127.0.0.1');
    define("DB_USER ", 'alexobo1_mydiabetesdaily');
    define("DB_PASS ", '@admin_mydiabetesdaily_2017@');
    define("DB_NAME ", 'alexobo1_mydiabetesdaily');
} else if($server_type == 'd') {
    define("DB_SERVER" , '127.0.0.1');
    define("DB_USER" , 'root');
    define("DB_PASS" , '');
    define("DB_NAME" , 'mydiabetesdaily');
}

