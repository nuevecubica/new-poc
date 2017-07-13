<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP Admin Log File";
//include_layout_element('poc_header.php');
include_once ('../../poc_header.php');
?>
<?php
$logfile = SITE_ROOT . 'logs' . DS . 'log.txt';

if($_GET['clear']=='true'){
    file_put_contents($logfile,'');
    log_actions('logs cleared', "by user ID {$session->user_id}");
    redirect_to('logfile.php');
    }

?>
    <div class="app-holder">
        <article>
            <button class="btn right "><a href="index.php"><i class="fa fa-arrow-circle-o-right"></i> index</a></button>

             <button class="btn back-tut "><a href="logfile.php?clear=true"><i class="fa fa-arrow-circle-o-down"></i> clear log file</a></button>
            <div class="spacer"></div>
            <h2>Log File</h2>
            <?php
            if(file_exists($logfile) && is_readable($logfile) && $handle = fopen($logfile,'r')){
                echo "<ul class='log-entries'>";
                while(!feof($handle)){
                    $entry = fgets($handle);
                    if(trim($entry) != ""){
                       echo "<li>{$entry}</li>";
                    }
                }
                echo '</ul>';
                fclose($handle);
            }else{
                echo "NO puedo leer el archivo";
            }
            ?>
        </article>
    </div>
<?php
include_layout_element('poc_footer.php');
?>