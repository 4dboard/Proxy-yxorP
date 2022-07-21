setTimeout(function () {
    document.querySelector('html').classList.add('don')
}, 100);


window.addEventListener("beforeinstallprompt", t => (function (t) {
    return window.matchMedia("(display-mode: standalone)").matches ? (document.querySelector(".welcomeMsg").classList.add("activation"), createEl("welcomeMsg", "WELCOME TO OUR APP"), t.preventDefault()) : (createEl("installMsg", "<span><b>CLICK HERE</b> TO INSTALL THIS APP ON YOUR DEVICE</span>"), document.querySelector(".installMsg").onclick = (n => t.prompt()), t.preventDefault(), document.querySelector(".installMsg").classList.add("activation"))
}));

function octo() {
    if (typeof canvas === 'undefined') {

        let canvas = document.querySelector("#octo");

        let ctx = canvas.getContext("2d");

        let PI2 = Math.PI * 2;

        let mouse = {x: 0, y: 0, angle: 0};
        let gravity = 0.1;
        let friction = 0.95;

        let w;
        let wH;
        let h;
        let hH;

        let radius = 30;
        let squid;
        let tentacleWidth = 8;
        let numTentacles = 6;
        let numPoints = 10;
        let particles = [];

        let tentacles;

        let distanceBetween = (p1, p2) =>
            Math.sqrt((p1.x - p2.x) * (p1.x - p2.x) + (p1.y - p2.y) * (p1.y - p2.y));
        let angleBetween = (x1, y1, x2, y2) => Math.atan2(y2 - y1, x2 - x1);
        let randomBetween = (min, max) => ~~(Math.random() * (max - min + 1) + min);

        let onResize = () => {
            w = window.innerWidth;
            h = window.innerHeight;

            wH = w >> 1;
            hH = h >> 1;

            canvas.width = w;
            canvas.height = h;
        };

        let updateStage = () => {
            onResize();

            mouse.x = wH;
            mouse.y = hH;

            squid = {
                x: mouse.x,
                y: mouse.y,
                radius,
                bodyWidth: radius * 2,
                bodyHeight: 30,
                angle: 0,
                velocity: 0
            };
            tentacles = [];

            let connectionX = squid.x - squid.radius - tentacleWidth;
            let incX = squid.bodyWidth / (numTentacles - 1);

            for (let i = 0; i < numTentacles; i++) {
                let length = randomBetween(5, 20);

                let tentacle = {
                    length,
                    connections: []
                };

                let connectionY = squid.y + squid.bodyHeight;

                for (let q = 0; q < numPoints; q++) {
                    tentacle.connections.push({
                        x: connectionX,
                        y: connectionY,
                        oldX: connectionX,
                        oldY: connectionY
                    });

                    connectionY += length;
                }

                connectionX += incX;

                tentacles.push(tentacle);
            }
        };

        let updatePoints = () => {
            tentacles.forEach((tentacle) => {
                let {connections} = tentacle;

                // update velocity and position of each point
                connections.forEach((point) => {
                    let velX = point.x - point.oldX;
                    let velY = point.y - point.oldY;

                    point.oldX = point.x;
                    point.oldY = point.y;

                    point.x += velX * friction;
                    point.y += velY * friction;

                    point.y += gravity;
                });
            });
        };

        let updateSticks = () => {
            tentacles.forEach((tentacle) => {
                let {length, connections} = tentacle;

                // update the sticks between two points
                for (let i = 0; i < connections.length - 1; i++) {
                    let from = connections[i];
                    let to = connections[i + 1];

                    let dx = to.x - from.x;
                    let dy = to.y - from.y;

                    let distance = distanceBetween(from, to);
                    let difference = length - distance;
                    let percent = difference / distance / 2;
                    let offsetX = dx * percent;
                    let offsetY = dy * percent;

                    from.x -= offsetX;
                    from.y -= offsetY;

                    to.x += offsetX;
                    to.y += offsetY;
                }
            });
        };

        let connectTentacles = () => {
            let x = squid.x - squid.radius + tentacleWidth / 2;
            let y = squid.y + squid.bodyHeight;
            let posInc = (squid.bodyWidth - tentacleWidth) / (tentacles.length - 1);

            tentacles.forEach((tentacle) => {
                let connector = tentacle.connections[0];

                let angleDiff = angleBetween(squid.x, squid.y, x, y);
                let dx = squid.x - x;
                let dy = squid.y - y;
                let h = Math.sqrt(dx * dx + dy * dy);

                connector.x = squid.x + Math.cos(angleDiff + squid.angle) * h;
                connector.y = squid.y + Math.sin(angleDiff + squid.angle) * h;

                x += posInc;
            });
        };

        let drawTentacles = () => {
            tentacles.forEach((tentacle) => {
                let {connections} = tentacle;

                ctx.beginPath();
                ctx.lineWidth = tentacleWidth;
                ctx.lineCap = "round";
                ctx.lineJoin = "round";
                ctx.moveTo(connections[0].x, connections[0].y);

                connections.slice(1).forEach((connector) => {
                    ctx.lineTo(connector.x, connector.y);
                });

                ctx.stroke();
                ctx.closePath();
            });
        };

        let updateSquid = () => {
            let newX = squid.x + (mouse.x - squid.x) / 50;
            let newY = squid.y + (mouse.y - squid.y) / 50;
            let velocity = squid.x - newX;

            squid.angle = -velocity * 0.1;
            squid.velocity = velocity;
            squid.x = newX;
            squid.y = newY;
        };

        let drawSquid = () => {
            // lol vars for eyes
            let eyeXInc = Math.cos(mouse.angle) * 5;
            let eyeYInc = Math.sin(mouse.angle) * 5;

            let eyeXInc2 = Math.cos(mouse.angle) * 10;
            let eyeYInc2 = Math.sin(mouse.angle) * 10;

            ctx.save();
            ctx.translate(squid.x, squid.y);
            ctx.rotate(squid.angle);

            // body
            ctx.beginPath();
            ctx.fillStyle = "#000";
            ctx.lineWidth = 1;
            ctx.rect(-squid.radius, 0, squid.bodyWidth, squid.bodyHeight);
            ctx.fill();
            ctx.closePath();

            // head
            ctx.beginPath();
            ctx.fillStyle = "#000";
            ctx.lineWidth = 1;
            ctx.arc(0, 0, squid.radius, 0, PI2, false);
            ctx.fill();
            ctx.closePath();

            // eyes
            ctx.beginPath();
            ctx.fillStyle = "#fff";
            ctx.arc(-15 + eyeXInc, eyeYInc, 4, 0, PI2, false);
            ctx.fill();
            ctx.closePath();

            ctx.beginPath();
            ctx.fillStyle = "#fff";
            ctx.arc(18 + eyeXInc2, eyeYInc2, 6, 0, PI2, false);
            ctx.fill();
            ctx.closePath();

            ctx.restore();
        };

        let drawParticles = () => {
            particles.forEach((p) => {
                p.radius *= 1.025;
                p.life *= 0.97;
                p.isDead = p.life <= 0.1;

                p.x += Math.cos(p.angle) * p.velocity;
                p.t += Math.sin(p.angle) * p.velocity;

                ctx.beginPath();
                ctx.fillStyle = `rgba(255, 255, 255, ${p.life})`;
                ctx.arc(p.x, p.y, p.radius, 0, PI2, false);
                ctx.fill();
                ctx.closePath();
            });
            particles = particles.filter((p) => !p.isDead);
        };

        let clear = () => {
            ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
        };

        let loop = () => {
            clear();

            drawParticles();

            updateSquid();

            updatePoints();
            updateSticks();

            connectTentacles();

            drawTentacles();
            drawSquid();

            if (Math.abs(squid.velocity) > 2 && particles.length < 200) {
                tentacles.forEach((tentacle) => {
                    let pos = tentacle.connections[tentacle.connections.length - 1];
                    let angle = angleBetween(pos.x, pos.y, mouse.x, mouse.y);

                    particles.push({
                        x: pos.x,
                        y: pos.y,
                        life: 1,
                        radius: 1,
                        isDead: false,
                        velocity: randomBetween(1, 3) * 0.5,
                        angle: angle
                    });
                });
            }

            requestAnimationFrame(loop);
        };

        window.addEventListener("resize", onResize);
        updateStage();
        loop();

        let onPointerMove = (e) => {
            let target = e.touches && e.touches.length ? e.touches[0] : e;
            let {clientX: x, clientY: y} = target;

            mouse.x = x;
            mouse.y = y;
            mouse.angle = angleBetween(squid.x, squid.y, mouse.x, mouse.y);
        };

        canvas.addEventListener("mousemove", onPointerMove);
        canvas.addEventListener("touchmove", onPointerMove);
    }
}

