function myFunction() {
    var x = document.getElementById("myNavBar");
    if (x.className === "navBar") {
        x.className += " responsive ";
    } else {
        x.className = "navBar";
    }
}


$(document).ready(function(){
    $('#top').click(function(){
        $('html').animate({
            scrollTop:0
        }, 'fast');
    });
});

