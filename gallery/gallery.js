/* 
    #############################################
    #   Simple JS/CSS Gallery v1.00             #
    #       By Mark Foyster                     #
    #############################################

    For usage instructions, please refer to README.md

*/

const galleryCanvasContainer = document.getElementById("galleryCanvasContainer");
const imageRoot = "./images/"; //place the subdirectory your images are in here
const imageList = ["image1.png", "image2.png", "image3.png"]; //place your image names in this array

let dimensions ={
    startX: 0, 
    startY: 0,
    width: 0,
    height: 0
};

let controlsActiveCount=2; //counter for control fade

//we must make a canvas the correct size for our purpose by creating it dynamically
//size canvas to the popup window.. ****IF WE DON'T THE IMAGE IS DISTORTED****
//We'll add the arrows at the same time!
let canvContWidth = galleryCanvasContainer.offsetWidth;
let canvContHeight = galleryCanvasContainer.offsetHeight;
galleryCanvasContainer.innerHTML = "<canvas id=\"galleryCanvas\" width=\"" + canvContWidth + "\" height=\"" + canvContHeight + "\" style=\"border: 1px solid black; \" >Your browser does not support canvas.</canvas> <img src=\"gallery/left.svg\" id=\"leftArrow\"/><img src=\"gallery/right.svg\" id=\"rightArrow\"/>";
//get handles for canvas and controls we added
const galleryCanvas = document.getElementById("galleryCanvas"); 
const leftArrow = document.getElementById('leftArrow');
const rightArrow = document.getElementById('rightArrow');

//we need to be able to count down to fade out controls
setInterval(function() {
    if (controlsActiveCount > 0) controlsActiveCount-=1;
    else {
        leftArrow.classList.remove("fadeControlsIn");
        leftArrow.classList.add("fadeControlsOut");
        rightArrow.classList.remove("fadeControlsIn");
        rightArrow.classList.add("fadeControlsOut");
    }
    console.log(controlsActiveCount);
}
,1000);

//fade in controls on a mouse movement
galleryCanvas.onmousemove = ()=>{
    if (controlsActiveCount >0){
        leftArrow.classList.remove("fadeControlsOut");
        leftArrow.classList.add("fadeControlsIn");
        rightArrow.classList.remove("fadeControlsOut");
        rightArrow.classList.add("fadeControlsIn");
    }
controlsActiveCount = 3;   
}; //listener for mouse movement over canvas


let thisImage = new Image();
loadImage(1);


function loadImage(imageNumber){
thisImage.src = imageRoot + imageList[imageNumber];
thisImage.onload = function(){
    console.log("loaded");  
    //image.src = this.src;   
    displayImage();
};
}

function displayImage(){
    let galleryCanvasCxt = galleryCanvas.getContext("2d"); //get a context
    scaleToFit(thisImage, galleryCanvas);
    galleryCanvasCxt.clearRect(0, 0, galleryCanvas.width, galleryCanvas.height); //clear the canvas first
    galleryCanvasCxt.drawImage(thisImage, dimensions.startX, dimensions.startY, dimensions.width, dimensions.height);
    console.log(dimensions);
}


//our scaling and centreing math / logic
function scaleToFit(image, canvas){
    //calculate canvas aspect ratio
    let imageAspectRatio = image.height / image.width;
    //calculate image aspect ratio
    let canvasAspectRatio = canvas.height / canvas.width;
    
    //set some default values
    let usableHeight = image.width;
    let usableWidth = image.height;
    
    //the image is more portratit shaped than the available screen (disrecgarding dimensions)
    if (imageAspectRatio > canvasAspectRatio){
        usableHeight = canvas.height; //so we squish or stretch to height
        usableWidth = usableHeight / imageAspectRatio; //then set width from height using stored aspect ratoo
    }  
    //the image is more landscape shaped than the available screen
    else 
    {
        usableWidth = canvas.width; //so we sqeeze or stretch to width
        usableHeight = usableWidth * imageAspectRatio; //then set height from width using aspect ratio
    }

     
    //default x & y offsets (image centre offsets)
    let xOffset = 0;
    let yOffset = 0;
     
     //Calculate offsets
     if (usableWidth < canvas.width) xOffset = (canvas.width - usableWidth) / 2;
     if (usableHeight < canvas.height) yOffset = (canvas.height - usableHeight) / 2;
    
    
    //store them in our dimensions object
    dimensions.width = Math.round(usableWidth);
    dimensions.height = Math.round(usableHeight);
    dimensions.startX = Math.round(xOffset);
    dimensions.startY = Math.round(yOffset);
    
}

