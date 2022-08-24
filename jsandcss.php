<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="popup/popup.css">
    <link rel="stylesheet" href="menu/menu.css">
    <!-- <link rel="stylesheet" href="gallery/gallery.css"> -->
    <link rel="stylesheet" href="ttyheading/ttyheading.css">
    <script src="ttyheading/ttyheading.js" defer></script>
    <title>Component Library 1 (CSS &amp; More )</title>
    <script src="popup/popup.js" defer></script>
    <!-- <script src="gallery/gallery.js" defer></script> -->
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
            <h3>JS, CSS &amp; PHP Components</h3>
            <p>Some slightly more complicated components that use a little JavaScript alongside CSS and / or some PHP.</p>
            <h4>Contents</h4>
            <p><a href="#menu-instructions">[MENU BAR]</a>&nbsp;<a href="#popup-instructions">[POP UP WINDOW]</a>&nbsp;<a href="#tty-instructions">[TELETYPE SCROLLER]</a></p>
            <hr>
            <h3 id="menu-instructions">Simple Menu Bar</h3>
            <p>This is the menu bar system I am using for this website. It's nothing special but I quite like it. Here's a screensot of it:</p>
            <img src="menu/menuss.png" alt="Screenshot of menu">
            <p>The nav bar is set in a <i>flexbox</i> style container set to evenly distribute the buttons horizontally and overflow will wrap. it's quite plain but customising it takes little effort.</p>
            <h4>Implementation</h4>   
            
            <p>Simply download the files from the <a href="https://github.com/mxfoyster/componentlibrary1/tree/main/menu">menu</a> subdirectory in the GitHub Repository add the stylesheet to your `&lt;head>` like so:</p> 
<pre><code>
    &lt;link rel="stylesheet" href="menu/menu.css">   
</code></pre>

            <p>Insert the following PHP into the page where you wish to add the menu (eg, a header container):</p> 

<pre><code>
    &lt;?php $_GET['id']=<span class="toAlter">1</span>; include 'menu/menu.php' ?>
</code></pre>
            <p>You will need to change the <b>id</b> number to the number corresponding to the button this page links to. Finally, alter <b><i>menu.php</i></b> to suit. Here's an example:</p> 



<pre><code>
    &lt;?php 
    function isSelected($id){
        if ($_GET['id'] == $id) echo " class=\"menuItemSelected\"";
        else echo " class=\"menuItemUnselected menuItemHoverable\"";
    }
    ?>
    &lt;nav class="menuContainer">
        &lt;a href=<span class="toAlter">"index.php"</span>&lt;?php isSelected(<span class="toAlter">1</span>);?>><span class="toAlter">Home</span>&lt;/a>
        &lt;a href=<span class="toAlter">"gallery.php"</span>&lt;?php isSelected(<span class="toAlter">2</span>);?>><span class="toAlter">Gallery</span>&lt;/a>   
    &lt;/nav>
</code></pre>

            <p>All you need to do is change the <i>href</i> values to your pages and ensure you have the correct <b>id</b> for that page as the parameter for the <i>isSelected</i> function.</p>  

            <p>Finally, the text between the anchor (`&lt;a>&lt;/a>`) tags is the text that will be displayed on the buttons, so alter it appropriately. Add more anchors in the same manor to add more buttons.
</p> 
<h4>Customise the style</h4> 

            <p>This is done using menu.css. There are custom properties for the colours like so:</p> 

<pre><code>
    :root{
        --menuColor: <span class="toAlter">#45923a;</span> 
        --menuSelected: <span class="toAlter">#7a9876;</span>
    }
