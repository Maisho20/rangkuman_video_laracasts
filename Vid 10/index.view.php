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