<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Login Admin";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
} else {
    $logged_user = get_object_vars(User::find_by_id($_SESSION['user_id']));
}

$images = Image::find_all();


?>
<div class="app-holder">
    <article>
        <p>Welcome</p>
        <h2><?php echo 'User: ' . $logged_user['user_name'] . ' ' . $logged_user['user_lastname']; ?></h2>
        <button class="btn back-tut "><a href="login.php"><i class="fa fa-arrow-circle-o-left"></i> Go back to login</a></button>
        <div class="spacer"></div>
        <div class="gallery">
            <div class="row">
                <?php foreach ($images as $image) { ?>
                    <div class="image-holder col-md-4">
                        <img class="thumbImage" src="<?php echo $image->image_path(); ?>" alt="<?php echo $image->image_caption?>">
                        <p><?php echo $image->image_caption?></p>
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

                   <!-- <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>-->

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
include_once('../../poc_footer.php');
?>

<script>

    $('.thumbImage').css({
        cursor:'pointer',
    });

$('.thumbImage').click(function(event){
    event.preventDefault();
    var theImageName = $(this).attr('src');
    console.log('this is the name: '+theImageName);


    $('#bigimage').attr('src',theImageName);

    $('#myModal').modal('show');

});


</script>