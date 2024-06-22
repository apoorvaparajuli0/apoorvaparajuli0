let navTabs = document.querySelectorAll("li.nav-item");
let profWork = document.getElementById("professional-work");
let projects = document.getElementById("projects");

navTabs.forEach(function(navTab, index) {
    navTab.addEventListener("click", function(e) {
        if(!navTab.classList.contains("dropdown")) {
            navTab.classList.add("clicked-nav");
            
            if(navTab.id==="professional-work-button") {
                profWork.classList.remove("d-none");
                if(!projects.classList.contains("d-none")) projects.classList.add("d-none")
            } else if(navTab.id==="projects-button") {
                projects.classList.remove("d-none");
                if(!profWork.classList.contains("d-none")) profWork.classList.add("d-none")
            }
        }
        navTabs.forEach(function(innerNavTab, index) {
            if(navTab !== innerNavTab) {
                innerNavTab.classList.remove("clicked-nav"); 
            }
        });
    });
});