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
            'releaseDate' => "10 Jul, 2013",
            'links' => "https://store.steampowered.com/app/570/Dota_2/"
        ],
        [
            'name' => "Counter-Strike: Global Offensive",
            'publisher' => "Valve",
            'releaseDate' => "22 Aug, 2012",
            'links' => "https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"
        ],
        [
            'name' => "Need for Speed™ Heat",
            'publisher' => "Electronic Arts",
            'releaseDate' => "8 nov, 2019",
            'links' => "https://store.steampowered.com/app/1222680/Need_for_Speed_Heat/"
        ]
     ];

        function filterByPublisher($games, $publisher) {
            $filteredGames = [];

            foreach ($games as $game){
                if ($game['publisher'] === $publisher){
                    $filteredGames[] = $game;
                }
            }
            return $filteredGames;
        };
    ?>
    
    <ul>
        <!--- Penggunaan filtering tanpa fungsi --->
        <?php foreach ($games as $game): ?>
            <?php if($game['publisher'] === 'Electronic Arts') : ?> 
            <li>
                <h2><?= $game['name'] ?></h2> 
                <p> By <?= $game['publisher'] ?></p>
                <a href="<?= $game['links'] ?>" target="_blank">Download Now</a> 
            </li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>

    <ul>
        <!-- penggunaan filtering dengan fungsi -->
        <?php foreach (filterByPublisher($games, 'Valve') as $game): ?>
            <li>
                <h2><?= $game['name'] ?></h2> 
                <p> By <?= $game['publisher'] ?></p>
                <a href="<?= $game['links'] ?>" target="_blank">Download Now</a> 
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>