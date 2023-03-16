<?php


function sayHello(string $type = 'Inconnu', string $name = 'Bulbi'): string
{
    return 'Hello ' . $name . ' de type ' . $type;
}

function fight(string $pokemon1, string $pokemon2, array $categories): string
{
    $pokemon1Category = getCategory($pokemon1, $categories);
    $pokemon2Category = getCategory($pokemon2, $categories);

    if (
        ($pokemon1Category === 'Feu' && $pokemon2Category === 'Plante') ||
        ($pokemon1Category === 'Eau' && $pokemon2Category === 'Feu') ||
        ($pokemon1Category === 'Plante' && $pokemon2Category === 'Eau')
    ) {
        return $pokemon1 . ' gagne sur ' . $pokemon2;
    } elseif ($pokemon1Category ===  $pokemon2Category) {
        return 'Match nul';
    } else {
        return $pokemon2 . ' gagne sur ' . $pokemon1;
    }
}

function getCategory(string $pokemon, array $categories): string
{
    foreach ($categories as $category => $members) {
        if (in_array($pokemon, $members)) {
            return $category;
        }
    }
}
