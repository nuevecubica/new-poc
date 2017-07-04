<?php
$pagename = "PHP User Login Admin";
include_once('../../poc_header.php');
?>
    <div class="app-holder">
        <article>
            <button class="btn right "><a href="admin.php"><i class="fa fa-arrow-circle-o-right"></i> Go to Admin</a></button>

            <button class="btn back-tut "><a href="index.php"><i class="fa fa-arrow-circle-o-left"></i> Go back to Tutorial</a></button>
            <div class="spacer"></div>
            <h2>Login Form</h2>
            <!-- LOGIN FORM -->
            <div id="formLogin" class="theform">
                <form class="form-login" action="/user-login" method="post">
                    <header><h2>Ingresar</h2></header>
                    <div class="form-zone standard-user-login">
                        <input class="" type="email" placeholder="Correo Electrónico" name="user_email" value="" data-parsley-maxlength="42">
                        <div class="form-password-holder">
                            <div id="lock-password-login" class="password-lock fa fa-lock" aria-hidden="true"><span>&nbsp; ver contraseña </span></div>
                            <input id="userPasswordA" class="passwordVisible" type="password" placeholder="Contraseña" name="user_password">
                        </div>

                        <button class="btn btn-green" type="submit" name="user-login">Enviar</button>
                    </div>
                    <!--<div class="form-zone form-zone-fb">
                        <p>Ingresa con tu cuenta de Facebook</p>
                        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                    </div>-->
                </form>
                <div class="form-zone">

                </div>
                <div class="form-zone form-zone-new-account">
                    <p>¿No tienes cuenta?</p>
                    <button id="newAccountButton" class="btn btn-log-org-blue" type="button">Crear Nueva Cuenta</button>
                </div>
                <div class="form-zone pass-reminder">
                    <span>No recuerdo mi contraseña</span>
                </div>
            </div>
            <!-- NEW ACCOUNT FORM -->
            <div id="formNewUser" class="theform">
                <form class="form-new-user" action="" method="post">
                    <header><h2>Nuevo Usuario</h2></header>
                    <div class="form-zone standard-user-login">
                        <input class="form-name" type="text" placeholder="Nombre" name="user_name" required value="">
                        <input class="form-last-name" type="text" placeholder="Apellido" name="user_lastname" required value="">
                        <input class="form-nickname" type="text" placeholder="Alias" name="user_nickname" required value="">
                        <input class="form-email" type="email" placeholder="Correo Electrónico" name="user_email" required value="">
                        <div class="form-password-holder">
                            <div id="lock-password-newuser" class="password-lock fa fa-lock" aria-hidden="true"><span>&nbsp;ver password&nbsp;</span></div>
                            <input id="userPasswordB" class="form-password" type="password" placeholder="Contraseña" name="user_password" required value="">
                        </div>
                        <button class="form-login-btn-send btn btn-green" type="submit" name="user_save">Enviar</button>
                        <button class="reset btn btn-blue" type="reset">Limpiar</button>
                    </div>
                    <div class="form-zone form-zone-got-account">
                        <p>¿ya tienes cuenta?</p>
                        <button id="toLoginForm" class="btn btn-log-org-blue" type="button">Tengo una Cuenta</button>
                    </div>
                </form>
            </div>
        </article>
    </div>
<?php
include_once('../../poc_footer.php');
?>