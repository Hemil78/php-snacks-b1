<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
    $classes = [
        
        [
            'name' => 'Mario',
            'surname' => 'Rossi',
            'votes' => [5, 6, 8, 4, 5]
        ],
        [
            'name' => 'Samuele',
            'surname' => 'Verdi',
            'votes' => [4, 3, 6, 5, 5]
        ],       
        [
            'name' => 'Luca',
            'surname' => 'Bianchi',
            'votes' => [7, 6, 7, 8, 4]
        ],       
        [
            'name' => 'Ambra',
            'surname' => 'Mazzoleni',
            'votes' => [8, 7, 8, 6, 8]
        ],
        [
            'name' => 'Gioia',
            'surname' => 'Gregucci',
            'votes' => [7, 6, 6, 7, 5]
        ]   
    ];
    function calcMedia($numbers) {
        $vote = 0;
        foreach($numbers as $number) {
            $vote += $number;
        }
        return round($vote / count($numbers), 2);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 7</title>
    </head>
    <body>
        <h1>Lista Classe Studenti:</h1>

        <?php foreach($classes as $class) { ?>
            <?php echo($class['name']); ?><br>
            <?php echo($class['surname']); ?><br>

            <?php echo calcMedia($class['votes']);  ?><br>
                
        <?php } ?>

        
    </body>
</html>