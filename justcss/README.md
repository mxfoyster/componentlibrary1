# Just CSS v1.00           
## By Mark Foyster                 
   
Simply a collection of components that utilise CSS only

<!-- ![Screen shot of Teletype Scroller](ttyheadingss.png) -->

### Implementation
Scroll through *justcss.css* in the *justcss* folder of the repositor. Each section is divided by comments. Locate the section you require and copy/paste that section into your project css file. 

If you wish to use several components, you could install the files on your server and add the stylesheet to your webpage by adding the following html to your `<head>`:

```
    <link rel="stylesheet" href="justcss/justcss.css">
```

Now you will need to add the appropriate classes to your tags. Below are some specific examples.

---

#### BADGE
Add the CSS to your project as described above.

Now simply add the *badge* class to the element you wish to use like this:

```
    <div class="badge">MY TEXT</div>
```

---

#### Tool tips
Add the CSS to your project as explained earlier. Now you have two options, let's add this component to a *badge* component to implement a tooltip. The easiest way is to add the `toolTipContainer` class to the *badge* element and then adding our tooltip inside it like so:

```
    <p>Testing a <span class="badge toolTipContainer">BADGE<span class="toolTipText">My tooltip</span></span> with hover.</p>
```
As you can see, the tooltip text is simply put within the `<span>` of class `toolTipText`. The tooltip will be displayed where we put it offset by the *margin* properties in our CSS.

If a separate contatiner is used to encapsulate the *badge* and *toolTipText* containers like so:

```
    <span class="toolTipContainer">
        <span class="toolTipText">Here's another tooltip</span> 
        <span class="badge">BADGE</span>
    </span>
```

The tooltip text will be display in the exact position of the *badge* element offset by the margins. Therefore, this method is more predictable. 

To change the location of the tooltip, regardless of implementation method, simply alter the margins within the `.toolTipContainer .toolTipText ` selector of the CSS. You can play with the colours, borders etc here too! 

---

#### NOTE: 
As with all css, be aware that any default styling provided by the tag you choose may have to be overridden otherwise the componenet may not function correctly. Choosing `<span>` tags for inline elements and `<div>` for block level is advisable. 

----

### Customising style

Be brave, have a play with the CSS to make the component work for you.

---

### Change Log

#### *v1.00* 

- Initial release. Code extracted (recycled) from previous projects