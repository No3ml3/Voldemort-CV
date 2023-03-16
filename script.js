
//ajouts des différents mp3 
let audio = new Audio("assets/audio/amplificatum.mp3");
let reduire = new Audio("assets/audio/reducto.mp3");
let avadaKedavra = new Audio("assets/audio/avada-kedavra.mp3");

// recuperer la modal
let modal = document.getElementById("myModal");

// récupération du bouton de la modal 
let btn = document.getElementById("myBtn");

// recuparation  de la balise  <span> qui ferme la modal
let span = document.getElementsByClassName("close")[0];

// quand l'utilisateur clique ça ouvre la modal
btn.onclick = function() {
modal.style.display = "block";
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