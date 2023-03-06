<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif
        }
    </style>
</head>
<body>
    
    <!-- boolean - Vid 5 -->
    <?php 
        $name = "The Book Of Vishanti";
        $read = true;

        if($read){
            $message = "You have read $name";
        }else{
            $message = "You did'nt have read $name";
        }
    ?>
    <h1>
        <?= $message; ?>
        <!-- You have read "<?php echo $name; ?>" -->
    </h1>
    
</body>
</html>