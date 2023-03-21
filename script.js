
//ajouts des différents mp3 
let audio = new Audio("assets/audio/amplificatum.mp3");
let reduire = new Audio("assets/audio/reducto.mp3");
let avadaKedavra = new Audio("assets/audio/avada-kedavra.mp3");





// quand l'utilisateur clique ça ouvre les diférentes modal en fonction du bouton 

    // recuperer la modal
let modal = document.getElementById("myModal");
let content = document.getElementById('modal-content');
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

    
    
    // Vérifiez quel bouton a été cliqué et définissez le contenu modal en conséquence
    presentation.addEventListener("click", function() {
        modal.style.display = "block";
        content.style.display = "block";
        modalTextPresentation.style.display = "block";
        audio.play();
        modalTextFormation.style.display = "none";
        modalTextCompetence.style.display = "none";
        modalTextExperience.style.display = "none";
        modalTextContact.style.display = "none";
        modalTextReference.style.display = "none";
        modalTextInformation.style.display = "none";
        
        
    });

    formation.addEventListener("click", function() {
        modal.style.display = "block";
        content.style.display = "block";
        modalTextFormation.style.display = "block";
        audio.play();
        modalTextPresentation.style.display = "none";
        modalTextCompetence.style.display = "none";
        modalTextExperience.style.display = "none";
        modalTextContact.style.display = "none";
        modalTextReference.style.display = "none";
        modalTextInformation.style.display = "none";
    });

    competence.addEventListener("click", function() {
        modal.style.display = "block";
        content.style.display = "block";
        modalTextCompetence.style.display = "block";
        audio.play();
        modalTextFormation.style.display = "none";
        modalTextPresentation.style.display = "none";
        modalTextExperience.style.display = "none";
        modalTextContact.style.display = "none";
        modalTextReference.style.display = "none";
        modalTextInformation.style.display = "none";
    });

    experience.addEventListener("click", function() {
        modal.style.display = "block";
        content.style.display = "block";
        modalTextExperience.style.display = "block";
        audio.play();
        modalTextFormation.style.display = "none";
        modalTextCompetence.style.display = "none";
        modalTextPresentation.style.display = "none";
        modalTextContact.style.display = "none";
        modalTextReference.style.display = "none";
        modalTextInformation.style.display = "none";
    });

        contact.addEventListener("click", function() {
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
    });

    reference.addEventListener("click", function() {
        modal.style.display = "block";
        content.style.display = "block";
        modalTextReference.style.display = "block";
        audio.play();
        modalTextFormation.style.display = "none";
        modalTextCompetence.style.display = "none";
        modalTextExperience.style.display = "none";
        modalTextContact.style.display = "none";
        modalTextPresentation.style.display = "none";
        modalTextInformation.style.display = "none";
    });

    information.addEventListener("click", function() {
        modal.style.display = "block";
        content.style.display = "block";
        modalTextInformation.style.display = "block";
        audio.play();
        modalTextFormation.style.display = "none";
        modalTextCompetence.style.display = "none";
        modalTextExperience.style.display = "none";
        modalTextContact.style.display = "none";
        modalTextReference.style.display = "none";
        modalTextPresentation.style.display = "none";
    });

    function closeModal(){
        let content = document.getElementById('modal-content');
        let closeModal = document.getElementById('myModal')
        // recuparation  de la balise  <span> qui ferme la modal
        let span = document.getElementsByClassName("close")[0];
        if(span.onclick ){
            closeModal.style.display = "none";
            content.style.display = "none";
    
        }
    }




// // quand l'utilisateur clique ça ferme la modal
// span.onclick = function() {
// modal.style.display = "none";
// reduire.play();
// }

// // quand l'utilisateur clique ça ferme la modal en cliquant n'importe ou 

window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
    reduire.play();
}
}