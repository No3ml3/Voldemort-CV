let audio = new Audio("assets/audio/amplificatum.mp3");
let reduire = new Audio("assets/audio/reducto.mp3");
let avadaKedavra = new Audio("assets/images/avada-kedavra.mp3");
// Get the modal
let modal = document.getElementById("myModal");

// Get the button that opens the modal
let btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
audio.play();
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
reduire.play();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
    reduire.play();
}
}