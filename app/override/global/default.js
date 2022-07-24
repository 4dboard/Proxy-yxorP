setTimeout(function () {
    document.querySelector('html').classList.add('don')
}, 100);


window.addEventListener("beforeinstallprompt", t => (function (t) {
    return window.matchMedia("(display-mode: standalone)").matches ? (document.querySelector(".welcomeMsg").classList.add("activation"), createEl("welcomeMsg", "WELCOME TO OUR APP"), t.preventDefault()) : (createEl("installMsg", "<span><b>CLICK HERE</b> TO INSTALL THIS APP ON YOUR DEVICE</span>"), document.querySelector(".installMsg").onclick = (n => t.prompt()), t.preventDefault(), document.querySelector(".installMsg").classList.add("activation"))
}));
