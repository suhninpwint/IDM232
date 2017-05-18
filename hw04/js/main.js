
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("myBtn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


// FOOTER 
document.getElementById("").innerHTML = "";

/*----------- */
/* SIDE NAV */
/*----------- */

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}




//https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_onclick_dropdown
//https://www.w3schools.com/howto/howto_js_dropdown.asp
