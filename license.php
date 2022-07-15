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
    <title>Component Library 1 (License Information)</title>

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
          <h3>License Information</h3>
          <img src="images/gpl3.png" alt="GPL License Icon">
          <p>This library is Open Source under GNU GENERAL PUBLIC LICENSE Version 3, more information below:</p>

          <p>Component Library 1. is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.</p>

          <p>Component Library 1. is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.</p>

          <p>You should have received a copy of the GNU General Public License along with Component Library 1.. If not, see <a href="https://www.gnu.org/licenses/">https://www.gnu.org/licenses/</a>.</p>

        </div>

        
        <div class="footer"></div>
          <?php include 'footer.php' ?>
        </div>
    
</body>
</html>