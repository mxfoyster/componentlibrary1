<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="popup/popup.css">
    <link rel="stylesheet" href="menu/menu.css">
    <link rel="stylesheet" href="gallery/gallery.css">
    <link rel="stylesheet" href="gallery/spinner.css">
    <title>Component Library 1 (Gallery)</title>
    <script src="popup/popup.js" defer></script>
    <script src="gallery/gallery.js" defer></script>
</head>
<body>
    <div class="main-container">

        <div class="header">
           <h1>Component Library 1</h1> 
           <h2>By Mark Foyster</h2>
           <?php $_GET['id']=4; include 'menu/menu.php' ?>
           <hr>
        </div>

        <div class="middle">
            <h3>Gallery</h3>
            <div class="popUp" id="popUp">
                <div class="popUpTitleContainer"><span class="popUpTitle"></span></div>
                <div id="galleryCanvasContainer">
              
                </div>
                <img id="closeBtn" src="popup/closebtn.png">
                <span id="spinnerContainer"><?php include 'gallery/spinner.php' ?></span> 
            </div>
           
            <p>Just a simple gallery viewer with zoom and drag</p>
            <button type="button" onclick="activatePopup('Photo Gallery','override')">Open Gallery</button>
            <p>The gallery stores the server path to the images in a constant and the filenames of each image in an array. Simply alter these in the code as shown in the instructions (README.md).</p>

            <p>The gallery displays the images on a HTML canvas. The controls are displayed during mouse or pointer (touch) activity over the canvas and will fade out after about 3 seconds of inactivity. Once mouse / pointer movement is detected, the controls will re-appear. This feature allows for unobstructed view of the images.</p>

            <p>Towards the top of the screen, the current image number and the total number of images within the gallery are displayed (eg: <i>Image 1 of 3</i>)</p>
            
            <p>The Left and right arrows displayed to the left and the right of the popup window respectively allow navigation between multiple images.</p> 
            <img src="gallery/left.svg" alt="left arrow">&nbsp;&nbsp;<img src="gallery/right.svg" alt="right arrow">
            
            <p>Towards the bottom of the popup, a control for magnification is provided too. Additionally, zoom will respond to a mouse wheel. </p>
            <img src="images/zoomcontrol.png" alt="zoom control">

            <p>The image can be dragged within the popup window using the mouse (or finger with touch).</p>

            <p>Whilst an image is loading, so the user does not get confused, a 'spinner' is displayed. you will see in the source code that I utilised someone else's spinner component for this. Find it at <a href="https://loading.io/css/">Loading.io</a>. It's by <b>PlotDB Ltd</b> and is licensed under <i>CC0</i> creative commons and can therefore be used without attribution. Check the page out, there's much more useful stuff on there and they deserve a visit!</p>

            <p>I have not extensively tested this gallery component, in particular the 'touch' features. Be sure to let me know if you find any bugs or have suggestions.</p>

            <p>The code can be found in my GitHub repository <a href="https://github.com/mxfoyster/componentlibrary1/tree/main/gallery">HERE</a></p>

            <h3>Implementation</h3>
            <p>Copy the <i>gallery</i> folder into your project, you cam leave out the README.md and galleryss.png files if you like.</p> 

            <p>Add the CSS and JavaScript sources in the <i>&lt;head></i> like so:</p> 

<pre><code>
    &lt;link rel="stylesheet" href="popup/popup.css">
    &lt;link rel="stylesheet" href="menu/menu.css">
    &lt;link rel="stylesheet" href="gallery/gallery.css">
    &lt;script src="popup/popup.js" defer>&lt;/script>
    &lt;script src="gallery/gallery.js" defer>&lt;/script>
</code></pre>
    

            <p>Now add the following code into the <i>&lt;body></i> of the web page:</p> 

<pre><code>
    &lt;div class="popUp" id="popUp">
        &lt;div class="popUpTitleContainer">&lt;/div>
        &lt;div id="galleryCanvasContainer">&lt;/div>
        &lt;span id="spinnerContainer">&lt;?php include 'gallery/spinner.php' ?>&lt;/span> 
        &lt;img id="closeBtn" src="popup/closebtn.png"> 
    &lt;/div>

</code></pre>
    

            <p>Edit *gallery.js* to add the correct folder and add your source images into the array here:</p> 

<pre><code>
    const imageRoot = "./images/"; <span class="comment">//place the subdirectory your images are in here</span>
    const imageList = ["image1.png", "image2.png", "image3.png"]; <span class="comment">//place your image names in this array</span>
</code></pre>

            <p>To trigger the gallery, you can add a button like this:</p>

            <pre>
<code>
    &lt;button type="button" onclick="activatePopup(<span class="toAlter">'Gallery Title Here'</span>, 'override')"><span class="toAlter">GALLERY</span>&lt;/button&gt;
</code>
</pre>
            <p>You can choose whatever title you like here. The override string tells the popup not to try and load an external html file, be sure to add it as above!</p>
            <p>Note the comments to help guide you.</p> 
            

            <h3>What next?</h3>
            <p>I am thinking about some animated transitions between image changes. A feature to load a lower resolution image initially and / or a 'loading image' banner when using large image file sizes seems like a good idea too. I think there is room for improvement on the 'error handling' aspect of the image loading.</p>
        </div>

        
        <div class="footer"></div>
            <?php include 'footer.php' ?>
        </div>
    
</body>
</html>