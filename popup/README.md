
# Simple Pop Up Window v1.00           
## By Mark Foyster                 
   

### Implementation

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

### Customising style

Within the popup.css, at the top are the following custom properties:


```
:root{
    /* COLOURS */
    --popUpBackgroundColour: whitesmoke; 
    --popUpBoxShadowColour: rgb(141, 139, 139); /* Best to set this a darker tone of the background colour */
    --popUpTitleColour:red;
    --popUpBorderColour: mediumblue;
    
    /* SIZES */
    --popUpSize: 90%; /*This is the size of the entire popup relative to screen*/
    --popUpTitleFontSize: 2rem;
}

```

Simply change the colours and sizes to your preference for minor changes.

The remainder of this CSS file is pretty basic. Further customisation is easy using fundamental CSS knowledge.