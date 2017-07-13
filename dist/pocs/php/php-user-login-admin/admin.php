<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Admin";
//include_layout_element('poc_header.php');
include_once ('../../poc_header.php');

$user = User::find_by_id(16);

?>
    <div class="app-holder">
        <article>
            <button class="btn back-tut "><a href="login.php"><i class="fa fa-arrow-circle-o-left"></i> Go back to login</a></button>
            <div class="spacer"></div>
            <h2>Users</h2>
            <p style="text-transform: capitalize">hello:  <?php echo $user->full_name() . ' '. $user->user_id; ?></p>
            <hr>
            <table>
                <tr>
                    <th> id</th>
                    <th> name</th>
                    <th>last name</th>
                    <th>middle name</th>
                    <th>nick name</th>
                    <th>email</th>
                    <th>password</th>

                </tr>
                <?php
                $users = User::find_all();
               foreach($users as $user) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $user->user_id; ?>
                        </td>
                        <td>
                            <?php echo $user->user_name; ?>
                        </td>
                        <td>
                            <?php echo $user->user_lastname; ?>
                        </td>
                        <td>
                            <?php echo $user->user_middlename; ?>
                        </td>
                        <td>
                            <?php echo $user->user_nickname; ?>
                        </td>
                        <td>
                            <?php echo $user->user_email; ?>
                        </td>
                        <td>
                            <?php echo $user->user_password; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </article>
    </div>
<?php
include_layout_element('poc_footer.php');
?>