<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // BOUCLES
    for ($i = 0; $i <= 9; $i++) {
        echo $i;
    }

    echo PHP_EOL;

    for ($i = 10; $i >= 0; $i--) {
        echo $i;
    }

    echo PHP_EOL;

    for ($i = 10; $i >= -10; $i -= 3) {
        echo $i;
    }

    echo PHP_EOL;

    // CONDITIONS
    $firstPokemon = 'Bulbizarre';

    if ($firstPokemon === 'Bulbizarre') {
        echo 'Bon choix';
    } elseif ($firstPokemon === 'Salameche') {
        echo 'Pas de personnalité';
    } else {
        echo 'Ah, c\'est donc ' . $firstPokemon;
    }

    echo PHP_EOL;

    // TABLEAU INDEXE
    $teamMembers = ['Bulbizarre', 'Salamèche', 'Carapuce', 'Pikachu'];

    $teamMembers[] = 'Mewto';

    foreach ($teamMembers as $key => $teamMember) {
        echo $key + 1 . ') ' . $teamMember . PHP_EOL;
    }

    // TABLEAUX ASSOCIATIFS

    $members = [
        'Bulbizarre' => 15,
        'Salamèche' => 7,
        'Carapuce' => 3,
        'Pikachu' => 45,
        'Mewto' => 100,
    ];

    $members['Bulbizarre'] = $members['Bulbizarre'] + 1;
    // unset($members['Bulbizarre']);
    array_shift($members);

    asort($members);
    ?>
    <h2>Liste des pokemon</h2>
    <ul>
        <?php foreach ($members as $name => $level) { ?>
            <li><?php echo $name . ' : ' . $level; ?></li>
        <?php } ?>
    </ul>

    <h2>Liste des pokemon entre 10 et 45</h2>
    <ul>
        <?php foreach ($members as $name => $level) { ?>
            <?php if ($level >= 10 && $level <= 45) { ?>
                <li><?php echo $name . ' : ' . $level; ?></li>
            <?php } ?>
        <?php } ?>
    </ul>

    <section>
        <h1>TABLEAU MULTIDIMENSIONNEL</h1>
        <?php
        $categories = [
            'Eau' => ['Bulbizarre', 'Mystherbe', 'Chetiflor'],
            'Feu' => ['Carapuce', 'Stari', 'Magicarpe'],
            'Plante' => ['Salamèche'],
            'Sol' => ['Sabelette', 'Taupiqueur'],
        ];

        $categories['Feu'][] = 'Caninos';
        $categories['Electrique'] = ['Pikachu', 'Magneti', 'Voltorbe'];
        ?>
        <?php foreach ($categories['Plante'] as $member) { ?>
            <?php echo $member; ?>
        <?php } ?>

        <?php echo count($categories['Eau']) ?>

        <?php foreach ($categories as $category => $members) { ?>
            <h2><?php echo $category ?></h2>
            <ul>
                <?php foreach ($members as $member) { ?>
                    <li><?php echo $member ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
        <?php
            require 'functions.php';

            $category = 'electrique';
            $name = 'pika';

            $sayHello = sayHello($category, $name);
            echo $sayHello;

            echo fight('Carapuce', 'Salamèche', $categories);
            echo fight('Salamèche', 'Carapuce', $categories);
            echo fight('Bulbizarre', 'Magicarpe', $categories);
         ?>
    </section>
</body>

</html>