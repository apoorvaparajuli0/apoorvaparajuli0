import { drawProtag, drawStickmen } from './draw-stickmen.js'

var isMouseIn = false;

//TODO: the bullet line has a little bit of lag when I click a lot of times,
//this is likely related to it being invoked in the drawBulletHole() function
export function drawBulletLine(canvas, e) {
    let rect = canvas.getBoundingClientRect();   
    let cWidth = canvas.width;
    let cHeight = canvas.height;

    let scaleX = cWidth / rect.width, 
    scaleY = cHeight / rect.height; 

    let x = (e.clientX - rect.left) * scaleX;
    let y = (e.clientY - rect.top) * scaleY;

    let ctx = canvas.getContext("2d");   
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawStickmen(canvas, e);
    ctx.strokeStyle = "bisque"
    ctx.setLineDash([5, 3]);
    ctx.beginPath()
    ctx.moveTo(150, 85);
    ctx.lineTo(x, y);
    ctx.stroke();
    ctx.closePath()
}

const canvas = document.getElementById("cage-canvas");
document.addEventListener("mousemove", function(e) {
    if(isMouseIn) {
        drawBulletLine(canvas, e);
        drawProtag(canvas, e);
    }
})

document.addEventListener("click", function(e) {
    //TODO: add a check to make sure the click comes from within the canvas
        isMouseIn = true;
})

document.addEventListener("mouseout", function(e) {
    isMouseIn = false;
})