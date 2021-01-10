<?php
    switch ($login_session_idioma) {
        case "spanish":
            include 'languages/espanol.php';
            break;
        case "english":
            include 'languages/ingles.php';
            break;
        case "chinese":
            include 'languages/chino.php';
            break;
        case "portuguese":
            include 'languages/portugues.php';
            break;
        case "hindi":
            include 'languages/hindi.php';
            break;
        case "french":
            include 'languages/frances.php';
            break;
    }
