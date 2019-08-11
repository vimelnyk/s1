'use strict'

jQuery(document).ready(function ($) {   
    $('.images-slider').slick({
        infinite: true        
    });

    $('.dots-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });
});

//function for converting degrees into radians
function getTanDeg(deg) {
    let rad = deg * Math.PI / 180;
    return Math.tan(rad);
}

//function for creating beautiful responsive triangles in the header 

function headerResizing() {

    let inSecWidth = document.querySelector('.intro-section').offsetWidth;
   
    let blockHeight1 = (inSecWidth / 3) * getTanDeg(30) + 'px';
    let blockHeight2 = (2 * inSecWidth / 3) * getTanDeg(12.5) + 'px';
    let leftEls = document.querySelectorAll('.intro-section .pseudo-2, .intro-section .pseudo-2 .pseudo-in');

    for (let i = 0; i < leftEls.length; i++) {
        leftEls[i].style.height = blockHeight1;
    }

    let rightEls = document.querySelectorAll('.intro-section .pseudo-3, .intro-section .pseudo-3 .pseudo-in');
    for (let i = 0; i < rightEls.length; i++) {
        rightEls[i].style.height = blockHeight2;
    }
}

document.addEventListener("DOMContentLoaded", function () {

    if (document.querySelector('.intro-section')) {       
        headerResizing();
        window.onresize = function () {
            headerResizing();
        };
    }

});


