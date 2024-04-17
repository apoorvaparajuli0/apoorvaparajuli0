function drawBulletHole(canvas, e) {
    let rect = canvas.getBoundingClientRect();      

    scaleX = canvas.width / rect.width, 
    scaleY = canvas.height / rect.height; 

    let x = (e.clientX - rect.left) * scaleX;
    let y = (e.clientY - rect.top) * scaleY;

    /* Additional Offset */
    x -= 18;
    y -= 16;

    let ctx = canvas.getContext("2d");
    let img = new Image;

    img.src = "../Images/CrossHairs32x32.svg";
    img.onload = function() {
        ctx.drawImage(img, x, y);
        //make sure to redraw stick figures after clearing canvas of bullet holes
        setTimeout(function() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }, 1000)
    }


}
  
const canvas = document.getElementById("cage_canvas")
document.addEventListener("click", function(e) {
    drawBulletHole(canvas, e);
});