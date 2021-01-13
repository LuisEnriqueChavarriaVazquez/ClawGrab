<?php
include './componentesInterfaz/A_headerData.php';
include './componentesInterfaz/navTitle.php';
include './componentesInterfaz/editData_Title.php';

//Primer archivo de logica del sign up
include 'L_editData.php';
?>

<section class="bodyStyleBlack">
<<<<<<< HEAD
    <div class="containerForm">
        <div class="titleForm"><?php echo $_EDIT_FORM1 ?></div>
        <div class="containerInputsForm">
            <form action="L_editData.php" method="post">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_name" type="text" class="validate" name="username" value="<?php echo $login_session_name ?>">
                    <label for="icon_name"><?php echo $_EDIT_FORM2 ?></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">perm_contact_calendar</i>
                    <input id="icon_age" type="text" class="validate" name="age" value="<?php echo $login_session_age ?>">
                    <label for="icon_age"><?php echo $_EDIT_FORM9 ?></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">travel_explore</i>
                    <input id="icon_pais" type="text" class="validate" name="country" value="<?php echo $login_session_country ?>">
                    <label for="icon_pais"><?php echo $_EDIT_FORM3 ?></label>
                </div>
                <br>
                <div class="input-field col s12 m6">
                    <select name="language" class="icons">
                        <option value="not_selected" disabled selected><?php echo $_EDIT_FORM4 ?></option>
                        <option value="spanish" data-icon="img/mexico.png" class="left">Español</option>
                        <option value="english" data-icon="img/us.png" class="left">English</option>
                        <option value="chinese" data-icon="img/china.png" class="left">中文</option>
                        <option value="portuguese" data-icon="img/brazil.png" class="left">português</option>
                        <option value="hindi" data-icon="img/india.png" class="left">हिंदी</option>
                        <option value="french" data-icon="img/france.png" class="left">français</option>
                    </select>
                    <label><?php echo $_EDIT_FORM4 ?></label>
                </div>
                <br>

                <div class="input-field col s6">
                    <i class="material-icons prefix">alternate_email</i>
                    <input id="icon_email" type="email" class="validate" name="mail" value="<?php echo $login_session ?>">
                    <label for="icon_email"><?php echo $_EDIT_FORM5 ?></label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="icon_password" type="text" class="validate" name="pass" value="<?php echo $login_session_pass ?>">
                    <label for="icon_password"><?php echo $_EDIT_FORM6 ?></label>
                </div>
        </div>
        <div class="submitInfo waves-effect waves-light z-depth-3">
            <button type="submit" name="submit" style="background-color: transparent; border: none;">
                <div class="sendButtonMine" style="margin: 10px 0 13px 0;"><b><?php echo $_EDIT_FORM8 ?></b></div>
            </button>
        </div>
        </form>
=======
<div class="containerForm">
            <div class="titleForm">Basic data.</div>
            <div class="containerInputsForm">
                <form action="L_editData_logica.php" method="post">
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
>>>>>>> 745d1c94c68c32148faba8d0871f7e3d5809ff3d


</section>


<?php
include './componentesInterfaz/A_footerData.php';
?>