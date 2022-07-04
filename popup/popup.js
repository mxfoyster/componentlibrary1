/*
    #############################################
    #   Simple Pop Up Window v1.00              #
    #       By Mark Foyster                     #
    #############################################

    For usage instructions, please refer to README.md

*/


const activatePopUpBtn = document.getElementById("activatePopUp");
const popUpWindow = document.getElementById("popUp");
const closeBtn = document.getElementById('closeBtn');

let popUpStatus = false;

activatePopUpBtn.addEventListener("click", activatePopup);
closeBtn.addEventListener("click", activatePopup);

//start with our popup hidden
popUpWindow.setAttribute("style","visibility: hidden");

function activatePopup(thisID){
    popUpWindow.setAttribute("style","");
    if (!popUpStatus) {
        popUpWindow.classList.remove("popUpFadeOut");
        popUpWindow.classList.add("popUpFadeIn");
        document.body.classList.add("stopScrolling"); //stop mousewheel etc scrolling main window while dialog activated
        popUpStatus = true;
       
    }
    else{
        popUpWindow.classList.remove("popupFadeIn");
        popUpWindow.classList.add("popUpFadeOut");
        document.body.classList.remove("stopScrolling"); //re-enable scrolling main window
        
        popUpStatus = false;
    }
}
