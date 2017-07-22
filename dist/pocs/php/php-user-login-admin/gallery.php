<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Login Admin";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
} else {
    $logged_user = get_object_vars(User::find_by_id($_SESSION['id']));
}

// PAGINATION
$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 6;
$total_count = Image::count_all();

//$images = Image::find_all();

$pagination = new Pagination($page, $per_page, $total_count);

$sql = "SELECT * FROM images ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$images = Image::find_by_sql($sql);

?>
<div class="app-holder">
    <article>
        <p>Welcome</p>
        <h2><?php echo 'User: ' . $logged_user['user_name'] . ' ' . $logged_user['user_lastname']; ?></h2>
        <button class="btn back-tut "><a href="login.php"><i class="fa fa-arrow-circle-o-left"></i> Go back to login</a></button>
        <div class="spacer"></div>
        <div class="gallery">
            <div class="pagination-holder">
                <?php
                if ($pagination->total_pages() > 1) {
                    if ($pagination->has_prev_page()) {
                        echo "<a href=\"gallery.php?page=";
                        echo $pagination->prev_page();
                        echo "\"><div class='prev-btn'>&lt;</div></a>";
                    }
                    for($i =1; $i <= $pagination->total_pages(); $i++){
                        if($i==$page){
                            echo "<div class='pagination-numbers selected'>{$i}</div>";
                        }else{
                            echo "<a href=\"gallery.php?page={$i}\"><div class='pagination-numbers'>{$i}</div></a>";
                        }

                    }
                    if ($pagination->has_next_page()) {
                        echo "<a href=\"gallery.php?page=";
                        echo $pagination->next_page();
                        echo "\"><div class='next-btn'>&gt;</div></a>";
                    }
                }
                ?>
            </div>
            <div class="row">
                <?php foreach ($images as $image) { ?>
                    <div class="image-holder col-md-4">
                        <a href="image_single.php?id=<?php echo $image->id; ?>"><img class="thumbImage" src="<?php echo $image->image_path(); ?>" alt="<?php echo $image->image_caption ?>"></a>
                        <p><?php echo $image->image_caption ?></p>
                        <span><?php echo count($image->comments()); ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>

    </article>
</div>
<div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div id="modalCarousel" class="carousel">

                    <div class="carousel-inner">
                        <img id="bigimage" src="images/" alt="" width="100%" height="235px"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
        </div>
    </div>
</div>

<?php
include_once('../../poc_footer.php');
?>

<script>
    /*
    $('.thumbImage').css({
        cursor: 'pointer',
    });
    $('.thumbImage').click(function (event) {
        event.preventDefault();
        var theImageName = $(this).attr('src');
        console.log('this is the name: ' + theImageName);
        $('#bigimage').attr('src', theImageName);
        $('#myModal').modal('show');
    });
    */
</script>