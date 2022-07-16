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
    <title>Component Library 1 (Useful Links)</title>

    <script src="popup/popup.js" defer></script>
</head>
<body>
    <div class="main-container">

        <div class="header">
           <h1>Component Library 1</h1> 
           <h2>By Mark Foyster</h2>
           <?php $_GET['id']=5; include 'menu/menu.php' ?>
           <hr>
        </div>

        <div class="middle">
          <h3>Useful Links</h3>
          <ul>
            <li>This repository on <a href="https://github.com/mxfoyster/componentlibrary1">GitHub</a></li>
            <li>My current (work in progress) <a href="https://www.markfoyster.co.uk/">PORTFOLIO</a> web page</li>
            <li>My <a href="https://www.linkedin.com/in/mark-foyster-481a0431/">LinkedIn</a> profile</li>
          </ul>
           
        </div>

        
        <div class="footer"></div>
          <?php include 'footer.php' ?>
        </div>
    
</body>
</html>