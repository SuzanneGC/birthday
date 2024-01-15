const enSavoirPlus = document.getElementById("enSavoirPlus") ;
const boutonSavoirPlus = document.getElementById("savoir+");

let displayOrNot = 0 ;

function displayExplanations(){
    if (displayOrNot === 0){
        enSavoirPlus.style.display = 'block' ;
        displayOrNot += 1 ;
        boutonSavoirPlus.innerText = "Masquer" ;
    }
    else {
        enSavoirPlus.style.display = 'none' ;
        displayOrNot = 0 ;
        boutonSavoirPlus.innerText = "En savoir plus" ;
    }
}
