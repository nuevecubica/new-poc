<?php
$pagename = "PHP FILES and DIRECTORIES";
$fokker = "cha cha cha ";
$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
include_layout_element('poc_header.php');
?>
<div class="app-holder">
    <article>
        <h2>SANDBOX PHP FILES</h2>
        <button class="btn orange">algo</button>
        <div class="spacer"></div>
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
                <th colspan="4" style="color: lightgreen;"> SYMBOLIC NOTATION rwxrw-r--</th>
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
        <div class="spacer"></div>
        <?php
        $filename = 'test.php';
        $owner_array = posix_getpwuid(fileowner($filename));
        echo 'owner of the file: ' . $owner_array['name'] . '<br>';

        echo 'Decimal notation: ' . fileperms('test.php') . '<br>';
        echo 'octal notation: ' . substr(decoct(fileperms('test.php')), 2);
        echo '<br>';
        chmod('test.php', 0644);
        echo 'octal notation: ' . substr(decoct(fileperms('test.php')), 2);
        echo '<br>';
        echo 'is readable?';
        echo '<br>';
        echo is_readable('test.php') ? 'yes' : 'no';
        echo '<br>';
        echo 'is writable: ';
        echo '<br>';
        echo is_writable('test.php') ? 'yes' : 'no';
        ?>
        <div class="spacer"></div>
        <pre>
        <code class="PHP">
           $filename = 'test.php';
           $owner_array = posix_getpwuid(fileowner($filename));
           echo $owner_array['name'];
            //--------
             $filename = 'test.php';
        $owner_array = posix_getpwuid(fileowner($filename));
        echo 'owner of the file: '.$owner_array['name'];

        echo 'Decimal notation: '. fileperms('test.php');
        echo 'octal notation: '. substr(decoct(fileperms('test.php')),2);
            //---------
        echo 'is readable?';

        echo is_readable('test.php') ? 'yes' : 'no';

        echo 'is writable: ';

        echo is_writable('test.php') ? 'yes' : 'no';

        </code>
        </pre>
        <div class="spacer"></div>
        <h2>Accessing Files</h2>
        <p>fopen(filename,mode) creates or edit a file depending of the permissions</p>
        <table>
            <tr>
                <th colspan="4" style="text-align: center">FILE ACCESS MODES</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>read & write</td>
                <td></td>
            </tr>
            <tr>
                <td>r</td>
                <td>Read from the start (must exist)</td>
                <td>r+</td>
                <td></td>
            </tr>
            <tr>
                <td>w</td>
                <td>Truncate / Write from start</td>
                <td>w+</td>
                <td></td>
            </tr>
            <tr>
                <td>a</td>
                <td>Append / Write fron end</td>
                <td>a+</td>
                <td></td>
            </tr>
            <tr>
                <td>x</td>
                <td>Write from the start (can't exist)</td>
                <td>x+</td>
                <td></td>
            </tr>
        </table>
        <p>FILE MODE ENDINGS</p>
        <ul>
            <li>Windows <strong>\r\n</strong></li>
            <li>Mac,linux, Unix <strong>\n</strong></li>
        </ul>
        <p>FILE MODE MODIFIERS</p>
        <p><strong>t</strong> Translate Windows Line Endings (use \r\n)</p>
        <p><strong>b</strong> Binary Mode (don't translate)</p>
        <p><strong>b</strong> is the deffault since php 4.3.2</p>

        <div class="spacer"></div>
        <h2>File Write</h2>
        <pre>
            <code class="PHP">

        // fopen writes a file and ands a message
        $file = 'filetest.txt';
        // REMEMBER to use double quotes for using \n line brakes
        $message = "this is a message fro a var\n";
        $message2 = date("d/M/Y H:i:s\n");
        $content = $message .  $message2;

        if ($handle = fopen($file, 'w')) { // OVERWRITE
            fwrite($handle, $content);
            chmod($file, 0777);
            echo $file . ' is written';
            fclose($handle);
            echo 'File is close';
        } else {
            echo 'Could not open file for writting';
        }
        // SHORCUT FOR fopen/fwrite/fclose OVERWRITES EXISTING FILE by DEFAULT
        if ($size = file_put_contents($file, $content)) {
            echo "a file of {$size} bytes was created,";
        }

            </code>
        </pre>

        <?php

        $file = 'filetest.txt';
        $message = "this is a message from a var\n";
        $message2 = date("d/M/Y H:i:s\n");
        $content = $message . $message2;

        if ($handle = fopen($file, 'w')) { // OVERWRITE
            fwrite($handle, $content);
            chmod($file, 0777);
            echo '<p style="color:mediumseagreen">' . $file . ' is written</p>';
            fclose($handle);
            echo '<p style="color:orange">File is close</p>';
        } else {
            echo '<p style="color:red">Could not open file for writting</p>';
        }
        // SHORCUT FOR fope/fwrite/fclose OVERWRITES EXISTING FILE by DEFAULT
        if ($size = file_put_contents($file, $content)) {
            echo "a file of {$size} bytes was created,";
        }
        ?>
        <div class="spacer"></div>
        <h2>Delete Files</h2>

        <p>Close files first</p>
        <ul>
            <li>Can´t delete open files</li>
            <li>Must have permission on folder containing the file</li>
            <li>USE unlink();</li>
        </ul>
        <div class="spacer"></div>
        <pre>
            <code class="PHP">
                 // DELETE FILE
                  unlink($file);

            </code>
        </pre>
        <div class="spacer"></div>
        <h2>Move the cursos</h2>
        <p>Use ftell() to get the position of the cursor</p>
        <?php
        $file = 'filetest2.txt';
        $message = "this is a message from a var\n";
        $message2 = date("d/M/Y H:i:s\n");
        $message3 = "en el offset con un break\n";
        $message4 = "inicio\n";
        $content = $message . $message2;

        if ($handle = fopen($file, 'w')) { // OVERWRITE
            fwrite($handle, $content);
            chmod($file, 0777);
            $pos = ftell($handle);
            fseek($handle, $pos - 21);
            fwrite($handle, $message3);
            rewind($handle);
            fwrite($handle, $message4);
            echo '<p style="color:mediumseagreen">' . $file . ' is written</p>';
            fclose($handle);
            echo '<p style="color:orange">File is close</p>';
        } else {
            echo '<p style="color:red">Could not open file for writting</p>';
        } // BEWARE THIS WILL OVERTYPE!!!!
        ?>
        <div class="spacer"></div>
        <pre>
            <code class="php">
        // BEWARE THIS WILL OVERTYPE!!!!
        // NOTE a and a+ WILL NOT let you move the pointer

        $file = 'filetest2.txt';
        $message = "this is a message from a var\n";
        $message2 = date("d/M/Y H:i:s\n");
        $message3 = "en el offset con un break\n";
        $message4 = "inicio\n";
        $content = $message . $message2;

        if ($handle = fopen($file, 'w')) { // OVERWRITE
            fwrite($handle, $content);
            chmod($file, 0777);
            $pos = ftell($handle);
            fseek($handle,$pos-21);
            fwrite($handle,$message3);
            rewind($handle);
            fwrite($handle,$message4);
            echo $file . ' is written';
            fclose($handle);
            echo 'File is close';
        } else {
            echo 'Could not open file for writting';
        }
            </code>
        </pre>
        <div class="spacer"></div>
        <h2>Reading Files</h2>
        <ul>
            <li>fopen with option r</li>
            <li>using fread()</li>
        </ul>
        <?php
        $file_read = 'filetest.txt';
        if ($handle = fopen($file_read, 'r')) { // READ
            // $content = fread($handle,30); // in english each character is 1 byte;
            $content = fread($handle, filesize($file_read)); // get the full size of the file;
            fclose($handle);
            //  \n to <br>
            echo nl2br($content);
            echo '<br>';
            // SHORTCUT
            $content = file_get_contents($file_read);
            echo nl2br($content);


        }
        ?>
        <div class="spacer"></div>
        <pre>
            <code class="php">

        $file_read = 'filetest.txt';
        if ($handle = fopen($file_read,'r')){ // READ
           // $content = fread($handle,30); // each character is 1 byte;
            $content = fread($handle,filesize($file_read)); // get the full size of the file;
            fclose($handle);
            //  \n to html br
            echo nl2br($content);

            // SHORT CUT
            $content = file_get_contents($file_read);
            echo nl2br($content);
            </code>
        </pre>
        <div class="spacer"></div>
        <h2>Incremental Reading</h2>
        <p></p>
        <pre>
            <code class="php">

        $file_read = 'filetest.txt';
        $content = "";
        if ($handle = fopen($file_read, 'r')) { // READ
            while(!feof($handle)){
                $content .= fgets($handle);
            }
            fclose($handle);
            echo nl2br($content);
        }

            </code>
        </pre>
        <?php
        $file_read = 'filetest.txt';
        $content = "";
        if ($handle = fopen($file_read, 'r')) { // READ
            while(!feof($handle)){
                $content .= fgets($handle);
            }
            fclose($handle);
            echo nl2br($content);
        }
        ?>
    </article>
</div>
<?php
include_layout_element('poc_footer.php');
?>
<script>
    $(document).ready(function () {
        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });


    for (var i = 0; i <= 10; i++)
        console.log(i);

</script>