</code></pre>

            <p>Alter the colours to suit your style. Further alterations are strtaighforward by manipulating the CSS directly.</p> 


            
            <hr>
            <h3 id="popup-instructions">Pop Up</h3>
            <div class="popUp" id="popUp">
                <div class="popUpTitleContainer"><span id="popUpTitle">Pop Up Title Here</span></div>
                <img id="closeBtn" src="popup/closebtn.png">
                <div id="popUpBody"></div>     
            </div>
            <p>Press the buttons to see the popup's, code can be found in my GitHub repository <a href="https://github.com/mxfoyster/componentlibrary1/tree/main/popup">HERE</a></p>
            
            <button type="button" onclick="activatePopup('First Pop Up')">Pop Up</button>&nbsp;&nbsp;
            <button type="button" onclick="activatePopup('Second Pop Up', 'second')">AnotherPop Up</button>

            <p>Note how scrolling on the main window is disabled when the popup is active. This makes it easier to use scrolling within the popup. The down side is that when the web page has scroll bars, they will disappear while the popup is activated. The underlying screen will slightly re-size shifting the content within it to utilise the additional width.</p>

            <h4>Implementation</h4> 

            <p>Make a sub directory `popup` then add `popup.js`, `popup.css` &amp; `closebtn.png` to it then add the following html within your head:</p> 

<pre>
<code> 
    &lt;link rel="stylesheet" href="popup/popup.css">
    &lt;script src="popup/popup.js" defer></script>
</code>
</pre>

    
            <p>Add the following html within your body:</p> 

<pre>
<code>
    &lt;div class="popUp" id="popUp">
        &lt;div class="popUpTitleContainer">&gt;span class="popUpTitle">&lt;/span>&lt;/div>
        &lt;img id="closeBtn" src="popup/closebtn.png">
        &lt;div id="popUpBody">&lt;/div>     
    &lt;/div>

</code>
</pre>

            <p>Create a file in the <i>popup</i> subdirectory called 'default.html' and place the html content for the popup inside it.</p>
            <p>Call the `activatePopup()` function to launch the product. Pass the title as the first parameter. For example, you could use an <i>onclick</i> event handler on a button like this:</p> 
<pre>
<code>
    &lt;button type="button" onclick="activatePopup(<span class="toAlter">'Pop Up Title Here'</span>)"><span class="toAlter">Pop Up</span>&lt;/button&gt;
</code>
</pre>

            <h4>Multiple Pop Up's</h4>

            <p>The steps are as above but you simply create a different html file for each Pop Up within the 'popup' subdirectory and pass the name (minus the '.html') as the second parameter when you call the function. Here's an example, in this case the contents is in 'newfile.html': </p>
<pre>
<code>
    &lt;button type="button" onclick="activatePopup(<span class="toAlter">'New Title Here','newfile'</span>)"><span class="toAlter">Pop Up</span>&lt;/button&gt;
</code>            
</pre>
            <p>There is no real limit to how many pop up's you can have, it's just one pop up and the contents is loaded dynamically. Because of this, only one pop up can be displayed at a time, they cannot be overlayed. It would be possible to change the contents from within the pop up by simply calling 'activatePopup' twice. The first time would close the pop up and the second is where you would pass your new title and content filename as parameters to re-invoke it. I haven't had a need to try this yet, so this idea is untested!</p>
            <h4>Customising style</h4> 

            <p>Within the popup.css, at the top are the following custom properties:</p> 


<pre>
<code>
    :root{
        <span class="comment">/* COLOURS */</span>
        --popUpBackgroundColour: whitesmoke; 
        --popUpBoxShadowColour: rgb(141, 139, 139); <span class="comment">/* Best to set this a darker tone of the background colour */</span>
        --popUpTitleColour:red;
        --popUpBorderColour: mediumblue;
        
        <span class="comment">/* SIZES */</span>
        --popUpSize: 90%; <span class="comment">/*This is the size of the entire popup relative to screen*/</span>
        --popUpTitleFontSize: 2rem;
    }

</code>
</pre>


            <p>Simply change the colours and sizes to your preference for minor changes.The remainder of this CSS file is pretty basic. Further customisation is easy using fundamental CSS knowledge.</p> 

            <hr/>
            
            
            <h3 id="tty-instructions">TTY Heading</h3>
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