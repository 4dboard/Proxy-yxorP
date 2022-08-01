// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function (mod) {
    if (typeof exports === "object" && typeof module === "object") // CommonJS
        mod(require("../../lib/codemirror"));
    else if (typeof define === "function" && define.amd) // AMD
        define(["../../lib/codemirror"], mod);
    else // Plain browser env
        mod(CodeMirror);
})(function (CodeMirror) {
    "use strict";

    function bracketFolding(pairs) {
        return function (cm, start) {
            const line = start.line, lineText = cm.getLine(line);

            function findOpening(pair) {
                let tokenType;
                let at = start.ch, pass = 0;
                for (; ;) {
                    const found = at <= 0 ? -1 : lineText.lastIndexOf(pair[0], at - 1);
                    if (found === -1) {
                        if (pass === 1) break;
                        pass = 1;
                        at = lineText.length;
                        continue;
                    }
                    if (pass === 1 && found < start.ch) break;
                    tokenType = cm.getTokenTypeAt(CodeMirror.Pos(line, found + 1));
                    if (!/^(comment|string)/.test(tokenType)) return {ch: found + 1, tokenType: tokenType, pair: pair};
                    at = found - 1;
                }
            }

            function findRange(found) {
                let count = 1;
                const lastLine = cm.lastLine();
                let end;
                const startCh = found.ch;
                let endCh;
                outer: for (let i = line; i <= lastLine; ++i) {
                    const text = cm.getLine(i);
                    let pos = i === line ? startCh : 0;
                    for (; ;) {
                        let nextOpen = text.indexOf(found.pair[0], pos), nextClose = text.indexOf(found.pair[1], pos);
                        if (nextOpen < 0) nextOpen = text.length;
                        if (nextClose < 0) nextClose = text.length;
                        pos = Math.min(nextOpen, nextClose);
                        if (pos === text.length) break;
                        if (cm.getTokenTypeAt(CodeMirror.Pos(i, pos + 1)) === found.tokenType) {
                            if (pos === nextOpen) ++count;
                            else if (!--count) {
                                end = i;
                                endCh = pos;
                                break outer;
                            }
                        }
                        ++pos;
                    }
                }

                if (end === null || line === end) return null
                return {
                    from: CodeMirror.Pos(line, startCh),
                    to: CodeMirror.Pos(end, endCh)
                };
            }

            var found = []
            for (var i = 0; i < pairs.length; i++) {
                const open = findOpening(pairs[i]);
                if (open) found.push(open)
            }
            found.sort(function (a, b) {
                return a.ch - b.ch
            })
            for (var i = 0; i < found.length; i++) {
                const range = findRange(found[i]);
                if (range) return range
            }
            return null
        }
    }

    CodeMirror.registerHelper("fold", "brace", bracketFolding([["{", "}"], ["[", "]"]]));

    CodeMirror.registerHelper("fold", "brace-paren", bracketFolding([["{", "}"], ["[", "]"], ["(", ")"]]));

    CodeMirror.registerHelper("fold", "import", function (cm, start) {
        function hasImport(line) {
            if (line < cm.firstLine() || line > cm.lastLine()) return null;
            let start = cm.getTokenAt(CodeMirror.Pos(line, 1));
            if (!/\S/.test(start.string)) start = cm.getTokenAt(CodeMirror.Pos(line, start.end + 1));
            if (start.type !== "keyword" || start.string !== "import") return null;
            // Now find closing semicolon, return its position
            let i = line;
            const e = Math.min(cm.lastLine(), line + 10);
            for (; i <= e; ++i) {
                const text = cm.getLine(i), semi = text.indexOf(";");
                if (semi !== -1) return {startCh: start.end, end: CodeMirror.Pos(i, semi)};
            }
        }

        const startLine = start.line, has = hasImport(startLine);
        let prev;
        if (!has || hasImport(startLine - 1) || ((prev = hasImport(startLine - 2)) && prev.end.line === startLine - 1))
            return null;
        for (var end = has.end; ;) {
            const next = hasImport(end.line + 1);
            if (next === null) break;
            end = next.end;
        }
        return {from: cm.clipPos(CodeMirror.Pos(startLine, has.startCh + 1)), to: end};
    });

    CodeMirror.registerHelper("fold", "include", function (cm, start) {
        function hasInclude(line) {
            if (line < cm.firstLine() || line > cm.lastLine()) return null;
            let start = cm.getTokenAt(CodeMirror.Pos(line, 1));
            if (!/\S/.test(start.string)) start = cm.getTokenAt(CodeMirror.Pos(line, start.end + 1));
            if (start.type === "meta" && start.string.slice(0, 8) === "#include") return start.start + 8;
        }

        const startLine = start.line, has = hasInclude(startLine);
        if (has === null || hasInclude(startLine - 1) != null) return null;
        for (var end = startLine; ;) {
            const next = hasInclude(end + 1);
            if (next === null) break;
            ++end;
        }
        return {
            from: CodeMirror.Pos(startLine, has + 1),
            to: cm.clipPos(CodeMirror.Pos(end))
        };
    });

});
