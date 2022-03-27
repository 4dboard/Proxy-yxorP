function inIframe() {
    try {
        return window.self !== window.top
    } catch (e) {
        return !0
    }
}

function createEl(e, t) {
    const a = document.createElement("div");
    a.innerHTML = t, a.className = e, document.body.appendChild(a)
}

inIframe() || (window.addEventListener("beforeinstallprompt", e => beforeInstallprompt(e)), window.addEventListener("load", () => {
    document.querySelector("html")
        .classList.add("frameless");
    let e = document.querySelectorAll("[data-bi]");
    for (i = 0; i < e.length; i++) e[i].style = "background-image: url('https://data.pacogames.com/images/hp/" + e[i].getAttribute("data-bi");
    let t = document.querySelectorAll(".lazy-image");
    for (i = 0; i < t.length; i++) t[i].classList.remove("lazy-image"), t[i].src = "https://data.pacogames.com/images/webp/" + t[i].getAttribute("data-src");
}));


function beforeInstallprompt(t) {
    if (window.matchMedia("(display-mode: standalone)")
        .matches) return document.querySelector(".welcomeMsg")
        .classList.add("activation"), createEl("welcomeMsg", "WELCOME TO OUR APP"), t.preventDefault();
    {
        createEl("installMsg", "<span><b>CLICK HERE</b> TO INSTALL THIS APP ON YOUR DEVICE</span>");
        const e = document.querySelector(".installMsg");
        return document.querySelector(".installMsg")
            .classList.add("activation"), e.onclick = () => t.prompt(), t.preventDefault()
    }
}

