<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
}

/**
 * DELETE COMMNENTS
 */
if(empty($_GET['id'])){
    $session->message("No comment ID was provided");
    redirect_to('admin_images.php');
}

$comment = Comment::find_by_id($_GET['id']);

if($comment && $comment->delete()){
    $session->message("The Comment was deleted");
    redirect_to("admin_comments.php?id={$comment->image_id} ");
}else{
    $session->message("The Comment could not be deleted");
    redirect_to('admin_images.php');
}

If(isset($database)){
    $database->close_connection();
}

