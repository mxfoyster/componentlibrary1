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
    
    
    <title>Component Library 1 (Just CSS)</title>

</head>
<body>
    <div class="main-container">

        <div class="header">
           <h1>Component Library 1</h1> 
           <h2>By Mark Foyster</h2>
           <?php $_GET['id']=2; include 'menu/menu.php' ?>
           <hr>
        </div>

        <div class="middle">
           
            <h3>Plain CSS Components</h3>

            <p>A collection of simple components that utilise only CSS. Many (probably all) of these will utilise CSS3 or beyond. Therefore please consider browser support. Find the code on my GitHub repository <a href="https://github.com/mxfoyster/componentlibrary1/tree/main/justcss">HERE</a></p>

            <p>To add one of these components to your project, scroll through <i>justcss.css</i> in the <i>justcss</i> folder of the repository. Each section is divided by comments. Locate the section you require and copy/paste that section into your project css file.<p> 

            <p>If you wish to use several components, you could install the files on your server and add the stylesheet to your webpage by adding the following html to your <b>&lt;head></b> like so:

<pre><code>
    &lt;link rel="stylesheet" href="justcss/justcss.css">
</code></pre>
    
            <p>More specific implementation for each component is explained below:</p>
            <h4>Contents</h4>
            <p><a href="#badge-instructions">[BADGE]</a>&nbsp;<a href="#tooltip-instructions">[TOOL TIP]</a>&nbsp;<a href="#spinner-instructions">[IMAGE SPINNER]</a></p>
            <hr>

            <h4 id="badge-instructions">Simple Badge</h4>

            <p>These badges are handy for focusing attention to something on the page.</p>
            <span class="badge">BADGE</span> <span class="badge">NEW</span> <span class="badge">SPECIAL OFFER</span>

            <b>To Implement:</b> 
            <p>Add the CSS to your project as exlained earlier</p>
            
            <p>Now simply add the <i>badge</i> class to the element you wish to use like this:</p>

<pre><code>
     &lt;div class="badge"><span class="toAlter">MY TEXT</span>&lt;/div>
</code></pre>
   
            <hr>
            <h4 id="tooltip-instructions">Tooltips on mouse hover</h4>

            <p>Hover over this 
                     
                    <span class="badge toolTipContainer">BADGE<span class="toolTipText">Here's the tooltip</span></span>
            to see the tooltip. Or hover over this 
                <span class="toolTipContainer">
                    <span class="toolTipText">Here's another tooltip</span> 
                    <span class="badge">BADGE</span>
                </span>
            to see a different tooltip. See how the same code works for multiple instances.</p>
            <p>You will notice ther position of the tooltip depends on implementation.</p>
            
            <b>To Implement:</b> 
            <p>Add the CSS to your project as exlained earlier</p>

            <p>You have two options, let's add this component to a <i>badge</i> component to implement a tooltip. The easiest way is to add the `toolTipContainer` class to the <i>badge</i> element and then put our tooltip inside it like so:</p>

<pre><code>
    &lt;p><span class="toAlter">Testing a </span>&lt;span class="badge toolTipContainer"><span class="toAlter">BADGE</span>&lt;span class="toolTipText"><span class="toAlter">My tooltip</span>&lt;/span>&lt;/span><span class="toAlter"> with hover.</span>&lt;/p>
</code></pre>
    

            <p>As you can see, the tooltip text is simply put within the `&lt;span>` of class `toolTipText`. The tooltip will be displayed where we put it offset by the <i>margin</i> properties in our CSS. If a separate contatiner is used to encapsulate the <i>badge</i> and *toolTipText* containers like so:</p>



<pre><code>
    &lt;span class="toolTipContainer">
        &lt;span class="toolTipText"><span class="toAlter">Here's another tooltip</span>&lt;/span> 
        &lt;span class="badge"><span class="toAlter">BADGE</span>&lt;/span>
    &lt;/span>
</code></pre>
            
            <p>The tooltip text will be display in the exact position of the *badge* element offset by the margins. Therefore, this method is more predictable. To change the location of the tooltip, regardless of implementation method, simply alter the margins within the `.toolTipContainer .toolTipText ` selector of the CSS. You can play with the colours, borders etc here too! </p>
 

            <hr>

            <h4 id="spinner-instructions">Simple Image Spinner</h4>
            <p>A simple way using just CSS to cycle between different images like so:</p>
            <div id="imageSpinnerContainer"></div>
            
            <br><br>
            <b>To Implement:</b> 
            <p>Add the CSS to your project as exlained earlier then change the images to those of your choice here:</p>

            

<pre><code>
     @keyframes imageSpin 
    {
        0%, 100%  {background-image: url(<span class="toAlter">"../images/html.png"</span>);}    
        33%  {background-image: url(<span class="toAlter">"../images/css.png"</span>);}
        66%   {background-image: url(<span class="toAlter">"../images/JavaScript.png"</span>);}
    }
</code></pre>
   


            <p>You can see we are set up for 3 images at present but you can add or deduct from that by changing the percentage ratio to divide the timeline equally. For stable results, the images need to be the same size. </p> 

            <p>Next the size of the images and total duration of the cycle needs to be set in the `immageSpinnerContainer` selector CSS like so:</p> 

<pre><code>
    #imageSpinnerContainer 
    {
        width: 64px; <span class="comment">/*Set to your image width*/</span>
        height: 64px;  <span class="comment">/*Set to your image Height*/</span>
        animation-name: imageSpin;
        animation-duration: 9s; <span class="comment">/*Set duration of ENTIRE cycle */</span>
        animation-timing-function: ease;
        animation-iteration-count: infinite;
        display: inline-block;
    }
</code></pre>

            <p>The comments will guide you where to make the changes. Remember the duration is the entire cycle so each image will be displayed by that number divided by the total number of images, eg, 3 seconds each here... Allow a bit of extra time for the transition for best clarity.</p> 


            <br><br>
        </div>

        
        <div class="footer"></div>
        <?php include 'footer.php' ?>
        </div>
    
</body>
</html>