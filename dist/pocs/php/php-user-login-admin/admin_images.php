<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "Admin Images";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
}else{
    $logged_user = get_object_vars(User::find_by_id($_SESSION['id']));
}

//$images = Image::find_all();

// PAGINATION
$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 4;
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
        <button class="btn blue "><a href="upload.php"><i class="fa fa-arrow-circle-o-up"></i> Upload new image</a></button>
        <button class="btn blue "><a href="gallery.php"><i class="fa fa-arrow-circle-o-up"></i>Go to gallery</a></button>
        <div class="spacer"></div>
        <p class="message"><?php echo output_message($message); ?></p>
        <div class="spacer"></div>
        <div class="pagination-holder">
            <?php
            if ($pagination->total_pages() > 1) {
                if ($pagination->has_prev_page()) {
                    echo "<a href=\"admin_images.php?page=";
                    echo $pagination->prev_page();
                    echo "\"><div class='prev-btn'>&lt;</div></a>";
                }
                for($i =1; $i <= $pagination->total_pages(); $i++){
                    if($i==$page){
                        echo "<div class='pagination-numbers selected'>{$i}</div>";
                    }else{
                        echo "<a href=\"admin_images.php?page={$i}\"><div class='pagination-numbers'>{$i}</div></a>";
                    }

                }
                if ($pagination->has_next_page()) {
                    echo "<a href=\"admin_images.php?page=";
                    echo $pagination->next_page();
                    echo "\"><div class='next-btn'>&gt;</div></a>";
                }
            }
            ?>
        </div>
        <div class="gallery">
            <table class="table-image">
                <tr>
                    <th>Image</th>
                    <th>Filename</th>
                    <th>Caption</th>
                    <th>Image Size</th>
                    <th>Image Type</th>
                    <th>Comments</th>
                    <th></th>
                </tr>
                <?php foreach ($images as $image){ ?>
                    <tr>
                        <td><img src="<?php echo $image->image_path(); ?>" alt=""  style="width:100px"></td>
                        <td><?php echo $image->image_filename; ?></td>
                        <td><?php echo $image->image_caption; ?></td>
                        <td><?php echo $image->size_as_text(); ?></td>
                        <td><?php echo $image->image_type; ?></td>
                        <td><a href="admin_comments.php?id=<?php echo $image->id ?>"><button class="btn orange"><?php echo count($image->comments());?></button></a></td>
                        <td><a href="delete_image.php?id=<?php echo $image->id ?>"><button class="btn red">DELETE</button></td></a>
                    </tr>
                <?php  } ?>
            </table>
        </div>
    </article>
</div>
<?php
include_once('../../poc_footer.php');
?>
