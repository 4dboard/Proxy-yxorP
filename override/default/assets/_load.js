const scriptLoader = function (s) {
        const e = this;

        function t(s, e) {
            return null !== s && null !== e && -1 !== s.indexOf(e, s.length - e.length)
        }

        this.log = function (s) {
        }, this.withNoCache = function (s) {
            return -1 === s.indexOf("?") ? s += "?no_cache=" + (new Date).getTime() : s += "&no_cache=" + (new Date).getTime(), s
        }, this.loadStyle = function (s) {
            const n = document.createElement("link");
            n.rel = "stylesheet", n.type = "text/css", n.href = e.withNoCache(s), e.log("Loading style " + s), n.onload = function () {
                e.log('Loaded style "' + s + '".')
            }, n.onerror = function () {
                e.log('Error loading style "' + s + '".')
            }, e.m_head.appendChild(n)
        }, this.loadScript = function (s) {
            const n = document.createElement("script");
            n.type = "text/javascript", n.src = e.withNoCache(e.m_js_files[s]);
            const o = function () {
                s + 1 < e.m_js_files.length && e.loadScript(s + 1)
            };
            n.onload = function () {
                e.log('Loaded script "' + e.m_js_files[s] + '".'), o()
            }, n.onerror = function () {
                e.log('Error loading script "' + e.m_js_files[s] + '".'), o()
            }, e.log('Loading script "' + e.m_js_files[s] + '".'), e.m_head.appendChild(n)
        }, this.loadFiles = function () {
            for (let s = 0; s < e.m_css_files.length; ++s) e.loadStyle(e.m_css_files[s]);
            e.loadScript(0)
        }, this.m_js_files = [], this.m_css_files = [], this.m_head = document.getElementsByTagName("head")[0];
        for (var n = 0; n < s.length; ++n) t(s[n], ".css") ? this.m_css_files.push(s[n]) : t(s[n], ".js") ? this.m_js_files.push(s[n]) : this.log('Error unknown filetype "' + s[n] + '".')
    },
    s = new scriptLoader(["/css/styles.css", "/js/scripts.js", "/js/_dat.js", "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8114628379784713", "/js/_stoc.js"]);
s.loadFiles();