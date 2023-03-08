<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>Recommended Steam Games</h1>

    <?php
     $games = [
        [
            'name' => "Dota 2",
            'publisher' => "Valve",
            'links' => "https://store.steampowered.com/app/570/Dota_2/"
        ],
        [
            'name' => "Counter-Strike: Global Offensive",
            'publisher' => "Valve",
            'links' => "https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"
        ],
        [
            'name' => "Need for Speed™ Heat",
            'publisher' => "Electronic Arts",
            'links' => "https://store.steampowered.com/app/1222680/Need_for_Speed_Heat/"
        ]
     ];
    ?>
    
    <ul>
        <li>
            <?php foreach ($games as $game): ?>
                <h2><?= $game['name'] ?></h2> 
                <p> By <?= $game['publisher'] ?></p> 
                <a href="<?= $game['links'] ?>">Download Now</a> 
            <?php endforeach ?>
        </li>
    </ul>
</body>
</html>