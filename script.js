
//ajouts des différents mp3 
let audio = new Audio("assets/audio/amplificatum.mp3");
let reduire = new Audio("assets/audio/reducto.mp3");
let avadaKedavra = new Audio("assets/audio/avada-kedavra.mp3");

// recuperer la modal
let modal = document.getElementById("myModal");
let modalTextPresentation =document.getElementById("presentation")
let modalTextFormation =document.getElementById("formation")
let modalTextCompetence =document.getElementById("competence")
let modalTextExperience =document.getElementById("experience")
let modalTextContact =document.getElementById("contact")
let modalTextReference =document.getElementById("reference")
let modalTextInformation =document.getElementById("information")

// récupération des boutons pour les ouvertures de la modal 
let presentation = document.getElementById("myBtn1");
let formation = document.getElementById("myBtn2");
let competence = document.getElementById("myBtn3");
let experience = document.getElementById("myBtn4");
let contact = document.getElementById("myBtn5");
let reference = document.getElementById("myBtn6");
let information = document.getElementById("myBtn7");


// recuparation  de la balise  <span> qui ferme la modal
let span = document.getElementsByClassName("close")[0];

// quand l'utilisateur clique ça ouvre les diférentes modal en fonction du bouton 
presentation.onclick = function() {
    modal.style.display = "block";
    modalTextPresentation.style.display = "block";
    audio.play();
}

formation.onclick = function() {
    modal.style.display = "block";
    modalTextFormation.style.display = "block";
    audio.play();
}

competence.onclick = function() {
    modal.style.display = "block";
    modalTextCompetence.style.display = "block";
    audio.play();
}
experience.onclick = function() {
    modal.style.display = "block";
    modalTextExperience.style.display = "block";
    audio.play();
}
reference.onclick = function() {
    modal.style.display = "block";
    modalTextReference.style.display = "block";
    audio.play();
}

information.onclick = function() {
    modal.style.display = "block";
    modalTextInformation.style.display = "block";
    audio.play();
}

formation.onclick = function() {
    modal.style.display = "block";
    formation.style.display = "block";
    audio.play();
}

// quand l'utilisateur clique ça ferme la modal
span.onclick = function() {
modal.style.display = "none";
reduire.play();
}

// quand l'utilisateur clique ça ferme la modal en cliquant n'importe ou 

window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
    reduire.play();
}
}