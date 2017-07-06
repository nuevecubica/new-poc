<?php
$serverType = 'w';

if ($serverType == 'p') {
    define("DB_SERVER" , '127.0.0.1');
    define("DB_USER ", 'alexobo1_mydiabetesdaily');
    define("DB_PASS ", '@admin_mydiabetesdaily_2017@');
    define("DB_NAME ", 'alexobo1_mydiabetesdaily');
} else {
    define("DB_SERVER" , '127.0.0.1');
    define("DB_USER" , 'root');
    define("DB_PASS" , '');
    define("DB_NAME" , 'mydiabetesdaily');
}

