<?php
include './componentesInterfaz/A_headerDataNoSession.php';
include './componentesInterfaz/navTitle.php';
include './componentesInterfaz/logIn_Title.php';
?>

<section class="bodyStyleBlack">
    <div class="center-align">
        <img src="img/icon.png" width="120px" style="margin-top: 25px;">
    </div>


    <div class="containerForm">
        <div class="titleForm">Basic data.</div>
        <div class="containerInputsForm">
            <form action="L_logIn_logica.php" method="post">
                <div class="input-field col s6">
                    <i class="material-icons prefix">alternate_email</i>
                    <input id="icon_email" type="email" name="mail" class="validate">
                    <label for="icon_email">Email</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="icon_password" type="password" name="pass" class="validate">
                    <label for="icon_password">Password</label>
                </div>
        </div>
        <div class="submitInfo waves-effect waves-light z-depth-3">
            <button type="submit" name="submit" style="background-color: transparent; border: none;">
                <div class="sendButtonMine" style="margin: 10px 0 13px 0;"><b>Go in!</b></div>
            </button>
        </div>
        </form>
        <a href="formSignUp.php">
            <div class="waves-effect waves-light footerButton z-depth-3">
                <div>&nbsp;Create account.</div>
            </div>
        </a>
    </div>

</section>


<?php
include './componentesInterfaz/A_footerData.php';
?>