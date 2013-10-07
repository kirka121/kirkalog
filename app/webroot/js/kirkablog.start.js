$(document).ready(function(){
    //body of everything that will happen once index finished loading for the first time.
    spectrum(5000);
});


function spectrum(transition){
    // infinitely looping function to generate random color and apply that color with transition to the header. passed parameter is the seconds of transition.
    var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
    $('#header').animate( { backgroundColor: hue }, transition);
    spectrum(transition);
}