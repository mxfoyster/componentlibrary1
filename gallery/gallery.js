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

let currentImage = 1;
let zoomFactor = 1;
let xDragOffset = 0;
let yDragOffset = 0;
let dragging = false;
let xTouchDeltaOffset = 0; //to make our own .movementX for touch
let yTouchDeltaOffset = 0; //to make our own .movementX for touch
let xTouchPrevPositionOffset = 0; //to preserve position between drags on touch
let yTouchPrevPositionOffset = 0;
let dimensions ={
    startX: 0, 
    startY: 0,
    width: 0,
    height: 0
};

let controlsActiveCount = 2; //counter for control fade

//we must make a canvas the correct size for our purpose by creating it dynamically
//size canvas to the popup window.. ****IF WE DON'T THE IMAGE IS DISTORTED****
//We'll add the controls at the same time!
let canvContWidth = galleryCanvasContainer.offsetWidth;
let canvContHeight = galleryCanvasContainer.offsetHeight;

let canvasHTML = "<canvas id=\"galleryCanvas\" width=\"" + canvContWidth + "\" height=\"" + canvContHeight + "\">";
canvasHTML += "Your browser does not support canvas.</canvas>";
let arrowsHTML = "<img src=\"gallery/left.svg\" id=\"leftArrow\"/><img src=\"gallery/right.svg\" id=\"rightArrow\"/>"
let zoomHTML = "<span id=\"zoomCtlBox\"><img src=\"gallery/zoom-out.png\" class=\"zoomControls\" id=\"zoomOutCtl\" />";
zoomHTML += "<img src=\"gallery/zoom-in.png\" class=\"zoomControls\" id=\"zoomInCtl\" /></span>"

galleryCanvasContainer.innerHTML =canvasHTML + arrowsHTML + zoomHTML;
//get handles for canvas and controls we added
const galleryCanvas = document.getElementById("galleryCanvas"); 
const leftArrow = document.getElementById('leftArrow');
const rightArrow = document.getElementById('rightArrow');
const zoomCtlBox = document.getElementById("zoomCtlBox");
const zoomOutCtl = document.getElementById("zoomOutCtl");
const zoomInCtl = document.getElementById("zoomInCtl");

//listeners / event handlers for the arrow controls
leftArrow.onclick = ()=>{
    if (currentImage > 0) currentImage --;
    else currentImage = (imageList.length - 1);
    resetCanvas(2);
};

rightArrow.onclick = ()=>{
    if (currentImage < (imageList.length - 1)) currentImage ++;
    else currentImage = 0;
    resetCanvas(2);
};



//we need to be able to count down to fade out controls
setInterval(function() {
    //note popUpStatus is from the popup component, we need it to fade out the controls when popup dismissed
    if (controlsActiveCount > 0 && popUpStatus == true) controlsActiveCount-=1;
    else {
        leftArrow.classList.remove("fadeControlsIn");
        leftArrow.classList.add("fadeControlsOut");
        rightArrow.classList.remove("fadeControlsIn");
        rightArrow.classList.add("fadeControlsOut");
        zoomCtlBox.classList.remove("fadeControlsIn");
        zoomCtlBox.classList.add("fadeControlsOut");
    }
    //let's be sure everything is reset when the popup is closed ready for next use
    if (popUpStatus == false){
        currentImage = 1;
        resetCanvas(0);
    }
}
,1000);

let thisImage = new Image();
loadImage(0); //start it up!!!!!

//Reset the canvas zoom and drag values then reload the canvas image
function resetCanvas(controlInterval){
    zoomFactor = 1; //reset zoom or when it's next used it will 'jump'!
    yDragOffset = 0;  //reset the drag offsets
    xDragOffset = 0;
    xTouchPrevPositionOffset = 0; //and multi touch offsets
    yTouchPrevPositionOffset = 0;
    loadImage(currentImage);
    controlsActiveCount = controlInterval; //we should reset controls timer
}

//called by canvas pointer movement event handlers to fade in controls 
function onCanvasPointerMovement(){
    if (controlsActiveCount >0){
        leftArrow.classList.remove("fadeControlsOut");
        leftArrow.classList.add("fadeControlsIn");
        rightArrow.classList.remove("fadeControlsOut");
        rightArrow.classList.add("fadeControlsIn");
        zoomCtlBox.classList.remove("fadeControlsOut");
        zoomCtlBox.classList.add("fadeControlsIn");
    }
controlsActiveCount = 3;   
}

