<?php
require 'tableauInformation.php';
require 'dataFormations.php';
require 'dataRef.php';
require 'dataSkills.php';
require 'dataExp.php';
?>

<?php
$messages_erreur = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $erreur = false;
    foreach ($_POST as $key => $value) {
        $contact[$key] = trim($value);
    }
    // Vérification du champ "nom"
    if (empty($contact['prenom'])) {
        $erreur = true;
        $messages_erreur['prenom'] = "Le champ 'Prénom' est obligatoire";
    }



    // Vérification du champ "email"
    if (empty($contact['mail'])) {
        $erreur = true;
        $messages_erreur['mail'] = "Le champ 'Adresse e-mail' est obligatoire";
    } elseif (!filter_var($contact['mail'], FILTER_VALIDATE_EMAIL)) {
        $erreur = true;
        $messages_erreur['mail'] = "L'adresse e-mail n'est pas valide";
    }

    // Vérification du champ "message"
    if (empty($contact['commentaire'])) {
        $erreur = true;
        $messages_erreur['commentaire'] = "Le champ 'commentaire' est obligatoire";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">


    <title>Modal</title>
</head>

<body>
    <header>
        <div class="blocHeader">
            <h1 class="blocThanatopracteur">THANATOPRACTEUR</h1>
            <img src="assets/images/Lordvoldemort-1-.png" alt="photo Voldemort pour CV" class="VoldemortPhoto" id='voldemort' />
            <h1 class="blocVoldemort"> LORD VOLDEMORT </h1>
        </div>
    </header>
    <main>
        <!-- ouverture de la Modal -->
        <div class="bouton">
            <article class="presentation">
                <h2>Présentation</h2>
                <p class="presentationText">Lord Voldemort aka Tom Elvis Jedusor (PS: NE PRONONCÉ PAS MON NOM), le plus
                    dangereux mage noir de tous les temps se propose pour le rôle de thanatopracteur au sein de votre
                    entreprise. Ancien élève au sein de l'école de magie Poudlard, je pense parfaitement représenter les
                    traits qui caractérisent ma maison Serpentard: Machiavélique, diabolique, retors, tortueux. Je serai
                    parfaitement capable de m'intégrer au sein de votre entreprise pour créer une ambiance intimiste et
                    détendue. Le meilleur élève de ma promo; j'ai su démontrer dans ma vie mes immenses capacités
                    magiques. Ha et je suis immortel ou plutôt disons que j'ai defié la mort et que j'ai gagné.
                    (Embauchez-moi sinon je vous tue) </p>
            </article>
            <div class="boutonModal">
                <article id="myBtn2" class="formation">
                    <h2>Formations</h2>
                </article>
                <article id="myBtn3" class="competence">
                    <h2>Compétences</h2>
                </article>
                <article id="myBtn4" class="experience">
                    <h2>Expériences</h2>
                </article>
                <article id="myBtn5" class="contact">
                    <h2>Contact</h2>
                </article>
                <article id="myBtn6" class="reference">
                    <h2>Références</h2>
                </article>
                <article id="myBtn7" class="information">
                    <h2>Informations</h2>
                </article>
            </div>
        </div>
    </main>


    <!--la Modal-->
    <div id="myModal" class="modal">

        <!-- Modal contenu -->
        <div id='modal-content' class="modal-content">
            <span onclick="closeModal()" class="close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                </svg>
            </span>


            <div id='formation' class='modalFormation'>
                <div class='banniere'>
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                    <h1>Formations</h1>
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                </div>


                <img src="assets/images/snake1.png" alt="snake" class="imgSerpent">
                <main>
                    <ul>
                        <div class="divFormation">
                            <?php foreach ($dataFormations['formations'] as $formation) : ?>
                                <li>
                                    <p>
                                        <span class="dates"><?= $formation['date']; ?></span> : <?= $formation['school']; ?> - <?= $formation['town']; ?>
                                    </p>
                                </li>
                            <?php endforeach ?>
                        </div>
                    </ul>
                </main>
                <footer class="footerModalInfo">
                    <img src="assets/images/deathEater.png" alt="deathEater" class="deathEater">
                </footer>
            </div>

            <div id='competence' class='modalCompetences'>
                <div class='banniere'>
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                    <h1>Compétences</h1>
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                </div>

                <img src="assets/images/snake1.png" alt="snake" class='imgSerpent'>

                <main>
                    <?php foreach ($dataSkills['skills'] as $skill) : ?>

                        <article>
                            <h2 class='skillH2'> <?= $skill['titre']; ?></h2>
                            <p class='skillP'> <?= $skill['desc']; ?></p>
                        </article>
                    <?php endforeach; ?>

                </main>
                <footer class="footerModalInfo">
                    <img src="assets/images/deathEater.png" alt="deathEater" class="deathEater">
                </footer>
            </div>

            <div id='experience' class='modalExperience'>
                <div class='banniere'>
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                    <h1>Expériences</h1>
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                </div>
                <img src="assets/images/snake1.png" alt="snake" class='imgSerpent'>
                <main>

                    <ul>
                        <?php foreach ($dataExp['experiences'] as $experience) : ?>
                            <div>
                                <li>
                                    <p> <span><?= $experience['when']; ?></span> <?= $experience['whatWhere']; ?></p>
                                <li>
                                <?php endforeach; ?>
                    </ul>
                </main>
            </div>
            
        

        <div id='contact' class='modalContact'>
            <div class='banniere'>
                <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                <h1>Contact</h1>
                <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
            </div>
            <ul class='error'>
                <?php
                if (isset($erreur) && $erreur === true) {
                    foreach ($messages_erreur as $champ => $message) { ?>
                        <li> <?php echo 'Erreur dans le champ ' . $champ . ': ' . $message; ?> </li><br>

                <?php }
                } ?>
            </ul>
            <form action="" method="POST">

                <label for="name">Votre Prénom</label>
                <input type="text" id="name" name='prenom' value='' required></input>


                <label for="email">Votre e-mail</label>
                <input type="email" id="email" name='mail' required></input>


                <label for="commentaire"> Votre commentaire</label>
                <textarea name="commentaire" id="commentaire" required></textarea>

                <button type='submit'>Submit</button>

            </form>
            <footer class="footerModalInfo">
                <img src="assets/images/deathEater.png" alt="deathEater" class="deathEater">
            </footer>
        </div>

        <div id='reference' class='modalReference'>
            <div class='banniere'>
                <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                <h1>Référence</h1>
                <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
            </div>

            <img src="assets/images/snake1.png" alt="snake" class='imgSerpent'>

            <section class="references">
                <?php foreach ($dataReferences['references'] as $reference) : ?>

                    <div class="persoReference">
                        <img src="./assets/images/<?= $reference['picture']; ?> " alt="">
                        <div class="description">
                            <h1><?= $reference['name']; ?></h1>
                            <h2><?= $reference['job']; ?></h2>
                        </div>
                    </div>
                <?php endforeach ?>
            </section>
            <footer class="footerModalInfo">
                <img src="assets/images/deathEater.png" alt="deathEater" class="deathEater">
            </footer>
        </div>

        <div id='information' class='modalInformation'>
            <div class='banniere'>
                <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                <h1>Informations</h1>
                <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
            </div>



            <main>
                <img src="assets/images/snake1.png" alt="snake" class="imgSerpent">
                <div class="divInformation">
                    <?php foreach ($dataInformation as $title => $information) : ?>
                        <div class="<?= $title; ?>">
                            <h2><?= $title; ?></h2>

                            <ul>
                                <?php foreach ($information as $text) : ?>
                                    <li>
                                        <p> <?= $text ?> </p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    <?php endforeach; ?>
                </div>
            </main>
            <footer class="footerModalInfo">
                <img src="assets/images/deathEater.png" alt="deathEater" class="deathEater">
            </footer>
        </div>
    </div>
    </div>

    <footer>
        <nav class="navbar">
            <div class="réseaux">
                <img class="imgFooter" src="assets/images/facebook.jpg">
                <img class="imgFooter" src="assets/images/instagram.jpg">
                <img class="imgFooter" src="assets/images/snapchat.jpg">
                <img class="imgFooter" src="assets/images/twitter.jpg">
            </div>
            <div class="footer">
                <div class="email">
                    <img class="imgFooter" src="assets/images/messagerie.jpg">
                    <p> email:voldemort@gmail.com</p>
                </div>
                <div class="tel">
                    <img class="imgFooter" src="assets/images/téléphone.jpg">
                    <p> tel:01.66.66.66</p>
                </div>
            </div>
        </nav>
    </footer>



</body>
<script src="script.js"></script>
<script>
    if (<?php echo ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($messages_erreur)) ? true : false ?>) {
        modal.style.display = "block";
        content.style.display = "block";
        modalTextContact.style.display = "block";
        audio.play();
        modalTextFormation.style.display = "none";
        modalTextCompetence.style.display = "none";
        modalTextExperience.style.display = "none";
        modalTextPresentation.style.display = "none";
        modalTextReference.style.display = "none";
        modalTextInformation.style.display = "none";
    }
</script>

</html>