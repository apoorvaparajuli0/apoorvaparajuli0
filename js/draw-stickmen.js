/**
 * putting this here so I don't forget, the idea we're going for is
 * four stick figures with handguns in their holsters, two on opposing 
 * sides they should be a diverse assortment of character and 
 * distinguishable, finally a character should be in the center that
 * looks in the direction the mouse is in.
 * 
 * There should be little informational things that point to their
 * respective character, and if the player shoots that character, then
 * they get redirected to the page that contains that information, or
 * moved to the section of the index that contains that info.
 * 
 * There should also be user input that allows them to control the 
 * character in the center to a certain extend and a line that shows
 * where the user will shoot on first draw, also a restart button to 
 * reset the stage if they miss or want to go to another section
 * 
 * add a little cloud to prompt users to click to start the game
 * 
 * (remember to make this all work on all resolutions)
 * 
 * @param {HTMLCanvasElement} canvas 
 * @param {Event} e 
 */
export function drawStickmen(canvas, e) {
    let ctx = canvas.getContext("2d");   
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.strokeStyle = "bisque"

    //left side enemies
    drawEnemyStickman(ctx, 25, 85, true);
    drawEnemyStickman(ctx, 70, 85, true);

    //right side enemies
    drawEnemyStickman(ctx, 230, 85, false);
    drawEnemyStickman(ctx, 275, 85, false);
}

export function drawProtag(canvas, e) {
    let rect = canvas.getBoundingClientRect();      
    let ctx = canvas.getContext("2d");   
    ctx.strokeStyle = "bisque"

    let cWidth = canvas.width;

    let scaleX = cWidth / rect.width;

    let x = (e.clientX - rect.left) * scaleX;
    //player
    if(x <= 150) {
        drawEnemyStickman(ctx, 150, 85, false);
    } else {
        drawEnemyStickman(ctx, 150, 85, true);
    }
}

function drawEnemyStickman(ctx, headCenterX, headCenterY, lookingRight) {
    //head
    ctx.setLineDash([0, 0]);
    ctx.beginPath();
    ctx.arc(headCenterX, headCenterY, 8, 0, Math.PI * 2, true);
    ctx.stroke();

    //body
    ctx.beginPath();
    ctx.moveTo(headCenterX, headCenterY + 8);
    ctx.lineTo(headCenterX, headCenterY + 40);
    ctx.stroke();

    if(lookingRight) {
        //legs
        //right leg
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 40);
        ctx.lineTo(headCenterX - 5, headCenterY + 60);
        ctx.stroke();

        //left leg
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 40);
        ctx.quadraticCurveTo(headCenterX + 25, headCenterY + 50, headCenterX + 20, headCenterY + 60);
        ctx.stroke();

        //right arm
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 25);
        ctx.quadraticCurveTo(headCenterX - 20, headCenterY + 33, headCenterX - 5, headCenterY + 45);
        ctx.stroke();
    } else if(!lookingRight) {
        //legs
        //right leg
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 40);
        ctx.lineTo(headCenterX + 5, headCenterY + 60);
        ctx.stroke();

        //left leg
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 40);
        ctx.quadraticCurveTo(headCenterX - 25, headCenterY + 50, headCenterX - 20, headCenterY + 60);
        ctx.stroke();

        //right arm
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 25);
        ctx.quadraticCurveTo(headCenterX + 20, headCenterY + 33, headCenterX + 5, headCenterY + 45);
        ctx.stroke();
    }
}

const canvas = document.getElementById("cage-canvas");
document.addEventListener("DOMContentLoaded", function(e) {
    drawStickmen(canvas, e);
    drawProtag(canvas, e);
});