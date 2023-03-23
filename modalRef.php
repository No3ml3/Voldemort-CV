
<?php require 'dataRef.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Eater&display=swap" rel="stylesheet"/>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="modalRef.css" rel="stylesheet" />
    <title>Références</title>
  </head>

  
    <header>
        <div class="headerInformation">
                <img src="img/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
            <div class="logoEtText">
                <h1>Références</h1>
               <img src="img/snake2.png" alt="snake" class="imgSerpent">
            </div>
                <img src="img/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
        </div>    
   </header>

<body>
    <div class="divInformation">
      <?php foreach ($dataReferences['references'] as $reference) : ?>

      <div class="reference">
        <img src="./assets/images/<?= $reference['picture']; ?> " alt="">
        <div class="description">
          <h2><?= $reference['name']; ?></h2>
          <h3><?= $reference['job']; ?></h3>
      </div>
      </div>

        <?php endforeach ?>

        

    </section>
    <footer class="footerModalInfo">
        <img src="img/deathEater.png" alt="deathEater" class="deathEater">
    </footer>
  </body>
</html>
