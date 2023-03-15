<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Steam Games</h1>

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

        // function filter($items, $key, $value) {
        //     $filteredItems = [];

        //     foreach ($items as $item){
        //         if ($item[$key] === $value){
        //             $filteredItems[] = $item;
        //         }
        //     }
        //     return $filteredItems;
        // };
        
        function filter($items, $fn) {
            $filteredItems = [];

            foreach ($items as $item){
                if ($fn($item)){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        };

        // $filterByPublisher = function ($games, $publisher) {
        //     $filteredGames = [];

        //     foreach ($games as $game){
        //         if ($game['publisher'] === $publisher){
        //             $filteredGames[] = $game;
        //         }
        //     }
        //     return $filteredGames;
        // };

        //$filtergames = filter($games, 'releaseYear', '2019'); //extract variable 
        $filtergames = filter($games, function($game){
            return $game['releaseYear'] <= 2015;
        });
        // $filtergames = array_filter($games, function($game){
        //     return $game['releaseYear'] <= 2015;
        // });
    ?>


    <ul>
        <?php foreach ($filtergames as $game): ?>
            <li>
                <h2><?= $game['name'] ?></h2> 
                <p> By <?= $game['publisher'] ?></p>
                <a href="<?= $game['links'] ?>" target="_blank">Download Now</a> 
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>