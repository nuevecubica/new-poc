<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "Admin Comments";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
} else {
    $logged_user = get_object_vars(User::find_by_id($_SESSION['id']));
}


if (empty($_GET['id'])) {
    $session->message("No image id was provided");
    redirect_to('index.php');
}

$image = Image::find_by_id($_GET['id']);

if (!$image) {
    $session->message("The image could not be located");
    redirect_to('index.php');
}

$comments = $image->comments();


?>
<div class="app-holder">
    <article>
        <p>Welcome</p>
        <h2><?php echo 'User: ' . $logged_user['user_name'] . ' ' . $logged_user['user_lastname']; ?></h2>
        <button class="btn back-tut "><a href="admin_images.php"><i class="fa fa-arrow-circle-o-left"></i> Go back admin images</a></button>
        <div class="spacer"></div>
        <p class="message"><?php echo output_message($message); ?></p>
        <div class="spacer"></div>
        <h2>Coments on <?php echo $image->image_caption?></h2>
        <div class="row image-row-single">
            <div class="image-holder-single">
                <img class="thumbImage" src="<?php echo $image->image_path(); ?>" alt="<?php echo $image->image_caption ?>">
                <p><?php echo $image->image_caption ?></p>
            </div>
        </div>
        <?php
        if(!empty($comments)) {
            foreach ($comments as $comment) {
                ?>
                <div class="comment-holder">
                    <ul>
                        <li><?php echo htmlentities($comment->author); ?></li>
                        <li><?php echo strip_tags($comment->body); ?></li>
                        <li><?php echo datetime_to_text($comment->created); ?></li>
                        <li>
                            <div class="row" style="padding:10px 10px 0px 0px">
                                <a href="delete_comments.php?id=<?php echo $comment->id ?>">
                                    <button class="btn red right">DELETE</button>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php
            }
        }else{
            ?>
            <div class="comment-holder">
                <ul>
                   <li>NO comments</li>
                </ul>
            </div>
        <?php
        }
        ?>
    </article>
</div>
<?php
include_once('../../poc_footer.php');
?>