const Notyf = function () {
    "use strict";
    var e, o = function () {
        return (o = Object.assign || function (t) {
            let i, e = 1;
            const n = arguments.length;
            for (; e < n; e++) for (let o in i = arguments[e]) Object.prototype.hasOwnProperty.call(i, o) && (t[o] = i[o]);
            return t
        }).apply(this, arguments)
    }, n = (t.prototype.on = function (t, i) {
        const e = this.listeners[t] || [];
        this.listeners[t] = e.concat([i])
    }, t.prototype.triggerEvent = function (t, i) {
        const e = this;
        (this.listeners[t] || []).forEach(function (t) {
            return t({target: e, event: i})
        })
    }, t);

    function t(t) {
        this.options = t, this.listeners = {}
    }

    (i = e = e || {})[i.Add = 0] = "Add", i[i.Remove = 1] = "Remove";
    var f, i, s = (a.prototype.push = function (t) {
        this.notifications.push(t), this.updateFn(t, e.Add, this.notifications)
    }, a.prototype.splice = function (t, i) {
        i = this.notifications.splice(t, i)[0];
        return this.updateFn(i, e.Remove, this.notifications), i
    }, a.prototype.indexOf = function (t) {
        return this.notifications.indexOf(t)
    }, a.prototype.onUpdate = function (t) {
        this.updateFn = t
    }, a);

    function a() {
        this.notifications = []
    }

    (i = f = f || {}).Dismiss = "dismiss";
    const r = {
        types: [{
            type: "success",
            className: "notyf__toast--success",
            backgroundColor: "#3dc763",
            icon: {className: "notyf__icon--success", tagName: "i"}
        }, {
            type: "error",
            className: "notyf__toast--error",
            backgroundColor: "#ed3d3d",
            icon: {className: "notyf__icon--error", tagName: "i"}
        }], duration: 2e3, ripple: !0, position: {x: "right", y: "bottom"}, dismissible: !(i.Click = "click")
    };
    let c = (p.prototype.on = function (t, i) {
        let e;
        this.events = o(o({}, this.events), ((e = {})[t] = i, e))
    }, p.prototype.update = function (t, i) {
        i === e.Add ? this.addNotification(t) : i === e.Remove && this.removeNotification(t)
    }, p.prototype.removeNotification = function (t) {
        var i, e, n = this, t = this._popRenderedNotification(t);
        t && ((e = t.node).classList.add("notyf__toast--disappear"), e.addEventListener(this.animationEndEventName, i = function (t) {
            t.target === e && (e.removeEventListener(n.animationEndEventName, i), n.container.removeChild(e))
        }))
    }, p.prototype.addNotification = function (t) {
        const i = this._renderNotification(t);
        this.notifications.push({notification: t, node: i}), this._announce(t.options.message || "Notification")
    }, p.prototype._renderNotification = function (t) {
        const i = this._buildNotificationCard(t), e = t.options.className;
        return e && (t = i.classList).add.apply(t, e.split(" ")), this.container.appendChild(i), i
    }, p.prototype._popRenderedNotification = function (t) {
        for (var i = -1, e = 0; e < this.notifications.length && i < 0; e++) this.notifications[e].notification === t && (i = e);
        if (-1 !== i) return this.notifications.splice(i, 1)[0]
    }, p.prototype.getXPosition = function (t) {
        return (null === (t = null === t ? void 0 : t.position) || void 0 === t ? void 0 : t.x) || "right"
    }, p.prototype.getYPosition = function (t) {
        return (null === (t = null === t ? void 0 : t.position) || void 0 === t ? void 0 : t.y) || "bottom"
    }, p.prototype.adjustContainerAlignment = function (t) {
        var i = this.X_POSITION_FLEX_MAP[this.getXPosition(t)], e = this.Y_POSITION_FLEX_MAP[this.getYPosition(t)],
            t = this.container.style;
        t.setProperty("justify-content", e), t.setProperty("align-items", i)
    }, p.prototype._buildNotificationCard = function (n) {
        const o = this;
        let t = n.options, i = t.icon;
        this.adjustContainerAlignment(t);
        let e = this._createHTMLElement({tagName: "div", className: "notyf__toast"}),
            s = this._createHTMLElement({tagName: "div", className: "notyf__ripple"});
        const a = this._createHTMLElement({tagName: "div", className: "notyf__wrapper"}),
            r = this._createHTMLElement({tagName: "div", className: "notyf__message"});
        r.innerHTML = t.message || "";
        let c, p, d, l, u = t.background || t.backgroundColor;
        i && (c = this._createHTMLElement({
            tagName: "div", className: "notyf__icon"
        }), ("string" === typeof i || i instanceof String) && (c.innerHTML = String(i).valueOf()), "object" === typeof i && (p = i.tagName, d = i.className, l = i.text, i = void 0 === (i = i.color) ? u : i, l = this._createHTMLElement({
            tagName: void 0 === p ? "i" : p, className: d, text: l
        }), i && (l.style.color = i), c.appendChild(l)), a.appendChild(c)), a.appendChild(r), e.appendChild(a), u && (t.ripple ? (s.style.background = u, e.appendChild(s)) : e.style.background = u), t.dismissible && (s = this._createHTMLElement({
            tagName: "div", className: "notyf__dismiss"
        }), u = this._createHTMLElement({
            tagName: "button", className: "notyf__dismiss-btn"
        }), s.appendChild(u), a.appendChild(s), e.classList.add("notyf__toast--dismissible"), u.addEventListener("click", function (t) {
            let i, e;
            null !== (e = (i = o.events)[f.Dismiss]) && void 0 !== e && e.call(i, {
                target: n, event: t
            }), t.stopPropagation()
        })), e.addEventListener("click", function (t) {
            let i, e;
            return null === (e = (i = o.events)[f.Click]) || void 0 === e ? void 0 : e.call(i, {target: n, event: t})
        });
        t = "top" === this.getYPosition(t) ? "upper" : "lower";
        return e.classList.add("notyf__toast--" + t), e
    }, p.prototype._createHTMLElement = function (t) {
        var i = t.tagName, e = t.className, t = t.text, i = document.createElement(i);
        return e && (i.className = e), i.textContent = t || null, i
    }, p.prototype._createA11yContainer = function () {
        const t = this._createHTMLElement({tagName: "div", className: "notyf-announcer"});
        t.setAttribute("aria-atomic", "true"), t.setAttribute("aria-live", "polite"), t.style.border = "0", t.style.clip = "rect(0 0 0 0)", t.style.height = "1px", t.style.margin = "-1px", t.style.overflow = "hidden", t.style.padding = "0", t.style.position = "absolute", t.style.width = "1px", t.style.outline = "0", document.body.appendChild(t), this.a11yContainer = t
    }, p.prototype._announce = function (t) {
        const i = this;
        this.a11yContainer.textContent = "", setTimeout(function () {
            i.a11yContainer.textContent = t
        }, 100)
    }, p.prototype._getAnimationEndEventName = function () {
        let t;
        const i = document.createElement("_fake"), e = {
            MozTransition: "animationend",
            OTransition: "oAnimationEnd",
            WebkitTransition: "webkitAnimationEnd",
            transition: "animationend"
        };
        for (t in e) if (void 0 !== i.style[t]) return e[t];
        return "animationend"
    }, p);

    function p() {
        this.notifications = [], this.events = {}, this.X_POSITION_FLEX_MAP = {
            left: "flex-start", center: "center", right: "flex-end"
        }, this.Y_POSITION_FLEX_MAP = {top: "flex-start", center: "center", bottom: "flex-end"};
        const t = document.createDocumentFragment(), i = this._createHTMLElement({tagName: "div", className: "notyf"});
        t.appendChild(i), document.body.appendChild(t), this.container = i, this.animationEndEventName = this._getAnimationEndEventName(), this._createA11yContainer()
    }

    function d(t) {
        const e = this;
        this.dismiss = this._removeNotification, this.notifications = new s, this.view = new c;
        const i = this.registerTypes(t);
        this.options = o(o({}, r), t), this.options.types = i, this.notifications.onUpdate(function (t, i) {
            return e.view.update(t, i)
        }), this.view.on(f.Dismiss, function (t) {
            var i = t.target, t = t.event;
            e._removeNotification(i), i.triggerEvent(f.Dismiss, t)
        }), this.view.on(f.Click, function (t) {
            var i = t.target, t = t.event;
            return i.triggerEvent(f.Click, t)
        })
    }

    return d.prototype.error = function (t) {
        t = this.normalizeOptions("error", t);
        return this.open(t)
    }, d.prototype.success = function (t) {
        t = this.normalizeOptions("success", t);
        return this.open(t)
    }, d.prototype.open = function (i) {
        var t = this.options.types.find(function (t) {
            return t.type === i.type
        }) || {}, t = o(o({}, t), i);
        this.assignProps(["ripple", "position", "dismissible"], t);
        t = new n(t);
        return this._pushNotification(t), t
    }, d.prototype.dismissAll = function () {
        for (; this.notifications.splice(0, 1);) ;
    }, d.prototype.assignProps = function (t, i) {
        const e = this;
        t.forEach(function (t) {
            i[t] = (null === i[t] ? e.options : i)[t]
        })
    }, d.prototype._pushNotification = function (t) {
        const i = this;
        this.notifications.push(t);
        const e = (void 0 !== t.options.duration ? t : this).options.duration;
        e && setTimeout(function () {
            return i._removeNotification(t)
        }, e)
    }, d.prototype._removeNotification = function (t) {
        t = this.notifications.indexOf(t);
        -1 !== t && this.notifications.splice(t, 1)
    }, d.prototype.normalizeOptions = function (t, i) {
        t = {type: t};
        return "string" === typeof i ? t.message = i : "object" === typeof i && (t = o(o({}, t), i)), t
    }, d.prototype.registerTypes = function (t) {
        const i = (t && t.types || []).slice();
        return r.types.map(function (e) {
            let n = -1;
            i.forEach(function (t, i) {
                t.type === e.type && (n = i)
            });
            var t = -1 !== n ? i.splice(n, 1)[0] : {};
            return o(o({}, e), t)
        }).concat(i)
    }, d
}();

function checkFor(e, t, i, c, l) {
    if (document.querySelectorAll('#' + i).length) {
        if (l && typeof l === 'function') l();
        return clearInterval(this)
    }
    if (document.querySelectorAll(e).length) document.querySelectorAll(e)[0].remove();
    let r = document.createElement(t);
    r.id = i;
    r.innerHTML = c;
    document.body.prepend(r);
    if (l && typeof l === 'function' && document.querySelectorAll('#' + i).length) return l();
}

function onChangePlay() {
    if (document.querySelectorAll('img[alt="Error"]').length) window.location = window.location.href
    checkFor("canvas", "canvas", "octo", null, octo);
}

window.onpopstate = function (event) {
    onChangePlay();
}

window.addEventListener('replaceState', function (e) {
    onChangePlay();
});

window.onhashchange = function () {
    onChangePlay();
};

onChangePlay();

