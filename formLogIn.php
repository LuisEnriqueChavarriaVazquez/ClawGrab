<?php
include './componentesInterfaz/A_headerData.php';
include './componentesInterfaz/navTitle.php';
include './componentesInterfaz/logIn_Title.php';
?>

<section class="bodyStyleBlack">
    <div class="center-align">
        <img src="img/icon.png" width="120px" style="margin-top: 25px;">
    </div>

    <div class="containerForm">
        <div class="titleForm">Datos básicos.</div>
        <div class="containerInputsForm">
            <form action="" method="post">
                <div class="input-field col s6">
                    <i class="material-icons prefix">alternate_email</i>
                    <input id="icon_email" type="email" class="validate">
                    <label for="icon_email">Email</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="icon_password" type="password" class="validate">
                    <label for="icon_password">Password</label>
                </div>
            </form>
        </div>
        <div name="submit" class="submitInfo waves-effect waves-light z-depth-3">
            <div><i class="material-icons">lock_open</i></div>
            <div>Ingresar</div>
        </div>
        <a href="formSignUp.php">
            <div class="waves-effect waves-light footerButton z-depth-3">
                <div>&nbsp;Crear cuenta</div>
            </div>
        </a>
    </div>

</section>


<?php
include './componentesInterfaz/A_footerData.php';
?>