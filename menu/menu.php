<!-- 

    #############################################
    #   Simple PHP/CSS Menu v1.00               #
    #       By Mark Foyster                     #
    #############################################

    For usage instructions, please refer to README.md


 -->

<?php 
function isSelected($id){
    if ($_GET['id'] == $id) echo " class=\"menuItemSelected\"";
    else echo " class=\"menuItemUnselected menuItemHoverable\"";
}
?>
<nav class="menuContainer">
    <a href="index.php"<?php isSelected(1);?>>Home</a>
    <a href="gallery.php"<?php isSelected(2);?>>Gallery</a>
   
</nav>