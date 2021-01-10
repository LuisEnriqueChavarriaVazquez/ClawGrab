<?php
include './componentesInterfaz/A_headerData.php';
include './componentesInterfaz/navTitle.php';
include './componentesInterfaz/signUp_Title.php';
?>

<section class="bodyStyleBlack">
    <div class="containerForm">
        <div class="titleForm">Datos básicos.</div>
        <div class="containerInputsForm">
            <form action="controladorDBUsuario.php" method="post">
                <input type="hidden" id="accion" value="registroUsuario">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_name" type="text" class="validate">
                    <label for="icon_name">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">travel_explore</i>
                    <input id="icon_pais" type="text" class="validate">
                    <label for="icon_pais">País</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">face</i>
                    <input id="icon_edad" type="number" class="validate">
                    <label for="icon_edad">Edad</label>
                </div>
                <br>
                <div class="input-field col s12 m6">
                    <select class="icons">
                        <option value="" disabled selected>Selecciona tu idioma.</option>
                        <option value="" data-icon="img/mexico.png" class="left">Español</option>
                        <option value="" data-icon="img/us.png" class="left">English</option>
                        <option value="" data-icon="img/china.png" class="left">中文</option>
                        <option value="" data-icon="img/brazil.png" class="left">português</option>
                        <option value="" data-icon="img/india.png" class="left">हिंदी</option>
                        <option value="" data-icon="img/france.png" class="left">français</option>
                    </select>
                    <label>Lengua</label>
                </div>
                <br>
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
            <div><i class="material-icons">done_all</i></div>
            <div>&nbsp;Listo</div>
        </div>
        <a href="formLogin.php">
            <div class="waves-effect waves-light footerButton z-depth-3">
                <div>¿Ya tienes cuenta?</div>
            </div>
        </a>
    </div>

</section>


<?php
include './componentesInterfaz/A_footerData.php';
?>