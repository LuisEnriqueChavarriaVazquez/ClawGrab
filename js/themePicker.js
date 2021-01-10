$(document).ready(function () {

    var temaGuardado;
    var tema = $("#theme");
    var temaAutomatico;


    //Definicion de color por defecto para el primer uso
    if(localStorage.getItem("tema") === null){
        localStorage.setItem("tema", "css/pythonista.css"); 
        temaAutomatico = localStorage.getItem("tema");
        tema.attr("href", temaAutomatico);
    }

    //Craga automatica del tema anterior
    function automaticSetter(){
        temaAutomatico = localStorage.getItem("tema");
        tema.attr("href", temaAutomatico);
    }

    automaticSetter();


    //Definir los temas nuevos en el localStorage
    function python(){
        localStorage.setItem("tema", "css/pythonista.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    function dark(){
        localStorage.setItem("tema", "css/dark.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    function hack(){
        localStorage.setItem("tema", "css/hacker.css");
        temaGuardado = localStorage.getItem("tema"); 
    }

    //Funciones de click en cada uno de los temas
    document.getElementById('pythonista').addEventListener('click', function () {
        python();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('dark').addEventListener('click', function () {
        dark();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('hacker').addEventListener('click', function () {
        hack();
        tema.attr("href", temaGuardado);
    })

});