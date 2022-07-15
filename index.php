<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="popup/popup.css">
    <link rel="stylesheet" href="menu/menu.css">
    <link rel="stylesheet" href="justcss/justcss.css">
    <title>Component Library 1 (Pop Up Demo)</title>

    <script src="popup/popup.js" defer></script>
</head>
<body>
    <div class="main-container">

        <div class="header">
           <h1>Component Library 1</h1> 
           <h2>By Mark Foyster</h2>
           <?php $_GET['id']=1; include 'menu/menu.php' ?>
           <hr>
        </div>

        <div class="middle">
            <h3>Welcome</h3>
            <img src="images/smimage.png" class="fwimage" alt="website social media image">
            <p>Welcome to my Component Library. There are demos for each component within here to help guide you for implementation. Each componenet has a README.md file within the appropriate subdirectory in the repository within GitHub. Here too there is guidance for implementation.</p>

            <p>DISCLAIMER: This is a 'for fun' project, the code is not perfect and is work in progress. I'm simply extracting code I used in other personal projects, tidying it up a little and putting it in a repository. I intend to continue adding and improving the project over time. I'm releasing it as Open Source under a GNU GPL v3 license so if anything is useful, feel free to use it any way you please! Thank you for visiting.</p>
            <div class="popUp" id="popUp">
                <div class="popUpTitleContainer"><span class="popUpTitle">Pop Up Title Here</span></div>
                <img id="closeBtn" src="popup/closebtn.png">
                <div class="popUpBody"><p>PLACE CONTENTS FOR YOUR POP UP IN HERE</p></div>     
            </div>

            
            <h3>Pop Up</h3>
            <p>Press the button to see the popup, code can be found in my GitHub repository <a href="https://github.com/mxfoyster/componentlibrary1/tree/main/popup">HERE</a></p>
            
            <button type="button" id="activatePopUp">Pop Up</button>

            <p>Note how scrolling on the main window is disabled when the popup is active. This makes it easier to use scrolling within the popup. The down side is that when the web page has scroll bars, they will disappear while the popup is activated. The underlying screen will slightly re-size shifting the content within it to utilise the additional width.</p>
            <hr/>
            <h3>Plain CSS Components</h3>

            <p>A collection of simple components that utilise only CSS. Many (probably all) of these will utilise CSS3 or beyond. Therefore please consider browser support. Find the code on my GitHub repository <a href="https://github.com/mxfoyster/componentlibrary1/tree/main/justcss">HERE</a></p>

            <h4>Simple Badge</h4>

            <p>These badges are handy for focusing attention to something on the page.</p>
            <span class="badge">BADGE</span> <span class="badge">NEW</span> <span class="badge">SPECIAL OFFER</span>

            <h4>Tooltips on mouse hover</h4>

            <p>Hover over this 
                     
                    <span class="badge toolTipContainer">BADGE<span class="toolTipText">Here's the tooltip</span></span>
            to see the tooltip. Or hover over this 
                <span class="toolTipContainer">
                    <span class="toolTipText">Here's another tooltip</span> 
                    <span class="badge">BADGE</span>
                </span>
            to see a different tooltip. See how the same code works for multiple instances.</p>
            <p>You will notice ther position of the tooltip depends on implementation.</p>
                

            <h4>Simple Image Spinner</h4>
            <p>A simple way using just CSS to cycle between different images like so:</p>
            <div id="imageSpinnerContainer"></div>
            <br><br>
        </div>

        
        <div class="footer"></div>
        <?php include 'footer.php' ?>
        </div>
    
</body>
</html>