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
 * (remember to make this all work on all resolutions)
 * 
 * @param {HTMLCanvasElement} canvas 
 * @param {Event} e 
 */
export function drawStickmen(canvas, e) {
    let ctx = canvas.getContext("2d");   
    ctx.strokeStyle = "bisque"

    let cWidth = canvas.width;
    let cHeight = canvas.height;

    //left side enemies
    drawEnemyStickman(ctx, 25, 50, true);
    drawEnemyStickman(ctx, 70, 50, true);

    //right side enemies
    drawEnemyStickman(ctx, 230, 50, false);
    drawEnemyStickman(ctx, 275, 50, false);

    //player
    drawEnemyStickman(ctx, 150, 50, false);
}

function drawEnemyStickman(ctx, headCenterX, headCenterY, lookingRight) {
    //head
    ctx.beginPath();
    ctx.arc(headCenterX, headCenterY, 15, 0, Math.PI * 2, true);
    ctx.stroke();

    //body
    ctx.beginPath();
    ctx.moveTo(headCenterX, headCenterY + 15);
    ctx.lineTo(headCenterX, headCenterY + 50);
    ctx.stroke();

    if(lookingRight) {
        //legs
        //right leg
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 50);
        ctx.lineTo(headCenterX - 5, headCenterY + 85);
        ctx.stroke();

        //left leg
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 50);
        ctx.quadraticCurveTo(headCenterX + 40, headCenterY + 50, headCenterX + 15, headCenterY + 85);
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
        ctx.moveTo(headCenterX, headCenterY + 50);
        ctx.lineTo(headCenterX + 5, headCenterY + 85);
        ctx.stroke();

        //left leg
        ctx.beginPath();
        ctx.moveTo(headCenterX, headCenterY + 50);
        ctx.quadraticCurveTo(headCenterX - 40, headCenterY + 50, headCenterX - 15, headCenterY + 85);
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
})