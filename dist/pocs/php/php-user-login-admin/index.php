<?php
$pagename = "PHP User Login Admin";
include_once('../../poc_header.php');
require_once ('../../../assets/dao/functions.php');
require_once ('../../../assets/dao/session.php');
If(!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<div class="app-holder">
    <article>

        <button class="btn right "><a href="login.php"><i class="fa fa-arrow-circle-o-right"></i> go to demo</a></button>
        <div class="spacer"></div>
        <h2><?php echo $_SESSION['user_id']?></h2>
        <p>lest get create a datbase Class</p>
    </article>
</div>
<?php
include_once('../../poc_footer.php');
?>
