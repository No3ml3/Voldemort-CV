<?php 
require 'tableauInformation.php';
require 'dataFormations.php' 
?>

<?php
    $messages_erreur = array();
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $erreur = false;
        foreach($_POST as $key => $value) {
            $contact[$key] = trim($value);
        }
        // Vérification du champ "nom"
        if (empty($contact['name'])) {
            $erreur = true;
            $messages_erreur['name'] = "Le champ 'Prénom' est obligatoire";
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
    }else{
        echo 'votre message a bien été envoyer ';
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modal</title>
</head>
<body>    
    <header>
        <div class="h1">
            <h1 class="h11">THANATOPRACTEUR</h1> 
            <img src="assets/images/Lordvoldemort-1-.png" alt="photo Voldemort pour CV" id='voldemort' class="VoldemortPhoto"/>
            <h1 class="H12"> LORD VOLDEMORT </h1> 
        </section>
    </header>
    <main>
        <!-- ouverture de la Modal -->
        <div class="bouton">
            <article id="myBtn1" class="presentation"> <h2>Présentation</h2></article>
            <article id="myBtn2" class="formation"><h2>Formations</h2></article>
            <article id="myBtn3" class="competence"><h2>Compétences</h2></article>   
            <article id="myBtn4" class="experience"><h2>Expériences</h2></article>
            <article id="myBtn5" class="contact"><h2>Contact</h2></article>
            <article id="myBtn6" class="reference"><h2>Références</h2></article>
            <article id="myBtn7" class="information"><h2>Informations</h2></article>
        </div>
</main>
    

<!--la Modal--> 
    <div id="myModal" class="modal">

        <!-- Modal contenu -->
        <div id='modal-content' class="modal-content">
        <span onclick="closeModal()" class="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
            </span>
            <div class='banniere'>
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
                    <img src="assets/images/banderoleSerpentard.png" alt="logoSerpentard" class="logoSerpentard">
            </div>        
            
            <div id='presentation' class='modalPresentation'>
                <h1>Présentation</h1>

                <img src="assets/images/snake1.png" alt="snake" class='imgSerpent'>
        
                <p> 
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.
                </p>
            </div>


            <div id='formation' class='modalFormation'>
            
            
                        <h1>Formations</h1>
                        <img src="assets/images/snake1.png" alt="snake" class="imgSerpent">
                        <main>
                        <ul>
                            <div class="divFormation">
                                <?php foreach ($dataFormations['formations'] as $formation) : ?>
                                    <li> 
                                        <p>
                                            <span class="dates"><?= $formation['date'];?></span> : <?=$formation['school'];?> - <?=$formation['town'];?>
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

            <div id='competence' class='modalCompetence' >
                <h1>Compétences</h1>
                <img src="assets/images/snake1.png" alt="snake" class='imgSerpent'>
                <p>

                </p>
            </div>

            <div id='experience' class='modalExperience'>
                    
                    
                    <h1>Expériences</h1>
                    <img src="assets/images/snake1.png" alt="snake" class='imgSerpent'>
                    

                <ul>
                    <li><span class="dates">1958 - 1960</span> <p> Animateur en centre de loisirs - Les Sequoias - Edimbourg</p> </li>
                    <li><span class="dates">1960 - 1964</span> <p> Vendeur - Barjow & Beurk - Allée des Embrumes - Londres</p></li>
                    <li><span class="dates">1964 - 1969</span> <p> Chauffeur-livreur - Chronopost - Saran</p></li>
                    <li><span class="dates">1969 - 1972</span> <p> Equarrisseur - Coopérative des trois moutons - Glasgow</p></li>
                    <li><span class="dates">1972 - 1975</span> <p> Professeur de Magie Noire - Poudlard</p> </li>
                    <li><span class="dates">1975 - 1987</span> <p> Commis de cuisine - Fouquet's - Paris</p> </li>
                </ul>
            </div>

            <div id='contact'  class='modalContact'>
            <ul>
                    <?php
                        if ( isset($erreur) && $erreur === true )
                        {
                            foreach ($messages_erreur as $champ => $message) { ?>
                            <li> <?php  echo 'Erreur dans le champ ' . $champ . ':' . $message;?> </li><br>
                            
                    <?php } }?>
                <form  action="" method="POST">

                    <legend>Contact</legend>
                
                        <label for="name">Votre Prénom</label>
                        <input type="text" id="name"  name='name' value='' required></input>
                    
                
                        <label for="email">Votre e-mail</label>
                        <input type="email" id="email" name='mail'  required></input>
                    
                
                        <label for="commentaire"> Votre commentaire</label>
                        <textarea name="commentaire" id="commentaire"  required></textarea>
                    
                    <button type='submit'>Submit</button>

                </form>
                
                    

                </ul>
            </div>

            <div id='reference' class='modalReference'>
                <h1>Références</h1>
                <img src="assets/images/snake1.png" alt="snake" class='imgSerpent'>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.
                </p>
            </div>

            <div id='information' class='modalInformation'>
                        <h1>Informations</h1>
                    <img src="assets/images/snake1.png" alt="snake" class="imgSerpent">

            <main>
                <div class="divInformation">
                <?php foreach($dataInformation as $title => $information):?>
                        <div class="<?= $title; ?>">
                            <h2><?= $title; ?></h2>
                            
                            <ul>
                                <?php foreach($information as $text):?>
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



    
</body>
<script src="script.js"></script>
<script>
    if( <?php echo ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($messages_erreur)) ? true : false ?> ){
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