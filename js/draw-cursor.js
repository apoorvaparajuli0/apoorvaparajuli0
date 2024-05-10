import { drawProtag, drawStickmen } from "./draw-stickmen.js";
import { drawBulletLine } from "./draw-line.js";

function drawBulletHole(canvas, e) {
    let rect = canvas.getBoundingClientRect();      

    let cWidth = canvas.width;
    let cHeight = canvas.height;

    let sWidth = window.screen.width;

    /**
     * for future reference, add/subtract divisors 
     * to decrease/increase aspect ratio in that axis, and
     * multiply/divide to scale down/up, respectively
     */
    let hdivisor = 6; 
    let wdivisor = 9;

    let scaleX = cWidth / rect.width, 
    scaleY = cHeight / rect.height; 

    let x = (e.clientX - rect.left) * scaleX;
    let y = (e.clientY - rect.top) * scaleY;
    
    /* the resolution of *most* mobile devices */
    if(sWidth >= 350 && sWidth <= 500) {
        hdivisor += 6;

        hdivisor /= 2;
        wdivisor /= 2;

        x -= 12;
        y += 3;
    }

    if(sWidth >= 1400) {
        wdivisor += 6;

        hdivisor /= 1.5;
        wdivisor /= 1.5;
    }

    /* Additional Offset */
    x -= 18;
    y -= 16;

    let ctx = canvas.getContext("2d");
    let img = new Image;

    img.src = "../images/crosshairs32.svg";

    img.onload = function() {
        ctx.drawImage(img, x, y, cWidth/wdivisor, cHeight/hdivisor);

        setTimeout(function() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            drawStickmen(canvas, e);
            drawBulletLine(canvas, e);
            drawProtag(canvas, e);
        }, 2000)
    }
}
  
const canvas = document.getElementById("cage-canvas")
document.addEventListener("click", function(e) {
    drawBulletHole(canvas, e);
});