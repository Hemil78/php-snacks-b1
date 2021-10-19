<!-- Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $verifica = false;

    if(!empty($_GET['name'])) {
        $name = $_GET['name'];
        if(!$name >= 3) {
            echo '<h1>Attanzione! Scrivi il nome completo</h1>';
        } else{
            $verifica = true;
        }
        
    }; 
    if(!empty($_GET['mail'])) {
        $mail = $_GET['mail'];
        if(!strpos($mail, '@') && strpos($mail, '.')) {
            echo '<h1>Attenzione! Inserisci la mail completa</h1>';
        } else{
            $verifica = true;
        }
    };
    if($verifica == true) {
        echo '<h1>Accesso Consentito!</h1>';
    };

    
?>

