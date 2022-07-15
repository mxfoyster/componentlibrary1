<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="menu/menu.css">
    <link rel="stylesheet" href="ttyheading/ttyheading.css">
    <script src="ttyheading/ttyheading.js" defer></script>
    <title>Component Library 1 (TTY-Heading Demo)</title>    
</head>
<body>
    <div class="main-container">

        <div class="header">
           <h1>Component Library 1</h1> 
           <h2>By Mark Foyster</h2>
           <?php $_GET['id']=3; include 'menu/menu.php' ?>
           <hr>
        </div>

        <div class="middle">
            <h3>TTY Heading</h3>
            <h3 class="scroll">This is my TTY Heading, hover over me!</h3>
            <br />
            <div class="scroll">This is another TTY Heading, hover over me too!</div>
            <br/>

            <div style="width: 50%;"><div class="scroll">Yet another one, this one shorter</div></div>
            <p>This is not terribly practical but I had a lot of fun making it.</p>
            
           
            <p>This one was for fun. I used it for an early portfolio website I made a few months back. It's not terribly practical butI had a lot of fun with it. The font is a 'fixed pitch' variety (VT323) I found on Google Fonts. The license is in a text file along with the font in the 'font' subdirectory in this component's repo.</p>

            <p>The code can be found in my GitHub repository <a href="https://github.com/mxfoyster/componentlibrary1/tree/main/ttyheading">HERE</a>. Have fun!</p>
         
        </div>

        
        <div class="footer"></div>
            <?php include 'footer.php' ?>
        </div>
    
</body>
</html>