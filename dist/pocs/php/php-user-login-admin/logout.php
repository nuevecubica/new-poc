<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
?>
<?php
$session->log_out();
redirect_to("login.php");
?>