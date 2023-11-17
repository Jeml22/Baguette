(async () => {
    function mainresize() {
        var main = document.querySelector("#main");
        var header = document.querySelector("#header");
        var footer = document.querySelector("#footer");
        var titul = document.querySelector(".titul");
        var size = header.clientHeight + footer.clientHeight + titul.clientHeight;
        main.classList.add("hola");
        main.style.setProperty("min-height", "calc(100vh - " + size + "px)")
    }
    mainresize();
    window.addEventListener("resize", () => mainresize)
})();