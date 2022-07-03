/*
    #############################################
    #   Simple Pop Up Window v1.00              #
    #       By Mark Foyster                     #
    #############################################

    MAKE A SUB DIRECTORY popup THEN ADD popup.js, popup.css & closebtn.png TO IT
    THEN ADD THE FOLLOWING HTML WITHIN YOUR HEAD:
    
    <link rel="stylesheet" href="popup/popup.css">
    <script src="popup/popup.js" defer></script>

    
    ADD THE FOLLOWING HTML WITHIN YOUR BODY (replacing content between ####'s with your own)

    <div class="popUp" id="popUp">
        <div class="popUpTitleContainer"><span class="popUpTitle">###PUT YOUR TITLE HERE####</span></div>
        <img id="closeBtn" src="popup/closebtn.png">
        #### PUT YOUR HTML FOR INSIDE THE POPUP HERE ####
    </div>
    
    USE THE activatePopUp ID to your control to launch the product, EG:

    <button type="button" id="activatePopUp">Pop Up</button>

    


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
        popUpStatus = true;
       
    }
    else{
        popUpWindow.classList.remove("popupFadeIn");
        popUpWindow.classList.add("popUpFadeOut");
        popUpStatus = false;
    }
}
