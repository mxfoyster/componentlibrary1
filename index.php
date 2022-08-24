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
    <!-- <script src="popup/popup.js" defer></script> -->
    
    
    <title>Component Library 1 (Pop Up Demo)</title>

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

            
           
            <h3>Contents</h3>

            <h4><a href="justcss.php">Plain CSS Components</a></h4>
            <p>A collection of components made using CSS3 without JavaScript. So far I have added:</p>
            <ul>
                <li>Badge <a href="justcss.php#badge-instructions">[HERE]</a></li>
                <li>ToolTips <a href="justcss.php#tooltip-instructions">[HERE]</a></li>
                <li>Image 'Spinner' <a href="justcss.php#spinner-instructions">[HERE]</a></li>
            </ul>

            <h4><a href="jsandcss.php">JS, CSS &amp; PHP Components</a></h4>
            <p>These components use a little JavaScript to make them work alongside CSS.</p>
            <ul>
                <li>Menu Bar <a href="jsandcss.php#menu-instructions">[HERE]</a></li>
                <li>Pop Up <a href="jsandcss.php#popup-instructions">[HERE]</a></li>
                <li>TTY Heading <a href="jsandcss.php#tty-instructions">[HERE]</a></li>
            </ul>
            <h4><a href="gallery.php">Gallery</a></h4>
            <p>This one is a little more complex so it has a page of it's own.</p>
            

            <br>
            <p>DISCLAIMER: This is a 'for fun' project, the code is not perfect and is work in progress. I'm simply extracting code I used in other personal projects, tidying it up a little and putting it in a repository. I intend to continue adding and improving the project over time. I'm releasing it as Open Source under a GNU GPL v3 license so if anything is useful, feel free to use it any way you please! Thank you for visiting.</p>
            <hr>
            
            <h3>Guidance on Implementation Instructions</h3>
            <p>There are brief implementation instructions for each component. Where a code example is shown, comments within the code for guidance are in green and anything that should be replaced according to your implementation will be in green. The normal code is a light blue. Here's an example:</p>

            <pre>
            <code>
                <span class="comment">
                //This is a comment
                /* So is this */
                &lt;!-- And this is a HTML comment--&gt;
                </span>
                <br/>
                let textToReplace = <span class="toAlter">"This is text you should change!"</span>;
                <br>
                console.log ("Normal Code is this colour!!");
            </code>
            </pre>
            <br>
        </div>

        
        <div class="footer"></div>
        <?php include 'footer.php' ?>
        </div>
    
</body>
</html>