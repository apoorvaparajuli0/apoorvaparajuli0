var i = 0;
var txt = 'Apoorva Parajuli'; 
var txt_dev = 'अपूर्व पराजूली'
var complete = false;
var paused = false;

const sleep = ms => new Promise(r => setTimeout(r, ms));

/* Start writing in English if the Devanagari text has finished */
window.setInterval(async function() {
    if (i < txt.length && !complete && !paused) {
      document.getElementById("name_title").innerHTML += txt.charAt(i);
      i++;
    } else if(i >= txt.length && !complete && !paused) {
        paused = true;
        setTimeout(function() {
            paused = false;
            i = 0;
            document.getElementById("name_title").innerHTML = "";
            complete = true;
        }, 5000);
    }
}, 300)

/* Start writing in Devanagari if the English text has finished */
window.setInterval(async function() {
    if(i < txt_dev.length && complete && !paused) {
        document.getElementById("name_title").innerHTML += txt_dev.charAt(i);
        i++;
    } else if(complete && i >= txt_dev.length && !paused) {
        paused = true;
        setTimeout(function() {
            paused = false;
            i = 0;
            document.getElementById("name_title").innerHTML = "";
            complete = false;
        }, 5000);
    }
}, 300)

/* Flash Cursor Effect *if* the typing animation is idle */
window.setInterval(function() {
    if((i === txt.length || i === txt_dev.length) || i === 0) {
        if(document.getElementById("cursor").style.color === "gray") {
            document.getElementById("cursor").style.color = "black";
        } else {
            document.getElementById("cursor").style.color = "gray";
        }
    } else {
        document.getElementById("cursor").style.color = "gray";
    }
},400)

