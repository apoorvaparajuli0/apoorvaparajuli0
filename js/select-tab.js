let navTabs = document.querySelectorAll("li.nav-item");

async function getProfWork() {
    let profWork = await fetch("http://127.0.0.1:5500/sections/professional-work.html", {
        headers: {
            Accept: 'text/html'
        }
    }).then((res => res.text()))

    return profWork;
}

async function getProjectWork() {
    let projects = await fetch("http://127.0.0.1:5500/sections/projects.html", {
        headers: {
            Accept: 'text/html'
        }
    }).then((res => res.text()))

    return projects;
}

navTabs.forEach(function(navTab, index) {
    navTab.addEventListener("click", async function(e) {
        if(!navTab.classList.contains("dropdown")) {
            navTab.classList.add("clicked-nav");

            let projects = await getProjectWork();
            let profWork = await getProfWork();

            let rowToAppendTo = document.getElementById("work-row");
            if(!rowToAppendTo.classList.contains("border")) rowToAppendTo.classList.add("border", "border-2", "border-light");
            
            if(navTab.id==="professional-work-button") {
                rowToAppendTo.innerHTML = "<div></div>";
                rowToAppendTo.innerHTML = profWork;
            } else if(navTab.id==="projects-button") {
                rowToAppendTo.innerHTML = "<div></div>";
                rowToAppendTo.innerHTML = projects;
            }
        }
        navTabs.forEach(function(innerNavTab, index) {
            if(navTab !== innerNavTab) {
                innerNavTab.classList.remove("clicked-nav"); 
            }
        });
    });
});