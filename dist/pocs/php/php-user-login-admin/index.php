<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
include_layout_elemeent('poc_header.php');
$pagename = "PHP User Login Admin";
If(!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<div class="app-holder">
    <article>
<button class="btn"><a href="logout.php">logout</a></button>
        <button class="btn right "><a href="login.php"><i class="fa fa-arrow-circle-o-right"></i> go to demo</a></button>
        <div class="spacer"></div>
        <h2><?php echo $_SESSION['user_id']?></h2>
        <p>lest get create a datbase Class</p>
    </article>
</div>
<?php
include_once('../../poc_footer.php');
?>
