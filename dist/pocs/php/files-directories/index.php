<?php
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
include_layout_elemeent('poc_header.php');
?>
<div class="app-holder">
    <article>
        <h2>SANDBOX PHP FILES</h2>
        <?php

        echo '<span class="span-code"><b>__FILE__</b> is the file address: </span>' . __FILE__ . '<br>';
        echo '<span class="span-code"><b>__LINE__</b> is where the  line code is at:  </span>' . __LINE__ . '<br>';
        echo '<span class="span-code"><b>dirname(__FILE__)</b> parse the directory out of <b>__FILE__</b> before PHP 5.3:  </span>' . dirname(__FILE__) . '<br>';
        echo '<span class="span-code"><b>__DIR__</b> shows the directory  PHP 5.3 and later:  </span>' . __DIR__ . '<br>';
        echo '<hr>';
        echo '<span class="span-code"><b>file_exists(__FILE__) ? "YES" : "no"; </b> shows if the file exist:    </span> ';
        echo file_exists(__FILE__) ? 'YES' : 'no';
        echo '<hr>';
        echo '<span class="span-code"><b>file_exists(_DIR__ . "some_file.html") ? "yes" : "NO"; </b> shows if the file exist:    </span> ';
        echo file_exists(__DIR__ . '/patito.html') ? 'yes' : 'NO';
        echo '<hr>';
        echo is_dir(_FILE__) ? 'yes' : 'NO';
        echo '<br>';
        echo is_dir(__DIR__) ? 'yes' : 'no';
        echo '<br>';
        echo is_dir('..') ? 'yes' : 'no';
        echo '<hr>';
        echo '<h2>File permissions</h2>';
        echo '<h3>OCTAL NOTATION </h3>';
        echo '<p>RWX- 4210</p>';
        echo '<p>RWX = 7</p>';
        echo '<p>RW = 6</p>';
        echo '<p>R = 4</p>';
        echo '<hr>';
        echo '<p>ps aux | grep httpd</p>';
        echo '<hr>';
        echo '<p>chown / chmod</p>';
        $owner_id =  fileowner('file_permissions.php');
        $owner_array  = posix_geteuid($owner_id);
        echo $owner_array;








        ?>
    </article>
</div>
<?php
include_layout_elemeent('poc_footer.php');
?>



