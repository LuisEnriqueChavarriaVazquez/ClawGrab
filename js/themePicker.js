$(document).ready(function() {

    var tema = $("#theme");

    document.getElementById('pythonista').addEventListener('click', function() {
        tema.attr("href", "css/pythonista.css");
    })

    document.getElementById('dark').addEventListener('click', function() {
        tema.attr("href", "css/dark.css");
    })

    document.getElementById('hacker').addEventListener('click', function() {
        tema.attr("href", "css/hacker.css");
    })

});