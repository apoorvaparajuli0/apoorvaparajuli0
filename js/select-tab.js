let navTabs = document.querySelectorAll("li.nav-item")

navTabs.forEach(function(navTab, index) {
    navTab.addEventListener("click", async function(e) {
        if(!navTab.classList.contains("dropdown")) {
            navTab.classList.add("clicked-nav");

            let profWorkRowToAppendTo = document.getElementById("work-row");
            let projectRowToAppendTo = document.getElementById("project-row");
            if(!profWorkRowToAppendTo.classList.contains("border")) profWorkRowToAppendTo.classList.add("border", "border-2", "border-light");
            if(!projectRowToAppendTo.classList.contains("border")) projectRowToAppendTo.classList.add("border", "border-2", "border-light");
            
            if(navTab.id==="professional-work-button") {
                projectRowToAppendTo.classList.add("d-none");
                profWorkRowToAppendTo.classList.remove("d-none");
            } else if(navTab.id==="projects-button") {
                profWorkRowToAppendTo.classList.add("d-none");
                projectRowToAppendTo.classList.remove("d-none");
            }
        }
        navTabs.forEach(function(innerNavTab, index) {
            if(navTab !== innerNavTab) {
                innerNavTab.classList.remove("clicked-nav"); 
            }
        });
    });
});