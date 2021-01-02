<?php
include './componentesInterfaz/A_headerData.php';
include './componentesInterfaz/navTitle.php';
include './componentesInterfaz/upload_Title.php';
?>

<section class="bodyStyleBlack">
    <div class="containerForm">
        <div class="titleForm">Datos básicos.</div>
        <div class="containerInputsForm">
            <form action="" method="post">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_name" type="text" class="validate">
                    <label for="icon_name">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">filter_1</i>
                    <input id="icon_palabra_uno" type="text" class="validate">
                    <label for="icon_palabra_uno">Palabra clave 1</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">filter_2</i>
                    <input id="icon_palabra_dos" type="text" class="validate">
                    <label for="icon_palabra_dos">Palabra clave 2</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">filter_3</i>
                    <input id="icon_palabra_tres" type="text" class="validate">
                    <label for="icon_palabra_tres">Palabra clave 3</label>
                </div>

                <div class="file-field input-field">
                    <div class="btn black white-text">
                        <span><i class="material-icons">insert_drive_file</i></span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </form>
        </div>
        <div name="submit" class="submitInfo waves-effect waves-light z-depth-3">
            <div><i class="material-icons">cloud_upload</i></div>
            <div>&nbsp;&nbsp; Subir el archivo</div>
        </div>
    </div>

</section>


<?php
include './componentesInterfaz/A_footerData.php';
?>