//loads image of supplied index from our image array
function loadImage(imageNumber){
thisImage.src = imageRoot + imageList[imageNumber];
thisImage.onload = function(){displayImage();
};
}

//display image in 'thisImage' onto canvas at best fit
function displayImage(scaleIt = true){
    //canvas event handlers
    galleryCanvas.onwheel = zoomByWheel;
    zoomOutCtl.onclick = zoomOutByBtn;
    zoomInCtl.onclick = zoomInByBtn;
    
    //First we handle the mouse events
    galleryCanvas.onmousemove = doMouseMovementOnCanvas; //will supply mouse event object as default parameter to function
    galleryCanvas.onmousedown = ()=>{dragging = true};
    galleryCanvas.onmouseup = ()=>{dragging = false};
    
    //for touch, we have to handle things differently (we don't have a mouseEvent.movementX etc)
    galleryCanvas.ontouchmove = doTouchMovementOnCanvas; //same for touch screens
    galleryCanvas.ontouchstart = (touchEvent)=>{
        dragging = true
        xTouchDeltaOffset = touchEvent.touches[0].clientX; //store x offset
        yTouchDeltaOffset = touchEvent.touches[0].clientY; //store y offset
        };
    galleryCanvas.ontouchend = (touchEvent)=>{
        dragging = false
        xTouchPrevPositionOffset = xDragOffset;
        yTouchPrevPositionOffset = yDragOffset;
        };

    let galleryCanvasCxt = galleryCanvas.getContext("2d"); //get a context
    if (scaleIt) {
        scaleToFit(thisImage, galleryCanvas);
        galleryCanvasCxt.clearRect(0, 0, galleryCanvas.width, galleryCanvas.height); //clear the canvas first
        galleryCanvasCxt.drawImage(thisImage, dimensions.startX, dimensions.startY, dimensions.width, dimensions.height);
    }
    else
    {
        //calculate new dimensions based on zoom factor
        let displayedWidth = dimensions.width * zoomFactor;
        let displayedHeight = dimensions.height * zoomFactor;
        let zoomingStartX = ((canvContWidth - displayedWidth) / 2) + xDragOffset; //(canvas.width - displayedWidth) / 2;
        let zoomingStartY = ((canvContHeight - displayedHeight) / 2) + yDragOffset; 
        galleryCanvasCxt.clearRect(0, 0, galleryCanvas.width, galleryCanvas.height); //clear the canvas first
        galleryCanvasCxt.drawImage(thisImage, zoomingStartX, zoomingStartY, displayedWidth, displayedHeight);
    }
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
    else {
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

//implement mouse scroll event into a zoom
function zoomByWheel(event)
{
    zoomFactor += event.deltaY * (-0.0002 * zoomFactor); //multiply change by current zoom factor for more 'linear' zoom appearance
    displayImage(false); //set false , no re-scale, impement zoom factor instead
}

function zoomOutByBtn(){
    zoomFactor -= (0.1 * zoomFactor);
    controlsActiveCount = 3;
    displayImage(false);
}

function zoomInByBtn(){
    zoomFactor += (0.1 * zoomFactor)
    controlsActiveCount = 3;
    displayImage(false);
}

function doMouseMovementOnCanvas(mouseEvent){
    onCanvasPointerMovement(); //as this goes on ANY mouse movement on canvas, we'll use it for control fade in too!
    if (dragging) {
        xDragOffset += mouseEvent.movementX;
        yDragOffset += mouseEvent.movementY;
        displayImage(false);
    }
}

function doTouchMovementOnCanvas(touchEvent){
    onCanvasPointerMovement(); //as this goes on ANY mouse movement on canvas, we'll use it for control fade in too!
    if (dragging) {
        xDragOffset = (touchEvent.touches[0].clientX - xTouchDeltaOffset) + xTouchPrevPositionOffset;
        yDragOffset = (touchEvent.touches[0].clientY - yTouchDeltaOffset) + yTouchPrevPositionOffset;
        displayImage(false);
    }
}
