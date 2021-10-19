<!-- Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $verificaName = false;
    $verificaMail = false;
    $verificaAge = false;

    if(!empty($_GET['name'])) {
        $name = $_GET['name'];
        if(strlen($name) < 3) {
            echo '<h1>Attenzione! Scrivi il nome completo</h1>';
        } else{
            $verificaName = true;
        }
        
    }; 
    if(!empty($_GET['mail'])) {
        $mail = $_GET['mail'];
        if(!strpos($mail, '@') || !strpos($mail, '.')) {
            echo '<h1>Attenzione! Inserisci la mail completa</h1>';
        } else{
            $verificaMail = true;
        }
    };
    if(is_nan($age)) {
        echo '<h1>Attenzione! Inserisci l eta corretta!</h1>';
    } else{
        $verificaAge = true;
    }

    if($verificaName == true && $verificaMail == true && $verificaAge == true) {
        echo '<h1>Accesso Consentito!</h1>';
    };

    
?>

