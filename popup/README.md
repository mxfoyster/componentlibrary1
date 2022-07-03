
# Simple Pop Up Window v1.00           
## By Mark Foyster                 
   

 MAKE A SUB DIRECTORY `popup` THEN ADD `popup.js`, `popup.css` & `closebtn.png` TO IT
THEN ADD THE FOLLOWING HTML WITHIN YOUR HEAD:
   
    
```
    <link rel="stylesheet" href="popup/popup.css">
    <script src="popup/popup.js" defer></script>
```
    
    ADD THE FOLLOWING HTML WITHIN YOUR BODY

```
    <div class="popUp" id="popUp">
        <div class="popUpTitleContainer"><span class="popUpTitle">PUT YOUR TITLE HERE</span></div>
        <img id="closeBtn" src="popup/closebtn.png">
        #### PUT YOUR HTML FOR INSIDE THE POPUP HERE ####
    </div>
 ```  

USE THE `activatePopUp` ID to your control to launch the product, EG:

```
    <button type="button" id="activatePopUp">Pop Up</button>
```