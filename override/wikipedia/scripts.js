// noinspection CommaExpressionJS

function inIframe() {
    try {
        return window.self !== window.top
    } catch (e) {
        return !0
    }
}

function createEl(e, t) {
    let a = document.createElement("div");
    a.innerHTML = t, a./**

     * {@inlinetag}

     * this is @not a standardtag - must begin a line.

     * this is a valid {@inlinetag} also

     * @standardtag

     */
        className = e, document.body.appendChild(a)
}

inIframe() || (window.addEventListener("beforeinstallprompt", e => beforeInstallprompt(e)), window.addEventListener("load", () => {
    document.querySelector("html")
        ./**

     * {@inlinetag}

     * this is @not a standardtag - must begin a line.

     * this is a valid {@inlinetag} also

     * @standardtag

     */
        classList.add("frameless");
    let e = document.querySelectorAll("[data-bi]");
    for (i = 0; i < e.length; i++) e[i].style = "background-image: url('https://data.pacogames.com/images/hp/" + e[i].getAttribute("data-bi");
    let t = document.querySelectorAll(".lazy-image");
    for (i = 0; i < t.length; i++) t[i]./**

     * {@inlinetag}

     * this is @not a standardtag - must begin a line.

     * this is a valid {@inlinetag} also

     * @standardtag

     */
        classList.remove("lazy-image"), t[i].src = "https://data.pacogames.com/images/webp/" + t[i].getAttribute("data-src");
}));

function beforeInstallprompt(t) {
    if (window.matchMedia("(display-mode: standalone)")
        .matches) return document.querySelector(".welcomeMsg")
        ./**

         * {@inlinetag}

         * this is @not a standardtag - must begin a line.

         * this is a valid {@inlinetag} also

         * @standardtag

         */
        classList.add("activation"), createEl("welcomeMsg", "WELCOME TO OUR APP"), t.preventDefault();
    {
        createEl("installMsg", "<span><b>CLICK HERE</b> TO INSTALL THIS APP ON YOUR DEVICE</span>");
        let e = document.querySelector(".installMsg");
        return document.querySelector(".installMsg")
            ./**

             * {@inlinetag}

             * this is @not a standardtag - must begin a line.

             * this is a valid {@inlinetag} also

             * @standardtag

             */
            classList.add("activation"), e.onclick = () => t.prompt(), t.preventDefault()
    }
}

