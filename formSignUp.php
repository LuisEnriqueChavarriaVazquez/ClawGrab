<?php
include './componentesInterfaz/A_headerDataNoSession.php';
include './componentesInterfaz/navTitle.php';
include './componentesInterfaz/signUp_Title.php';

//Primer archivo de logica del sign up
include 'L_signUp_logica.php';
?>

<section class="bodyStyleBlack">
    <div class="containerForm">
        <div class="titleForm">Basic data.
    </div>
    <div class="containerInputsForm">
        <form action="L_signUp_logica.php" method="post">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_name" type="text" class="validate" name="username">
                <label for="icon_name">Name</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">perm_contact_calendar</i>
                <input id="icon_age" type="text" class="validate" name="age">
                <label for="icon_age">Age</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">travel_explore</i>
                <input id="icon_pais" type="text" class="validate" name="country">
                <label for="icon_pais">Country</label>
            </div>
            <br>
            <div class="input-field col s12 m6">
                <select name="language" class="icons">
                    <option value="not_selected" disabled selected>Select your language.</option>
                    <option value="spanish" data-icon="img/mexico.png" class="left">Español</option>
                    <option value="english" data-icon="img/us.png" class="left">English</option>
                    <option value="chinese" data-icon="img/china.png" class="left">中文</option>
                    <option value="portuguese" data-icon="img/brazil.png" class="left">português</option>
                    <option value="hindi" data-icon="img/india.png" class="left">हिंदी</option>
                    <option value="french" data-icon="img/france.png" class="left">français</option>
                </select>
                <label>Language</label>
            </div>
            <br>

            <div class="input-field col s6">
                <i class="material-icons prefix">alternate_email</i>
                <input id="icon_email" type="email" class="validate" name="mail">
                <label for="icon_email">Email</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">lock_outline</i>
                <input id="icon_password" type="password" class="validate" name="pass">
                <label for="icon_password">Password</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">lock_outline</i>
                <input id="icon_cpassword" type="password" class="validate" name="cpass">
                <label for="icon_cpassword">Confirm Password</label>
            </div>
    </div>
    <div class="submitInfo waves-effect waves-light z-depth-3">
        <button type="submit" name="submit" style="background-color: transparent; border: none;">
            <div class="sendButtonMine" style="margin: 10px 0 13px 0;"><b>Ready</b></div>
        </button>
    </div>
    </form>
    <a href="formLogin.php">
        <div class="waves-effect waves-light footerButton z-depth-3">
            <div>Do you have an account?</div>
        </div>
    </a>
    </div>

</section>


<?php
include './componentesInterfaz/A_footerData.php';
?>