<?php 
$games = [
    [
        'name' => "Dota 2",
        'publisher' => "Valve",
        'releaseYear' => "2013",
        'links' => "https://store.steampowered.com/app/570/Dota_2/"
    ],
    [
        'name' => "Counter-Strike: Global Offensive",
        'publisher' => "Valve",
        'releaseYear' => "2012",
        'links' => "https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"
    ],
    [
        'name' => "Need for Speed™ Heat",
        'publisher' => "Electronic Arts",
        'releaseYear' => "2019",
        'links' => "https://store.steampowered.com/app/1222680/Need_for_Speed_Heat/"
    ]
];

function filter($items, $fn) {
    $filteredItems = [];

    foreach ($items as $item){
        if ($fn($item)){
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
};

$filtergames = filter($games, function($game){
    return $game['releaseYear'] <= 2015;
});

require("index.view.php");