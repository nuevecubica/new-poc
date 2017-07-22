<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Login Admin";

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

if (isset($_POST['send-comment'])) {

    $author = trim($_POST['author']);
    $body = trim($_POST['body']);
    $new_comment = Comment::make($image->id, $author, $body);
    var_dump($new_comment);

    if ($new_comment && $new_comment->save()) {
        redirect_to("image_single.php?id={$image->id}");
    } else {
        // create error list
        $message = "There was an error that prevented the comment from being save";
    }
} else {
    $author = "";
    $body = "";
}

$comments = $image->comments();
?>
<?php include_once('../../poc_header.php'); ?>

<div class="app-holder">
    <article>
        <p>Welcome</p>
        <h2><?php echo 'User: ' . $logged_user['user_name'] . ' ' . $logged_user['user_lastname']; ?></h2>
        <button class="btn back-tut "><a href="gallery.php"><i class="fa fa-arrow-circle-o-left"></i> Go back to gallery</a></button>
        <div class="row image-row-single">
            <div class="image-holder-single">
                <img class="thumbImage" src="<?php echo $image->image_path(); ?>" alt="<?php echo $image->image_caption ?>">
                <p><?php echo $image->image_caption ?></p>
            </div>
        </div>
        <div class="comments-holder">
            <!-- comments -->

            <?php
            foreach ($comments as $comment) {
                ?>
                <div class="comment-holder">
                    <ul>
                        <li><?php echo htmlentities($comment->author); ?></li>
                        <li><?php echo strip_tags($comment->body); ?></li>
                        <li><?php echo datetime_to_text($comment->created); ?></li>
                    </ul>

                </div>
                <?php
            }
            if (empty($comments)) {
                echo "<div class='comment-holder'>No Comments</div>";
            }
            ?>

        </div>
        <div class="comments-form-holder">
            <p><?php echo output_message($message); ?></p>
            <div class="spacer"></div>
            <form action="image_single.php?id=<?php echo $image->id; ?>" method="post">
                <table class="comment">
                    <tr>
                        <td>
                            <h3>Create a comment</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="author" placeholder="Enter your name" value="<?php echo $author; ?>"></td>
                    </tr>
                    <tr>
                        <td><textarea name="body" id="" cols="40" rows="8" placeholder="Enter your comment"><?php echo $body ?></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn red" name="send-comment">Send</button>
                        </td>
                    </tr>

                </table>

            </form>
        </div>
    </article>
</div>
<?php
include_once('../../poc_footer.php');
?>

