function drawBulletHole(canvas, e) {
    let rect = canvas.getBoundingClientRect();      

    cWidth = canvas.width;
    cHeight = canvas.height;

    let hdivisor = 6; 
    let wdivisor = 6;

    //remember that window.screen.width is how to get the screen width, not window.width

    scaleX = cWidth / rect.width, 
    scaleY = cHeight / rect.height; 

    let x = (e.clientX - rect.left) * scaleX;
    let y = (e.clientY - rect.top) * scaleY;

    /* Additional Offset */
    x -= 18;
    y -= 16;

    let ctx = canvas.getContext("2d");
    let img = new Image;

    img.src = "../images/crosshairs32.svg";

    img.onload = function() {
        /*if(hdivisor !== 6 && wdivisor !== 6)*/ ctx.drawImage(img, x, y, cWidth/wdivisor, cHeight/hdivisor);
        /*if(hdivisor === 6 && wdivisor === 6) ctx.drawImage(img, x, y);*/

        /*
        make sure to redraw stick figures after clearing canvas of bullet holes.
        Also, consider just clearing out wherever the image was drawn, but then we'd
        have to deal with overlapping images being half cleared.
        */
        setTimeout(function() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }, 2000)
    }


}
  
const canvas = document.getElementById("cage_canvas")
document.addEventListener("click", function(e) {
    drawBulletHole(canvas, e);
});