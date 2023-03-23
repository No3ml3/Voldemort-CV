<?php 
include 'tableauInformation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Eater&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="modalInformation.css" rel="stylesheet">
    <title>Formations</title>
</head>

<body class="bodyModalInfo">

    <header>
        <div class="headerInformation">
                <img src="img/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
            <div class="logoEtText">
                <h1>Informations</h1>
               <img src="img/snake2.png" alt="snake" class="imgSerpent">
            </div>
                <img src="img/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
        </div>
    </header>

    <main>
    <div class="divInformation">
    <?php foreach($dataInformation as $title => $information):?>
            <div class="<?= $title; ?>">
                <h2><?= $title; ?></h2>
                <?php foreach($information as $text):?>
                <ul>
                    <li><?= $text?></li>
                </ul>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
            </div>
    </main>
    <footer class="footerModalInfo">
        <img src="img/deathEater.png" alt="deathEater" class="deathEater">
    </footer>
</body>

</html>

