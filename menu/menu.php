<!-- 

    #############################################
    #   Simple PHP/CSS Menu v1.00               #
    #       By Mark Foyster                     #
    #############################################

    For usage instructions, please refer to README.md

    
	LICENSE:

	This file is part of Component Library 1.

	Component Library 1. is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

	Component Library 1. is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

	You should have received a copy of the GNU General Public License along with Component Library 1.. If not, see <https://www.gnu.org/licenses/>.

 -->

<?php 
function isSelected($id){
    if ($_GET['id'] == $id) echo " class=\"menuItemSelected\"";
    else echo " class=\"menuItemUnselected menuItemHoverable\"";
}
?>
<nav class="menuContainer">
    <a href="index.php"<?php isSelected(1);?>>Home</a>
    <a href="justcss.php"<?php isSelected(2);?>>Plain CSS</a>
    <a href="jsandcss.php"<?php isSelected(3);?>>CSS &amp; More</a>
    <a href="gallery.php"<?php isSelected(4);?>>Gallery</a>
    <a href="links.php"<?php isSelected(5);?>>Links</a>
    <a href="license.php"<?php isSelected(6);?>>License</a>
   
</nav>