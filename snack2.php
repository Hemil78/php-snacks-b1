<!-- Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $verifica = false;

    if($name >= 3) {
        $verifica = true;
    }
    if(!empty($_GET['mail'])) {
        $mail = $_GET['mail'];
        if(strpos($mail, '@') && strpos($mail, '.')) {
            $verifica = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 2</title>
    </head>
    <body>
        <?php if($verifica == true): ?>
        <h1>Name, Mail e Age verificati. Accesso riuscito!</h1>
        <?php endif; ?>
    </body>
</html>