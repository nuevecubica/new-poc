<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
include_layout_element('poc_header.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
}else{
    $logged_user =get_object_vars(User::find_by_id($_SESSION['user_id']));
}


?>
<div class="app-holder">
    <article>
        <button class="btn back"><a href="logout.php">logout</a></button>
        <button class="btn right "><a href="login.php"><i class="fa fa-arrow-circle-o-right"></i> go to demo</a></button>
        <div class="spacer"></div>
        <p>Welcome</p>
        <h2><?php echo 'User: '.  $logged_user['user_name'].' '.$logged_user['user_lastname']; ?></h2>

    </article>
</div>
<?php
include_layout_element('poc_footer.php');
?>
