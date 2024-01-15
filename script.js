const enSavoirPlus = document.getElementById("enSavoirPlus") ;
const boutonSavoirPlus = document.getElementById("savoir+");

let displayOrNot = 0 ;

function displayExplanations(){
    if (displayOrNot === 0){
        enSavoirPlus.classList.remove("displayNone") ;
        enSavoirPlus.classList.add("displayBlock") ;
        displayOrNot += 1 ;
        boutonSavoirPlus.innerText = "Masquer" ;
    }
    else {
        enSavoirPlus.classList.add("displayNone") ;
        enSavoirPlus.classList.remove("displayBlock") ;
        displayOrNot = 0 ;
        boutonSavoirPlus.innerText = "En savoir plus" ;
    }
}
