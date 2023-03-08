<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Recommended Steam Games</h1>

    <?php
     $games = [
        "Dota 2",
        "Counter-Strike: Global Offensive",
        "Need for Speed™ Heat"
     ];
    ?>
    <ul>
        <?php foreach ($games as $game){
            echo "<li>$game</li>";
        }
        ?>
        <!-- <li>Dota 2</li>
        <li>Counter-Strike: Global Offensive</li>
        <li>Need for Speed™ Heat</li> -->
    </ul>

    <!-- alternatif lain -->
    <ul>
        <?php foreach ($games as $game) :?>
            <li><?= $game ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>