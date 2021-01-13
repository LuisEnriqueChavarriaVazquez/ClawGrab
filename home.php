<?php
include './componentesInterfaz/A_headerData.php';
?>


<nav class="colorNavLight nav-extended">
    <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger iconNav show-on-large"><img class="iconsSize iconColorLight" src="icons/menu-black-18dp.svg" alt="menu icon"></a>
        <span class="titleNav flow-text"><?php echo $_HOMETITLE ?></span>
        <a class="btn-floating btn-large halfway-fab waves-effect waves-light botonCodeDesign" id="codificar">
            <i class="material-icons">code</i>
        </a>
    </div>
</nav>
<ul id="mobile-demo" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="img/fondo.jpg" width="300px">
            </div>
            <a href="#name"><span class="white-text name"><?php echo $login_session_name; ?></span></a>
            <a href="#email"><span class="white-text email"><?php echo $login_session; ?></span></a>
        </div>
    </li>
    <li><a href="comunidadHome.php" class="waves-effect"><i class="material-icons">groups</i><?php echo $_OPT1 ?></a></li>
    <li><a href="formEditData.php" class="waves-effect"><i class="material-icons">edit</i><?php echo $_OPT2 ?></a></li>
    <li><a onclick="M.toast({html: '<?php echo $_CHANGE_DONE ?>'})" href="#!" class="waves-effect" id="pythonista"><i class="material-icons blue-grey-text">palette</i>Pythonista</a></li>
    <li><a onclick="M.toast({html: '<?php echo $_CHANGE_DONE ?>'})" href="#!" class="waves-effect" id="hacker"><i class="material-icons green-text">palette</i>Hacker</a></li>
    <li><a onclick="M.toast({html: '<?php echo $_CHANGE_DONE ?>'})" href="#!" class="waves-effect" id="dark"><i class="material-icons black-text">palette</i>Dark</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="menuAyuda.php" class="waves-effect"><i class="material-icons">help</i><?php echo $_OPT3 ?></a></li>
    <li><a href="L_logOut.php" class="waves-effect"><i class="material-icons">directions_run</i><?php echo $_OPT4 ?></a></li>
</ul>

<section class="bodyStyle" id="dropzone">
    <pre style="height: 200000px;">

</pre>
</section>

<section>
    <section class="boxInferiorDesign row" style="margin: 0px !important;">
        <div class="codigoGenerado col s9">

            <pre id="myInput">
text copied
</pre>

            <style>
                textarea {
                    position: absolute !important;
                    left: -100% !important;
                }
            </style>

        </div>
        <div class="botonesCodigo col s3">
            <div class="buttonActionCode primeroAction">
                <div><i class="material-icons">save</i></div>
            </div>
            <div class="containerButtonsActionCode">
                <div class="buttonActionCode waves-effect modal-trigger" href="#modal1"><i class="material-icons">play_arrow</i></div>
                <div class="buttonActionCode waves-effect" id="buttonCopy" onclick="M.toast({html: '<?php echo $_TEXT_COPIED ?>'})"><i class="material-icons">content_copy</i></div>
            </div>
        </div>
    </section>
    <section class="tabsConCards">
        <div class="card" style="margin: 0px !important;">
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#test4"><?php echo $_NAV1 ?></a></li>
                    <li class="tab"><a href="#test5"><?php echo $_NAV2 ?></a></li>
                    <li class="tab"><a href="#test6"><?php echo $_NAV3 ?></a></li>
                </ul>
            </div>
            <div class="card-content adjustCardMine grey lighten-4">
                <div id="test4" class="mainBoxDraggers">


                    <?php include 'componentesDragAndDrop/v_variable.php'; ?>
                    <button class="waves-effect waves-light btn bordered blue-grey darken-4" id="Boton_1" style="border-radius:200px;" ;><i class="material-icons">exposure_plus_1</i></button>
                    <br><br>

                    <div class="padreElement_1">
                        <div class="tagGrap winston primeroVar" style="position: absolute !important;">
                            <div class="piezaUno z-depth-3" id="0">
                                Dar a &nbsp;
                                <input type="text" class="browser-default valor"  placeholder="variable" value="Gato">
                                &nbsp; el valor de &nbsp;
                                <input type="text" class="browser-default valor" placeholder="valor" value="">
                            </div>
                        </div>
                    </div>


                    <br><br><br><br>

                    <button class="waves-effect waves-light btn bordered blue-grey darken-4" id="Boton_2" style="border-radius:200px;" ;><i class="material-icons">exposure_plus_1</i></button>
                    <br><br>

                    <div class="padreElement_2">
                        <div class="tagGrap winston segundoVar" style="position: absolute !important;">
                            <div class="piezaUno  z-depth-3">
                                Sumar a &nbsp;
                                <input type="text" class="browser-default valor" placeholder="variable">
                                &nbsp; el valor &nbsp;
                                <input type="text" class="browser-default valor" placeholder="valor">
                            </div>
                        </div>
                    </div>

                    <br><br><br><br>

                    <button class="waves-effect waves-light btn bordered blue-grey darken-4" id="Boton_3" style="border-radius:200px;" ;><i class="material-icons">exposure_plus_1</i></button>
                    <br><br>

                    <div class="padreElement_3">
                        <div class="tagGrap winston terceroVar" style="position: absolute !important;">
                            <div class="piezaDos  z-depth-3">
                                Imprimir &nbsp;
                                <input type="text" class="browser-default valor" placeholder="texto">
                            </div>
                        </div>
                    </div>


                    <br><br><br><br>

                </div>
                <div id="test5">Elementos 2</div>
                <div id="test6">Elementos 3</div>
            </div>
        </div>
    </section>
</section>


<?php
include './componentesInterfaz/home_compilador.php';
include './componentesInterfaz/A_footerData.php';
?>