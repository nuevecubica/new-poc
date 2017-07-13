<?php
$pagename = "PHP UPLOAD FILES";
$fokker = "cha cha cha ";
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');
?>
<div class="app-holder">
    <article>
        <h2>SANDBOX PHP UPLOAD FILES</h2>
        <!--        <button class="btn orange">algo</button>-->
        <div class="spacer"></div>
        <?php
        // file upload
        $upload_errors = array(
            UPLOAD_ERR_OK           => "NO ERRORS",
            UPLOAD_ERR_INI_SIZE     => "Larger than uploads_max_size",
            UPLOAD_ERR_FORM_SIZE    => "larger than PHP MAX_FILE_SIZE",
            UPLOAD_ERR_PARTIAL      => "Partial Upload",
            UPLOAD_ERR_NO_FILE      => "No file",
            UPLOAD_ERR_NO_TMP_DIR   => "No temporary directory",
            UPLOAD_ERR_CANT_WRITE   => "Can't write to disk",
            UPLOAD_ERR_EXTENSION    => "File upload stopped by extension."
        );

        if(isset($_POST['submit'])){

            $temp_file = $_FILES['file_upload']['tmp_name'];
            $target_file = basename($_FILES['file_upload']['name']);
            $upload_dir = "uploads";

            if(move_uploaded_file($temp_file,$upload_dir."/".$target_file)){
                $form_message = "File uploaded successfully!";
            }else{
                $error = $_FILES['file_upload']['error'];
                $form_message = $upload_errors[$error];
            }
        }

        ?>
        <?php
        if (!empty($form_message)) {
            echo "<p><strong>{$form_message} </strong></p>";
        }
        ?>

      <!--  --><?php
/*        echo '<pre>';
        print_r($_FILES['file_upload']);
        echo '</pre>';
        echo '<hr/>';
        */?>
        <input type="file" name="file_upload" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
        <label for="file-5">
            <figure>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>
            </figure>
            <span>Choose a file&hellip;</span>
        </label>

        <form action="index.php" enctype="multipart/form-data" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <!--<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file_upload">-->




                <small id="fileHelp" class="form-text text-muted">Escoje un archivo</small>
            </div>
            <button type="submit" class="btn btn-primary" value="Upload" name="submit">Submit</button>
        </form>
        <div class="spacer"></div>
        <pre>
            <code class="php">
         // file upload
        $upload_errors = array(
            UPLOAD_ERR_OK           => "NO ERRORS",
            UPLOAD_ERR_INI_SIZE     => "Larger than uploads_max_size",
            UPLOAD_ERR_FORM_SIZE    => "larger than PHP MAX_FILE_SIZE",
            UPLOAD_ERR_PARTIAL      => "Partial Upload",
            UPLOAD_ERR_NO_FILE      => "No file",
            UPLOAD_ERR_NO_TMP_DIR   => "No temporary directory",
            UPLOAD_ERR_CANT_WRITE   => "Can't write to disk",
            UPLOAD_ERR_EXTENSION    => "File upload stopped by extension."
        );

        if(isset($_POST['submit'])){

            $temp_file = $_FILES['file_upload']['tmp_name'];
            $target_file = basename($_FILES['file_upload']['name']);
            $upload_dir = "uploads";

            if(move_uploaded_file($temp_file,$upload_dir."/".$target_file)){
                $form_message = "File uploaded successfully!";
            }else{
                $error = $_FILES['file_upload']['error'];
                $form_message = $upload_errors[$error];
            }
        }
            </code>
        </pre>
        <pre>
            <code class="html">
&lt;form action="index.php" enctype="multipart/form-data" method="post"&gt;
    &lt;input type="hidden" name="MAX_FILE_SIZE" value="1048576"&gt;
    &lt;div class="form-group"&gt;
         &lt;label for="exampleInputFile"&gt;File input&lt;/label&gt;
        &lt;input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file_upload"&gt;
        &lt;small id="fileHelp" class="form-text text-muted"&gt;Escoje un archivo&lt;/small&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary" value="Upload"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
            </code>
        </pre>
        <div class="spacer"></div>
        <h2>php.ini uploading flightcheck</h2>
        <p><i class="fa fa-search"></i> check phpinfo() </p>
        <pre>
           <code class="PHP">
               // create a php file and add phpinfo();
                phpinfo();

           </code>
       </pre>

        <div class="spacer"></div>
        <p><i class="fa fa-search"></i> Check your php.ini</p>
        <table>
            <tr>
                <th>options</th>
                <th>configuration</th>
            </tr>
            <tr>
                <td>file_uploads</td>
                <td>on (or true or 1)</td>
            </tr>
            <tr>
                <td>upload_tmp_dir</td>
                <td>null (usus the system's temp dir)</td>
            </tr>
            <tr>
                <td>post_max_size</td>
                <td>8M</td>
            </tr>
            <tr>
                <td>upload_max_size</td>
                <td>2M</td>
            </tr>
            <tr>
                <td>max_execution_time</td>
                <td>30 (seconds)</td>
            </tr>
            <tr>
                <td>max_input_time</td>
                <td>-1 (no limit)</td>
            </tr>
            <tr>
                <td>memory_limit</td>
                <td>128M</td>
            </tr>
        </table>
        <div class="spacer"></div>
        <h2>$_FILES</h2>
        <p> $_FILE['form_input']</p>
        <p>Keys in a associative array</p>
        <p><i class="fa fa-check-circle"></i> $_FILES['file_upload']['name]</p>
        <table>
            <tr>
                <td>name</td>
                <td>original file name</td>
            </tr>
            <tr>
                <td>type</td>
                <td>mime type (image/gif)</td>
            </tr>
            <tr>
                <td>size</td>
                <td>size in bytes</td>
            </tr>
            <tr>
                <td>tmp_name</td>
                <td>temp file name on server</td>
            </tr>
            <tr>
                <td>error</td>
                <td>error code</td>
            </tr>
        </table>
        <div class="spacer"></div>
        <h2>Errors</h2>
        <table>
            <tr>
                <td>0</td>
                <td>UPLOAD_ERR_OK</td>
                <TD>NO ERROR</TD>
            </tr>
            <tr>
                <td>1</td>
                <td>UPLOAD_ERR_INI_SIZE</td>
                <TD>LARGER THAN PHP INI UPLOAD_MAX_SIZE</TD>
            </tr>
            <tr>
                <td>2</td>
                <td>UPLOAD_ERR_FORM_SIZE</td>
                <TD>LARGER THAN PHP MAX_FILE_SIZE </TD>
            </tr>
            <tr>
                <td>3</td>
                <td>UPLOAD_ERR_PARTIAL</td>
                <TD>PARTIAL UPLOAD</TD>
            </tr>
            <tr>
                <td>4</td>
                <td>UPLOAD_ERR_NO_FILE</td>
                <TD>NO FILE</TD>
            </tr>
            <tr>
                <td>6</td>
                <td>UPLOAD_ERR_TMP_DIR</td>
                <TD>NO TEMP DIRECTORY</TD>
            </tr>
            <tr>
                <td>7</td>
                <td>UPLOAD_ERR_CANT_WRITE</td>
                <TD>CAN'T WRITE TO DISK</TD>
            </tr>
            <tr>
                <td>8</td>
                <td>UPLOAD_ERR_EXTENSION</td>
                <TD>FILE UPLOAD STOPED BY EXTENSION</TD>
            </tr>
        </table>

    </article>
</div>
<?php

include_layout_element('poc_footer.php')
?>
<script>
    $(document).ready(function () {
        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>
<script src="/assets/scripts/vendor/input/custom-file-input.js"></script>