function inIframe() {
    try {
        return window.self !== window.top
    } catch (e) {
        return !0
    }
}

function createEl(e, t) {
    const r = document.createElement("div");
    r.innerHTML = t, r.className = e, document.body.appendChild(r)
}

function donLoad() {
    let e = document.querySelectorAll("[data-bi]");
    for (i = 0; i < e.length; i++) e[i].style = 'background-image: url("https://data.xn--gme-nnb.com/images/hp/' + e[i].getAttribute("data-bi");
    let t = document.querySelectorAll(".lazy-image");
    for (i = 0; i < t.length; i++) t[i].classList.remove("lazy-image"), t[i].src = "https://data.xn--gme-nnb.com/images/webp/" + t[i].getAttribute("data-src");

    let _swfGame = document.querySelector('#swfGame');
    if (_swfGame) {

        const iframe = document.createElement('iframe');
        iframe.src = _swfGame.getAttribute('data-url');
        iframe.id = '#swfGame';
        iframe.id = 'ls center-block';
        iframe.style = 'width: 100%; height: 588px;border:none';

        _swfGame.remove();

        document.querySelector('#game-frame').appendChild(iframe);

    }

}

setTimeout(donLoad, 3e3), window.addEventListener("load", donLoad), inIframe() ? window.addEventListener("load", () => {
    document.querySelector(".footer")
        .remove()
}) : (window.addEventListener("beforeinstallprompt", e => beforeInstallprompt(e)), window.addEventListener("load", () => {
    document.querySelector("html")
        .classList.add("frameless")
}));
