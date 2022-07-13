# Just CSS v1.00           
## By Mark Foyster                 
   
imply a collection of components that utilise CSS only

<!-- ![Screen shot of Teletype Scroller](ttyheadingss.png) -->

### Implementation
Scroll through *justcss.css* in the *justcss* folder of the repositor. Each section is divided by comments. Locate the section you require and copy/paste that section into your project css file. 

If you wish to use several components, you could install the files on your server and add the stylesheet to your webpage by adding the following html to your `<head>`:

```
    <link rel="stylesheet" href="justcss/justcss.css">
   
```

To utilise the component, simply add the appropriate class to the element you wish to use. For example, to utilise the **Badge** class:

```
    <div class="badge">MY TEXT</div>
```

NOTE: As with all css, be aware that any default styling provided by the tag you choose may have to be overridden otherwise the componenet may not function correctly. Choosing `<span>` tags for inline elements and `<div>` for block level is advisable. 


### Customising style

Be brave, have a play with the CSS to make the component work for you.

### Change Log

#### *v1.00* 

- Initial release. Code extracted (recycled) from previous projects