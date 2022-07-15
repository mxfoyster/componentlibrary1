/*
    #############################################
    #  Simple Teletype style scroller v1.00     #
    #       By Mark Foyster                     #
    #############################################

    For usage instructions, please refer to README.md

    
	LICENSE:

	This file is part of Component Library 1.

	Component Library 1. is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

	Component Library 1. is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

	You should have received a copy of the GNU General Public License along with Component Library 1.. If not, see <https://www.gnu.org/licenses/>.

*/

const ScrollTags = document.getElementsByClassName("scroll");
let ScrollTextArrayStart = Array(); //starting text inside each <Scroll> tag will go here
let ScrollTextArrayCurrent = Array(); //text to display stored here during animation
let ScrollTimerHandles = Array(); //our handle for each Scroll's timer event


for(let counter in ScrollTags) //Iterate through every <Scroll>
{
   let thisTagHandle= ScrollTags[counter]; //get handle for current tag 
   
   if (thisTagHandle.innerHTML != null) //we have some blanks show up so we'll strip them!
    {  
        //now we can put a "mouseover" event listener on each valid tag
        thisTagHandle.addEventListener("mouseover", function() 
        {
            //Only if there is no current timer set do we want another one
            if (ScrollTimerHandles[counter] == null) 
                ScrollTimerHandles[counter] = setInterval(function(){AnimateText(thisTagHandle,counter);},150);
        });
        ScrollTextArrayStart.push(thisTagHandle.innerHTML);//while we're here, let's store the full value of each <Scroll> before we mess with it!
    
        thisTagHandle.addEventListener("mouseout", function() //listen to mouse out in order to stop and reset animation 
        {
            resetText (thisTagHandle,counter);
        });
    }
}

//Called by the timer in "mouseover" to start animation
function AnimateText(handle,j)
{
    let innerString = ScrollTextArrayStart[j]; 
    if (ScrollTextArrayCurrent[j]==null) ScrollTextArrayCurrent[j] = ""; //if empty (first iteration)
 
    let stringPart = ScrollTextArrayCurrent[j];
    if (innerString.length > stringPart.length) //if not animated to length yet 
        ScrollTextArrayCurrent[j] = innerString.slice(0,stringPart.length+1);
    
    if (innerString.length <= stringPart.length) //at length or over
        if (stringPart.charAt(stringPart.length - 1)!="_") ScrollTextArrayCurrent[j] += "_"; //fake cursor
        else ScrollTextArrayCurrent[j] = innerString;   
    handle.innerHTML= ScrollTextArrayCurrent[j]; //display animation at current state
}

//Stop timer and reset animation, called by "mouseout"
function resetText (handle,j)
{
    handle.innerHTML = ScrollTextArrayStart[j]; //reset the text to start value before switching off
    clearInterval(ScrollTimerHandles[j]); //clear the timer
    ScrollTimerHandles[j]=null; //put this timer handle back to null
    ScrollTextArrayCurrent[j] = null; //and empty this index of current array so we can go agai
}