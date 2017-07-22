<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Login Admin";
//include_layout_element('poc_header.php');
include_once('../../poc_header.php');


if ($session->is_logged_in()) {
    redirect_to("index.php");
}

if (isset($_POST['user-login'])) {
    $user_name = trim($_POST['user_name']);
    $user_password = trim($_POST['user_password']);
    $found_user = User::authenticate($user_name, $user_password);
    if ($found_user) {
        $session->login($found_user);
        log_actions('<span class="login">Login</span>', "<span class='log-message'>{$found_user->user_name} {$found_user->user_lastname} </span>");
        redirect_to("index.php");
    } else {
        $message = "Conbinación Usuario/Contraseña erronea.";
    }
} else {
    $user_name = "";
    $user_password = "";
}

If (isset($_POST['user_create'])) {
    $user = new User();

    $user->user_name = $_POST['user_name'];
    $user->user_lastname = $_POST['user_lastname'];
    $user->user_middlename = $_POST['user_middlename'];
    $user->user_nickname = $_POST['user_nickname'];
    $user->user_fb_id = "";
    $user->user_email = $_POST['user_email'];
    $user->user_password = password_encrypt($_POST['user_password']);
    $user->user_avatar = '';
    $user->user_confirm = 0;
    $user->user_initial_date = date('Y-m-d');

    if($user->save()){
        $message ="User saved";
    }else{
        $message ="User can not be saved";
    }
}

?>
    <div class="app-holder">
        <article>
            <!-- <button class="btn back-tut "><a href="index.php"><i class="fa fa-arrow-circle-o-left"></i> Go back to Tutorial</a></button>-->
            <div class="spacer"></div>
            <h2>Login Form</h2>
            <p>You been redirected here becuase your are not log in....</p>
            <p>Please log in or create an account to get to the user area....</p>

            <div class="spacer"></div>
            <!-- LOGIN FORM -->
            <div id="formLogin" class="theform">
                <form class="form-login" action="login.php" method="POST">
                    <header><h2>Ingresar</h2></header>
                    <div class="form-zone standard-user-login">
                        <input class="" type="text" placeholder="nombre ó  correo electrónico " name="user_name" data-parsley-maxlength="42" value="<?php echo htmlentities($user_name); ?>">
                        <div class="form-password-holder">
                            <div id="lock-password-login" class="password-lock fa fa-lock" aria-hidden="true"><span>&nbsp; ver contraseña </span></div>
                            <input id="userPasswordA" class="passwordVisible" type="password" placeholder="Contraseña" name="user_password" value="<?php echo htmlentities($user_password); ?>">
                        </div>

                        <button class="btn btn-primary" type="submit" name="user-login">Enviar</button>
                    </div>
                    <!--<div class="form-zone form-zone-fb">
                        <p>Ingresa con tu cuenta de Facebook</p>
                        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                    </div>-->
                </form>
                <div class="form-zone">
                    <p><?php echo output_message($message); ?></p>
                    <div class="spacer"></div>
                </div>
                <div class="form-zone form-zone-new-account">
                    <p>¿No tienes cuenta?</p>
                    <button id="newAccountButton" class="btn btn-warning" type="button">Crear Nueva Cuenta</button>
                </div>
                <div class="form-zone pass-reminder">
                    <span>No recuerdo mi contraseña</span>
                </div>
            </div>
            <!-- NEW ACCOUNT FORM -->
            <div id="formNewUser" class="theform">
                <form class="form-new-user" action="login.php" method="POST">
                    <header><h2>Registrarse</h2></header>
                    <div class="form-zone standard-user-login">
                        <input class="form-name" type="text" placeholder="Nombre" name="user_name" required value="">
                        <input class="form-last-name" type="text" placeholder="Apellido Paterno" name="user_lastname" required value="">
                        <input class="form-middle-name" type="text" placeholder="Apellido Materno" name="user_middlename" required value="">
                        <input class="form-nickname" type="text" placeholder="Alias" name="user_nickname" required value="">
                        <input class="form-email" type="email" placeholder="Correo Electrónico" name="user_email" required value="">
                        <div class="form-password-holder">
                            <div id="lock-password-newuser" class="password-lock fa fa-lock" aria-hidden="true"><span>&nbsp;ver password&nbsp;</span></div>
                            <input id="userPasswordB" class="form-password" type="password" placeholder="Contraseña" name="user_password" required value="">
                        </div>
                        <button class="form-login-btn-send btn btn-primary" type="submit" name="user_create">Enviar</button>
                        <button class="reset btn btn-danger" type="reset">Limpiar</button>
                    </div>
                    <div class="form-zone form-zone-got-account">
                        <p>¿ya tienes cuenta?</p>
                        <button id="toLoginForm" class="btn btn-warning" type="button">Tengo una Cuenta</button>
                    </div>
                </form>
            </div>
        </article>
    </div>
<?php
if (isset($db)) {
    $db->close_connection();
}
include_layout_element('poc_footer.php');

?>