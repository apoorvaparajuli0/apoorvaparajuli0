function detectPreferredColor() {

    let theme = localStorage.getItem("theme");

    if(theme === "light") {
        document.documentElement.setAttribute("data-theme", "light");
        return;
    }

    if(theme !== "dark" && window.matchMedia("(prefers-color-scheme: light)").matches) {
        document.documentElement.setAttribute("data-theme", "light");
        return;
    }
}

detectPreferredColor();

document.getElementById("light-mode").addEventListener("click", function(ev) {
    localStorage.setItem("theme", "light");
    document.documentElement.setAttribute("data-theme", "light");
})

document.getElementById("dark-mode").addEventListener("click", function(ev) {
    localStorage.setItem("theme", "dark");
    document.documentElement.setAttribute("data-theme", "dark");
})