# JavaScript, CSS & PHP photo gallery SYSTEM v1.10
## By Mark Foyster

![Screen shot of gallery Window](galleryss.png)

### Brief Description

The gallery utilises the popup component within this repo, placing a HTML canvas within it to display photos in a 'gallery' style arrangement.

It has controls to cycle through the images and zoom in. Drag with mouse and finger (touch) is enabled (could do with more testing on touch)

Zooming with the mouse wheel is included too.

The controls will fade away after 3 seconds of pointer inactivity over the canvas. A simple ovement of the mouse or touch of the finger will re-activate them.

**NOTE:** This now includes the SPINNER component from [https://loading.io/css/](https://loading.io/css/). This is pure CSS3 and HTML. It's released under the Creative Commons CC0 license and is free to use unconditionally. Check out the website and thank you to the original authors.

### implementation

Install the Pop Up component found [HERE](https://github.com/mxfoyster/componentlibrary1/tree/main/popup) first.

Repeat this process with this repo, you do not need `galleryss.png` or ths readme.

Add the CSS and JavaScript sources in the `<head>` like so:

```
    <link rel="stylesheet" href="popup/popup.css">
    <link rel="stylesheet" href="menu/menu.css">
    <link rel="stylesheet" href="gallery/gallery.css">
    <link rel="stylesheet" href="gallery/spinner.css">
    <script src="popup/popup.js" defer></script>
    <script src="gallery/gallery.js" defer></script>
```

Now add the following code into the `<body>` of the web page:

```
    <div class="popUp" id="popUp">
        <div class="popUpTitleContainer"><span class="popUpTitle">Photo Gallery</span></div>
        <div id="galleryCanvasContainer"></div>
        <img id="closeBtn" src="popup/closebtn.png">
        <span id="spinnerContainer"><?php include 'gallery/spinner.php' ?></span> 
    </div>
```

Edit *gallery.js* to add the correct folder and add your source images into the array here:

```
    const imageRoot = "./images/"; //place the subdirectory your images are in here
    const imageList = ["image1.png", "image2.png", "image3.png"]; //place your image names in this array
```

Note the comments to help guide you.

---

### Change Log

#### *v1.10*

- Inclusion of an externally sourced [SPINNER](https://loading.io/css/) to help the user ascertain that the image is loading. Before, on large files and slower connections, it may well have been thought that the component had crashed. Now it's clearer what is going on.

#### *v1.01*

- Updated to include a prompt as to which image is being displayed and how many images are available (eg Image 2 of 6).

#### *v1.00* 

- Initial release. Code extracted (recycled) from previous projects