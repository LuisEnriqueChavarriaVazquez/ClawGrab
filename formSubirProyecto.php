<?php
include './componentesInterfaz/A_headerData.php';
include './componentesInterfaz/navTitle.php';
include './componentesInterfaz/upload_Title.php';

?>

<section class="bodyStyleBlack">
    <div class="containerForm">
        <div class="titleForm"><?php echo $_SHARE_CODE1 ?></div>
        <div class="containerInputsForm">
            <form action="L_uploadFile.php" method="post" enctype="multipart/form-data">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_name" name="name" type="text" class="validate">
                    <label for="icon_name"><?php echo $_SHARE_CODE2 ?></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">filter_1</i>
                    <input id="icon_palabra_uno" name="keyOne" type="text" class="validate">
                    <label for="icon_palabra_uno"><?php echo $_SHARE_CODE3 ?></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">filter_2</i>
                    <input id="icon_palabra_dos" name="keyTwo" type="text" class="validate">
                    <label for="icon_palabra_dos"><?php echo $_SHARE_CODE4 ?></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">filter_3</i>
                    <input id="icon_palabra_tres" name="keyThree" type="text" class="validate">
                    <label for="icon_palabra_tres"><?php echo $_SHARE_CODE5 ?></label>
                </div>

                <div class="file-field input-field">
                    <div class="btn black white-text">
                        <span><i class="material-icons">insert_drive_file</i></span>
                        <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
        </div>
        <div class="submitInfo waves-effect waves-light z-depth-3">
            <button type="submit" name="submit" style="background-color: transparent; border: none;">
                <div class="sendButtonMine" style="margin: 10px 0 13px 0;"><b><?php echo $_SHARE_CODE6 ?></b></div>
            </button>
        </div>
        </form>
    </div>

</section>


<?php
include './componentesInterfaz/A_footerData.php';
?>