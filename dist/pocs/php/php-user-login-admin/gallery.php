<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Login Admin";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
}else{
    $logged_user = get_object_vars(User::find_by_id($_SESSION['user_id']));
}

$images = Image::find_all();


?>
<div class="app-holder">
    <article>
        <p>Welcome</p>
        <h2><?php echo 'User: ' . $logged_user['user_name'] . ' ' . $logged_user['user_lastname']; ?></h2>
    </article>
    <div class="gallery">
        <table>
            <tr>
                <th>
                    Image
                </th>
                <th>Image</th>
                <th>Filename</th>
                <th>Caption</th>
                <th>Image Size</th>

            </tr>
            <?php foreach ($images as $image){ ?>
            <tr>
                <td><img src="<?php echo $image->image_path(); ?>" alt=""  style="width:100px"></td>
                <td><?php echo $image->image_filename; ?></td>
                <td><?php echo $image->image_caption; ?></td>
                <td><?php echo $image->size_as_text(); ?></td>
                <td><?php echo $image->image_type; ?></td>
            </tr>
            <?php  } ?>
        </table>
    </div>
</div>
<?php
include_once('../../poc_footer.php');
?>
