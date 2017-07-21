<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
}

if(empty($_GET['id'])){
    $session->message("No Image ID was provided");
    redirect_to('index');
}

$image = Image::find_by_id($_GET['id']);
if($image && $image->destroy()){
    $session->message("The image <strong> {$image->image_filename} </strong> was deleted");
    redirect_to('admin_images.php');
}else{
    $session->message("The image could not be deleted");
    redirect_to('index.php');
}

If(isset($database)){
    $database->close_connection();
}


