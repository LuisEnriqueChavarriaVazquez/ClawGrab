$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.modal').modal();
    $('select').formSelect();
    $('.materialboxed').materialbox();
    
    //Para el mago de ayuda
    $('.tap-target').tapTarget();
    
    $('input[type="checkbox"]').on('change', function () {
        $('.tap-target').tapTarget('open');
    })
    
    //Swipeable tabs
    $('.tabs').tabs();
    $('ul.tabs').tabs({
        /*swipeable: true,
        responsiveThreshold: Infinity*/
    });

    //Boton de copiado en el home
    function copyFunction() {
        const copyText = document.getElementById("myInput").textContent;
        const textArea = document.createElement('textarea');
        textArea.textContent = copyText;
        document.body.append(textArea);
        textArea.select();
        document.execCommand("copy");
    }

    document.getElementById('buttonCopy').addEventListener('click', copyFunction);

    //Meter el texto
    var functionZero = "NULL // 0 elements detected";
    var functionOne = "print('Hola mundo')"; // Impresion básica
    var functionDos = "num1 = 1.5" + "\n" 
    + "num2 = 6.3" + "\n" 
    + "sum = num1 + num2"+ "\n" 
    + "print(sum)"; //Suma de valores
    var functionTres = "# par o impar" + "\n" 
    + "numero = int(input('Ingrese un numero: '))" + "\n" 
    + "if (numero % 2) == 0:" + "\n" 
    + "     print('Es par')" + "\n" 
    + "else:" + "\n"
    + "     print('Es impar')"; // Nos dice si es par o no

    var functionCuatro = "import random"+ "\n" + "numero = random.randint(0,9)" +"\n" +"print(numero)"

    var functionCinco = "import calendar" + "\n" 
    + "yy = 2000" + "\n"
    + "mm = 10" + "\n"
    + "getCalendar = calendar.month(yy, mm)" + "\n"
    + "print(getCalendar)" + "\n"
    + "# Fin del ejemplo"


    var final = "hurra = 'Viva ESCOM'" + "\n" + "print(hurra)";

    var codeConsole = document.getElementById('myInput');
    //var botonEjecutar = document.getElementById('codificar');   
    $('#codificar').click(function(){
        codeConsole.textContent = final;
    });

      
});