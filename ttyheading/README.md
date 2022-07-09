# Simple Teletype style scroller v1.00           
## By Mark Foyster                 
   
A just for fun scrolling heading with an 'old school' terminal feel.

![Screen shot of Teletype Scroller](ttyheadingss.png)

### Implementation
Copy the *ttyheadings* folder into your project, you don't have to keep the readme or the screen shot. 

Add the following html to your `<head>`:

```
    <link rel="stylesheet" href="ttyheading/ttyheading.css">
    <script src="ttyheading/ttyheading.js" defer></script>
```

Now simply add the *"scroll"* class to the tag you wish to add the scrollig banner to like this:

```
    <div class="scroll">The text you wish to scroll</div>
```

NOTE: Be aware that any default styling provided by the tag you choose may have to be overridden in the CSS if it is not already. 

The code is set to work with **BLOCK** level elements. If you wish to control the width, use a container. Here's a very simple example using inline styles:

```
    <div style="width: 50%;">
        <div class="scroll">This one shorter</div>
    </div>
```

### Customising style

Simply edit ttyheading.css to customise the styling. It's a very small file, so easy to work out what's going on!

### Change Log

#### *v1.00* 

- Initial release. Code extracted (recycled) from previous projects