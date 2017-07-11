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
        echo '<p>User Group other</p>';
        echo '<p>R = 4</p>';
        echo '<p>w = 2</p>';
        echo '<p>x = 1</p>';
        echo '<p>none = -</p>';
        echo '<p>RWX = 7</p>';
        echo '<p>RW = 6</p>';
        echo '<p>R = 4</p>';
        echo '<hr>';
        echo '<p>ps aux | grep httpd</p>';
        echo '<hr>';
        echo '<p>chown / chmod</p>';
        $owner_id = fileowner('file_permissions.php');
        $owner_array = posix_geteuid($owner_id);
        echo $owner_array;
        ?>
        <table style="text-align: center">
            <tr>
                <th colspan="4" style="color: lightgreen;"> SYMBOLIC NOTATION rwxrw-r-- </th>
            </tr>
            <tr>
                <th></th>
                <th>User</th>
                <th>Group</th>
                <th>Other</th>
            </tr>
            <tr>
                <td></td>
                <td>READ r</td>
                <td>Write w</td>
                <td>execute x</td>

            </tr>
            <tr>
                <td></td>
                <td>yes</td>
                <td>yes</td>
                <td>yes</td>
            </tr>
            <tr>
                <td></td>
                <td>yes</td>
                <td>yes</td>
                <td>no</td>
            </tr>
            <tr>
                <td></td>
                <td>yes</td>
                <td>no</td>
                <td>no</td>
            </tr>
            <tr>
                <td></td>
                <td>rwx</td>
                <td>rw-</td>
                <td>r--</td>
            </tr>
        </table>
        <table style="text-align: center">
            <tr>
                <th colspan="7" style="color:lightgreen;">
                    OCTAL NOTATION 764
                </th>
            </tr>
            <tr>
                <td>r</td>
                <td>=</td>
                <td>4</td>
                <td></td>
                <td>rwx</td>
                <td>=</td>
                <td>7</td>
            </tr>
            <tr>
                <td>w</td>
                <td>=</td>
                <td>2</td>
                <td></td>
                <td>rw</td>
                <td>=</td>
                <td>6</td>
            </tr>
            <tr>
                <td>x</td>
                <td>=</td>
                <td>1</td>
                <td></td>
                <td>r</td>
                <td>=</td>
                <td>4</td>
            </tr>
            <tr>
                <td>-</td>
                <td>=</td>
                <td>0</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </article>
</div>
<?php
include_layout_elemeent('poc_footer.php');
?>



