
<?php require 'dataRef.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Eater&display=swap" rel="stylesheet"/>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="modalRef.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <title>Références</title>
  </head>

  <body>
    <header>
      <h1>Références</h1>
    </header>


    <section class="references">
<?var_dump($dataReferences);?>
      <?php foreach ($dataReferences['references'] as $reference) : ?>

      <div class="reference">
        <img src="./assets/images/<?= $reference['picture']; ?> " alt="">
        <div class="description">
          <h1><?= $reference['name']; ?></h1>
          <h2><?= $reference['job']; ?></h2>
      </div>
        </div>

        <?php endforeach ?>

    </section>
  </body>
</html>
