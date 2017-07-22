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


$max_file_size = 1048576;
// 1048576 = 1MB
// 10485760 = 10MB
// 20971520 = 20MB
// 26214400 = 25MB
// 52428800 = 50MB

if (isset($_POST['user-upload-file'])) {
    $image = new Image();
    $image->image_caption = $_POST['caption'];
    $image->attach_file($_FILES['file_upload']);

    if ($image->save()) {
        $session->message("La imagen se ha subido correctamente");
        redirect_to('admin_images.php');
    } else {
        $message = join("<br/>", $image->errors);
    }
}
?>
    <div class="app-holder">
        <article>
            <button class="btn back-tut "><a href="login.php"><i class="fa fa-arrow-circle-o-left"></i> Go back to login</a></button>
            <div class="spacer"></div>
            <p>Welcome</p>
            <h2><?php echo 'User: ' . $logged_user['user_name'] . ' ' . $logged_user['user_lastname']; ?></h2>
            <div id="formUpload" class="theform">
                <form class="form-login" action="upload.php" enctype="multipart/form-data" method="POST">
                    <header><h2>Image Upload</h2></header>
                    <div class="form-zone ">
                        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>"/>
                        <!--  <input type="file" name="file_upload">-->

                        <div class="box-input">
                            <input type="file" name="file_upload" id="inputFile" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" single/>
                            <label for="inputFile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                </svg>
                                <span>Choose a file&hellip;</span></label>
                        </div>

                        <input type="text" name="caption" value="" placeholder="Escribe una leyenda">

                        <button class="btn btn-green" type="submit" name="user-upload-file" value="Upload">Enviar</button>
                    </div>
                </form>
                <div class="form-zone">
                    <p><?php echo output_message($message); ?></p>
                    <div class="spacer"></div>
                </div>
            </div>
        </article>
    </div>
<?php include_once('../../poc_footer.php');
