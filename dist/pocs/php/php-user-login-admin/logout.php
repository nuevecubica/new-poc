<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
include_once ('../../poc_header.php');
?>
<?php

log_actions('<span class="logout">Logout</span>',"<span class='log-message'>{$_SESSION['user_name']} {$_SESSION['user_lastname']}</span>");

$session->log_out();

redirect_to("login.php");
?>