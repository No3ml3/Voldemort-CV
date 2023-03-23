<?php require 'dataFormations.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="modalFormations.css" rel="stylesheet">
    <title>Formations</title>
</head>
<body class="bodyModalInfo">

    <header>
    <header>
        <div class="headerInformation">
                <img src="img/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
            <div class="logoEtText">
                <h1>Formations</h1>
               <img src="img/snake2.png" alt="snake" class="imgSerpent">
            </div>
                <img src="img/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
        </div>    

    </header>

    <main>
    <ul>
        <div class="divInformation">
    <?php foreach ($dataFormations['formations'] as $formation) : ?>

        <li><span class="dates"><?= $formation['date'];?></span> : <?=$formation['school'];?> - <?=$formation['town'];?></li>
  

  <?php endforeach ?>
    
    </div>
  </main>
    <footer class="footerModalInfo">
        <img src="img/deathEater.png" alt="deathEater" class="deathEater">
    </footer>
</body>

</html>