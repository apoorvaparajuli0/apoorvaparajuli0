var i = 0;
var txt = 'Apoorva Parajuli';
var speed = 50;

const sleep = ms => new Promise(r => setTimeout(r, ms));

window.setInterval(async function() {
    if (i < txt.length) {
      document.getElementById("name_title").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    } else {
        await sleep(5000).then(function() {
            document.getElementById("name_title").innerHTML = "";
            i = 0;
        })
    }
}, 500)

window.setInterval(function() {
    if(i === txt.length || i === 0) {
        if(document.getElementById("cursor").style.color === "gray") {
            document.getElementById("cursor").style.color = "black";
        } else {
            document.getElementById("cursor").style.color = "gray";
        }
    } else {
        document.getElementById("cursor").style.color = "gray";
    }
},400)

