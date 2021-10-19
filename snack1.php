<!-- Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 
-->

<?php 
    $partite = [
        [
            'squadraCasa' => 'Armani Jeans Milano',
            'squadraOspite' => 'Dinamo Sassari',
            'puntiCasa' => '87',
            'puntiOspite' => '73'
        ],
        [
            'squadraCasa' => 'Virtus Bologna',
            'squadraOspite' => 'Rayer Venezia',
            'puntiCasa' => '68',
            'puntiOspite' => '71'
        ],
        [
            'squadraCasa' => 'Fortitudo Bologna',
            'squadraOspite' => 'De Longhi Treviso',
            'puntiCasa' => '79',
            'puntiOspite' => '86'
        ],
        [
            'squadraCasa' => 'Vanoli Basket',
            'squadraOspite' => 'Pallacanestro Varese',
            'puntiCasa' => '56',
            'puntiOspite' => '68'
        ],
        [
            'squadraCasa' => 'Aquila Basket Trento',
            'squadraOspite' => 'Allianz Pallacanestro Trieste',
            'puntiCasa' => '69',
            'puntiOspite' => '70'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
    </head>
    <body>
        <?php 
             for ($i = 0; $i < count($partite); $i++) {
                  echo $partite[$i]['squadraCasa'] . ' - ' .  $partite[$i]['squadraOspite'] . ' | ' . $partite[$i]['puntiCasa'] . ' - ' . $partite[$i]['puntiOspite'] . '<br>';
             } 
        ?>
    </body>
</html>