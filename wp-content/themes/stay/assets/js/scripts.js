'use strict'

//function for converting degrees into radians
function getTanDeg(deg) {
    let rad = deg * Math.PI / 180;
    return Math.tan(rad);
}

//function for creating beautiful responsive triangles in the header 

function headerResizing() {

    let inSecWidth = document.querySelector('.header').offsetWidth;
    console.log(inSecWidth);
    let blockHeight1 = (inSecWidth / 3) * getTanDeg(30) + 'px';
    let blockHeight2 = (2 * inSecWidth / 3) * getTanDeg(12.5) + 'px';
    let leftEls = document.querySelectorAll('.header .pseudo-1, .header .pseudo-1 .pseudo-in');

    for (let i = 0; i < leftEls.length; i++) {
        leftEls[i].style.height = blockHeight1;
    }

    let rightEls = document.querySelectorAll('.header .pseudo-2, .header .pseudo-2 .pseudo-in');
    for (let i = 0; i < rightEls.length; i++) {
        rightEls[i].style.height = blockHeight2;
    }
}

document.addEventListener("DOMContentLoaded", function () {

    if (document.querySelector('.header')) {
        console.log('1111')
        headerResizing();
        window.onresize = function () {
            headerResizing();
        };
    }

});