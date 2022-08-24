/*
    #############################################
    #   Simple Pop Up Window v1.11              #
    #       By Mark Foyster                     #
    #############################################

    For usage instructions, please refer to README.md

    
	LICENSE:

	This file is part of Component Library 1.

	Component Library 1. is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

	Component Library 1. is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

	You should have received a copy of the GNU General Public License along with Component Library 1.. If not, see <https://www.gnu.org/licenses/>.

*/


const activatePopUpBtn = document.getElementById("activatePopUp");
const popUpWindow = document.getElementById("popUp");
const closeBtn = document.getElementById('closeBtn');

let popUpStatus = false;

//activatePopUpBtn.addEventListener("click", activatePopup);
closeBtn.addEventListener("click", activatePopup);

//start with our popup hidden
popUpWindow.setAttribute("style","visibility: hidden");

function activatePopup(title, contents = "default"){
    
    let fileName = "popup/" + contents + ".html"; //build filename from parameter
    popUpWindow.setAttribute("style","");
    if (!popUpStatus) {
        //load popup text if it's not overridden
        if (contents !="override"){
            fetch(fileName, {
                
            }).then(function(response) {
                return response.text();
            }).then(function(response) {  
                    document.getElementById("popUpBody").innerHTML = response;
                    document.getElementById("popUpTitle").innerHTML = title;
            }).catch (function (error){
                console.log(error);  
                //noData();
            });
        }

        //display it
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
