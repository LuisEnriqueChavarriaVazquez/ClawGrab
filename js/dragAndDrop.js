var longitudCajas;
var contadorIdUno = 0;
var textoEnChildrenUno;

$(document).ready(function () {
    $(".winston").draggable({ revert: "invalid" });
    $("#dropzone").droppable({
        drop: function (event, ui) {
            $(this).css('border', 'none');
            //longitudCajas = document.getElementById(contadorIdUno).children.length;
            //alert(/*longitudCajas + */" el contador va en "+ contadorIdUno);
        },
        over: function (event, ui) {
            $(this).css('border', 'dotted');
        }
    });
    //Cuando creamos un nuevo elemento tambien volvemos a hecerlo drag.
    function redrag() {
        $(".winston").draggable({ revert: "invalid" });
    }

    //Click para generar elementos
    $("#Boton_1").click(function () {
        contadorIdUno = contadorIdUno + 1;
        $(".padreElement_1").append("<div class='tagGrap winston primeroVar ui-draggable ui-draggable-handle' style='position: absolute !important;'><div class='piezaUno  z-depth-3' id=" + contadorIdUno + ">Dar a &nbsp;<input type='text' class='browser-default valor' placeholder='variable'>&nbsp; el valor &nbsp;<input type='text' class='browser-default valor' placeholder='valor'></div></div>");
        redrag();
    });

    $("#Boton_2").click(function () {
        $(".padreElement_2").append("<div class='tagGrap winston segundoVar ui-draggable ui-draggable-handle' style='position: absolute !important;'><div class='piezaUno  z-depth-3'>Sumar a &nbsp;<input type='text' class='browser-default valor' placeholder='variable'>&nbsp; el valor &nbsp;<input type='text' class='browser-default valor' placeholder='valor'></div></div>");
        redrag();
    });

    $("#Boton_3").click(function () {
        $(".padreElement_3").append("<div class='tagGrap winston terceroVar ui-draggable ui-draggable-handle' style='position: absolute!important; '>< div class='piezaDos  z-depth-3' >Imprimir & nbsp;<input type='text' class='browser-default valor' placeholder='texto'></div></div > ");
        redrag();
    });

    ///Generar el código
    $('#codificar').click(function(){
        textoEnChildrenUno = document.getElementById(contadorIdUno).children;
        console.log(textoEnChildrenUno[0]);
    });

   
    


});