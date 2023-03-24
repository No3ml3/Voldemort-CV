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
            <img src="assets/images/Lordvoldemort-1-.png" alt="photo Voldemort pour CV" class="VoldemortPhoto" />
            <h1 class="H12"> LORD VOLDEMORT </h1>
            </section>
    </header>
    <main>
        <!-- ouverture de la Modal -->
        <div class="bouton">
            <article id="myBtn1" class="presentation">
                <h2>Présentation</h2>
            </article>
            <article id="myBtn2" class="formation">
                <h2>Formation</h2>
            </article>
            <article id="myBtn3" class="competence">
                <h2>Compétence</h2>
            </article>
            <article id="myBtn4" class="experience">
                <h2>Expérience</h2>
            </article>
            <article id="myBtn5" class="contact">
                <h2>Contact</h2>
            </article>
            <article id="myBtn6" class="reference">
                <h2>Référence</h2>
            </article>
            <article id="myBtn7" class="information">
                <h2>Information</h2>
            </article>
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
            <div id='presentation'>
                <h2>Présentation</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.
                </p>
            </div>


            <div id='formation'>

                <img src="snake1.png" alt="snake">
                <h1>Formations</h1>


                <ul>
                    <li><span class="dates">1930 - 1933</span> : Ecole maternelle Ruben Koyekoue - Mantes-La-Jolie </li>
                    <li><span class="dates">1933 - 1939</span> : Ecole élémentaire Sylvain Blondeau - Bouzonville-Aux-Bois</li>
                    <li><span class="dates">1939 - 1950</span> : Ecole de magie et de sorcellerie - Poudlard</li>
                    <li><span class="dates">1952 - 1953</span> : Brevet d'aptitude aux fonctions d'animateur (BAFA) - Glasgow </li>
                    <li><span class="dates">1953 - 1955</span> : DUT Thanatopraxie : Université Amaury Becker - Edimbourg</li>
                    <li><span class="dates">1955 - 1957</span> : CQP d'agent technique en marbrerie funéraire - Ecole de Funétique - Dundee </li>
                </ul>
            </div>

            <div id="competence" class="modalCompetences">

                <h2>Compétences</h2>

                <article>
                    <h2>Maîtrise de la magie noire</h2>
                    <p> Les Horcruxes, objets dans lesquels un mage noir enferme une partie de son âme en tuant quelqu'un.
                        Voldemort était particulièrement connu pour avoir séparé son âme en sept parties, créant ainsi six Horcruxes.</p>
                </article>
                <article>
                    <h2> Manipulation habile de la baguette de sureau</h2>
                    <p> La baguette de sureau également appelée le bâton de la mort ,elle est connue pour sa puissance, considérée comme supérieure à toutes les autres baguettes jamais fabriquées.</p>
                </article>

                <article>
                    <h2> Il est le roi des serpents</h2>
                    <p> Voldemort a réussi à dompter le Basilic le roi des serpent, l'une des créatures les plus dangeureuses.</p>
                </article>
                <article>
                    <h2> Tueur sadique</h2>
                    <p> Après sa sixième année à Poudlard, Voldemort se rend dans son village et assassine froidement ses parents et ses grand-parents.</p>
                </article>
                <article>
                    <h2> Thanatopracteur de renom</h2>
                    <p> Pendant quatre ans Voldemort a exercé le métier de Thanatopracteur à Poudlard, il profitait des son métier pour ramener des morts à la vie pour en faire des disciples.</p>
                </article>
                <article>
                    <h2> Chasseur de moldus</H2>
                    <p> Tout le monde connait la haine viscérale de Voldemort pour les modus, qu'il considère comme des êtres inférieures.</p>
                </article>


            </div>

            <div id='experience'>
                <h2>experience</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.
                </p>
            </div>

            <div id='contact'>
                <form method="post" action="form.php">

                    <legend>Contact</legend>
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="Votre nom..."></input>

                    <label for="email"></label>
                    <input type="email" id="email" placeholder="Votre e-mail..."></input>

                    <label for="commentaire"></label>
                    <textarea name="commentaire" id="commentaire" placeholder="Votre commentaire..."></textarea>
                    <button><a href="#">Submit</a></button>

                </form>
            </div>

            <div id='reference'>
                <h2>Titre de la page.</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.
                </p>
            </div>

            <div id='information'>
                <h2>Titre de la page.</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis praesentium explicabo
                    et eum maxime delectus inventore ducimus alias, accusamus libero voluptates possimus quidem
                    id eveniet? Praesentium corporis doloribus molestias.
                </p>
            </div>
        </div>
    </div>




</body>
<script src="script.js"></script>

</html>