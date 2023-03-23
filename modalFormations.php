<?php require 'dataFormations.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Eater&display=swap" rel="stylesheet">
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="modalFormations.css" rel="stylesheet">
    <title>Formations</title>
</head>
<body>

    <header>
        <img src="./assets/images/snake.png" alt="snake">
        <h1>Formations</h1>
    </header>

    <ul>
    <?php foreach ($dataFormations['formations'] as $formation) : ?>

        <li><span class="dates"><?= $formation['date'];?></span> : <?=$formation['school'];?> - <?=$formation['town'];?></li>
  

  <?php endforeach ?>
    
</body>
</html>