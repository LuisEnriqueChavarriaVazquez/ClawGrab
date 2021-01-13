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
      
});