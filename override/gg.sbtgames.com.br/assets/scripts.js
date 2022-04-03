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

    document.querySelector(".inp__submit") && (document.querySelector(".inp__submit")
        .innerHTML = "GO"), document.querySelector("#form-search")
        .setAttribute("action", "/search"), document.querySelector("#form-search")
        .setAttribute("method", "get"), document.querySelector(".icon-svg--cube-3d")
        .innerHTML = '<img class="icon-svg" src="/3d.gif?1"/>', document.querySelector(".icon-svg--circular-target")
        .innerHTML = '<img class="icon-svg" src="/action.gif?1"/>', document.querySelector(".inp__submit") && (document.querySelector(".icon-svg--gym")
        .innerHTML = '<img class="icon-svg" src="/sport.gif?1"/>'), document.querySelector(".icon-svg--time-2")
        .innerHTML = '<img class="icon-svg" src="/driving.gif?1"/>', document.querySelector(".icon-svg--strategy")
        .innerHTML = '<img class="icon-svg" src="/strat.gif?1"/>', document.querySelector(".icon-svg--people")
        .innerHTML = '<img class="icon-svg" src="/girl.gif?1"/>', document.querySelector(".icon-svg--multiplayer")
        .innerHTML = '<img class="icon-svg" src="/multi.gif?1"/>', document.querySelector(".icon-svg--logic-board-games")
        .innerHTML = '<img class="icon-svg" src="/logic.gif?1"/>', document.querySelector(".icon-svg--swords")
        .innerHTML = '<img class="icon-svg" src="/mmo.gif?1"/>', document.querySelector("html")
        .classList.add("don");
}

setTimeout(donLoad, 3e3), window.addEventListener("load", donLoad), inIframe() ? window.addEventListener("load", () => {
    document.querySelector(".footer")
        .remove()
}) : (window.addEventListener("beforeinstallprompt", e => beforeInstallprompt(e)), window.addEventListener("load", () => {
    document.querySelector("html")
        .classList.add("frameless")
}));
