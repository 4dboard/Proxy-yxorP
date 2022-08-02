// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function (mod) {
    if (typeof exports === "object" && typeof module === "object") // CommonJS
        mod(require("../../lib/codemirror"))
    else if (typeof define === "function" && define.amd) // AMD
        define(["../../lib/codemirror"], mod)
    else // Plain browser env
        mod(CodeMirror)
})(function (CodeMirror) {
    "use strict"
    const Pos = CodeMirror.Pos;

    function regexpFlags(regexp) {
        const flags = regexp.flags;
        return flags != null ? flags : (regexp.ignoreCase ? "i" : "")
            + (regexp.global ? "g" : "")
            + (regexp.multiline ? "m" : "")
    }

    function ensureFlags(regexp, flags) {
        const current = regexpFlags(regexp);
        let target = current;
        for (let i = 0; i < flags.length; i++) if (target.indexOf(flags.charAt(i)) === -1)
            target += flags.charAt(i)
        return current === target ? regexp : new RegExp(regexp.source, target)
    }

    function maybeMultiline(regexp) {
        return /\\s|\\n|\n|\\W|\\D|\[\^/.test(regexp.source)
    }

    function searchRegexpForward(doc, regexp, start) {
        regexp = ensureFlags(regexp, "g")
        let line = start.line, ch = start.ch;
        const last = doc.lastLine();
        for (; line <= last; line++, ch = 0) {
            regexp.lastIndex = ch
            const string = doc.getLine(line), match = regexp.exec(string);
            if (match)
                return {
                    from: Pos(line, match.index),
                    to: Pos(line, match.index + match[0].length),
                    match: match
                }
        }
    }

    function searchRegexpForwardMultiline(doc, regexp, start) {
        if (!maybeMultiline(regexp)) return searchRegexpForward(doc, regexp, start)

        regexp = ensureFlags(regexp, "gm")
        let string, chunk = 1;
        let line = start.line, last = doc.lastLine();
        for (; line <= last;) {
            // This grows the search buffer in exponentially-sized chunks
            // between matches, so that nearby matches are fast and don't
            // require concatenating the whole document (in case we're
            // searching for something that has tons of matches), but at the
            // same time, the amount of retries is limited.
            for (let i = 0; i < chunk; i++) {
                if (line > last) break
                const curLine = doc.getLine(line++);
                string = string === null ? curLine : string + "\n" + curLine
            }
            chunk = chunk * 2
            regexp.lastIndex = start.ch
            const match = regexp.exec(string);
            if (match) {
                const before = string.slice(0, match.index).split("\n"), inside = match[0].split("\n");
                const startLine = start.line + before.length - 1, startCh = before[before.length - 1].length;
                return {
                    from: Pos(startLine, startCh),
                    to: Pos(startLine + inside.length - 1,
                        inside.length === 1 ? startCh + inside[0].length : inside[inside.length - 1].length),
                    match: match
                }
            }
        }
    }

    function lastMatchIn(string, regexp, endMargin) {
        let match, from = 0;
        while (from <= string.length) {
            regexp.lastIndex = from
            const newMatch = regexp.exec(string);
            if (!newMatch) break
            const end = newMatch.index + newMatch[0].length;
            if (end > string.length - endMargin) break
            if (!match || end > match.index + match[0].length)
                match = newMatch
            from = newMatch.index + 1
        }
        return match
    }

    function searchRegexpBackward(doc, regexp, start) {
        regexp = ensureFlags(regexp, "g")
        let line = start.line, ch = start.ch;
        const first = doc.firstLine();
        for (; line >= first; line--, ch = -1) {
            const string = doc.getLine(line);
            const match = lastMatchIn(string, regexp, ch < 0 ? 0 : string.length - ch);
            if (match)
                return {
                    from: Pos(line, match.index),
                    to: Pos(line, match.index + match[0].length),
                    match: match
                }
        }
    }

    function searchRegexpBackwardMultiline(doc, regexp, start) {
        if (!maybeMultiline(regexp)) return searchRegexpBackward(doc, regexp, start)
        regexp = ensureFlags(regexp, "gm")
        let string, chunkSize = 1;
        const endMargin = doc.getLine(start.line).length - start.ch;
        let line = start.line, first = doc.firstLine();
        for (; line >= first;) {
            for (let i = 0; i < chunkSize && line >= first; i++) {
                const curLine = doc.getLine(line--);
                string = string === null ? curLine : curLine + "\n" + string
            }
            chunkSize *= 2

            const match = lastMatchIn(string, regexp, endMargin);
            if (match) {
                const before = string.slice(0, match.index).split("\n"), inside = match[0].split("\n");
                const startLine = line + before.length, startCh = before[before.length - 1].length;
                return {
                    from: Pos(startLine, startCh),
                    to: Pos(startLine + inside.length - 1,
                        inside.length === 1 ? startCh + inside[0].length : inside[inside.length - 1].length),
                    match: match
                }
            }
        }
    }

    let doFold, noFold;
    if (String.prototype.normalize) {
        doFold = function (str) {
            return str.normalize("NFD").toLowerCase()
        }
        noFold = function (str) {
            return str.normalize("NFD")
        }
    } else {
        doFold = function (str) {
            return str.toLowerCase()
        }
        noFold = function (str) {
            return str
        }
    }

    // Maps a position in a case-folded line back to a position in the original line
    // (compensating for codepoints increasing in number during folding)
    function adjustPos(orig, folded, pos, foldFunc) {
        if (orig.length === folded.length) return pos
        let min = 0, max = pos + Math.max(0, orig.length - folded.length);
        for (; ;) {
            if (min === max) return min
            const mid = (min + max) >> 1;
            const len = foldFunc(orig.slice(0, mid)).length;
            if (len === pos) return mid
            else if (len > pos) max = mid
            else min = mid + 1
        }
    }

    function searchStringForward(doc, query, start, caseFold) {
        // Empty string would match anything and never progress, so we
        // define it to match nothing instead.
        if (!query.length) return null
        const fold = caseFold ? doFold : noFold;
        const lines = fold(query).split(/\r|\n\r?/);

        let line = start.line,
            ch = start.ch;
        const last = doc.lastLine() + 1 - lines.length;
        for (; line <= last; line++, ch = 0) {
            const orig = doc.getLine(line).slice(ch), string = fold(orig);
            if (lines.length === 1) {
                const found = string.indexOf(lines[0]);
                if (found === -1) continue;
                var start = adjustPos(orig, string, found, fold) + ch
                return {
                    from: Pos(line, adjustPos(orig, string, found, fold) + ch),
                    to: Pos(line, adjustPos(orig, string, found + lines[0].length, fold) + ch)
                }
            } else {
                const cutFrom = string.length - lines[0].length;
                if (string.slice(cutFrom) !== lines[0]) continue;
                for (let i = 1; i < lines.length - 1; i++)
                    if (fold(doc.getLine(line + i)) !== lines[i]) continue search
                const end = doc.getLine(line + lines.length - 1), endString = fold(end),
                    lastLine = lines[lines.length - 1];
                if (endString.slice(0, lastLine.length) !== lastLine) continue;
                return {
                    from: Pos(line, adjustPos(orig, string, cutFrom, fold) + ch),
                    to: Pos(line + lines.length - 1, adjustPos(end, endString, lastLine.length, fold))
                }
            }
        }
    }

    function searchStringBackward(doc, query, start, caseFold) {
        if (!query.length) return null
        const fold = caseFold ? doFold : noFold;
        const lines = fold(query).split(/\r|\n\r?/);

        let line = start.line,
            ch = start.ch;
        const first = doc.firstLine() - 1 + lines.length;
        for (; line >= first; line--, ch = -1) {
            let orig = doc.getLine(line);
            if (ch > -1) orig = orig.slice(0, ch)
            const string = fold(orig);
            if (lines.length === 1) {
                const found = string.lastIndexOf(lines[0]);
                if (found === -1) continue;
                return {
                    from: Pos(line, adjustPos(orig, string, found, fold)),
                    to: Pos(line, adjustPos(orig, string, found + lines[0].length, fold))
                }
            } else {
                const lastLine = lines[lines.length - 1];
                if (string.slice(0, lastLine.length) !== lastLine) continue;
                for (var i = 1, start = line - lines.length + 1; i < lines.length - 1; i++)
                    if (fold(doc.getLine(start + i)) !== lines[i]) continue search
                const top = doc.getLine(line + 1 - lines.length), topString = fold(top);
                if (topString.slice(topString.length - lines[0].length) !== lines[0]) continue;
                return {
                    from: Pos(line + 1 - lines.length, adjustPos(top, topString, top.length - lines[0].length, fold)),
                    to: Pos(line, adjustPos(orig, string, lastLine.length, fold))
                }
            }
        }
    }

    function SearchCursor(doc, query, pos, options) {
        this.atOccurrence = false
        this.afterEmptyMatch = false
        this.doc = doc
        pos = pos ? doc.clipPos(pos) : Pos(0, 0)
        this.pos = {from: pos, to: pos}

        let caseFold;
        if (typeof options === "object") {
            caseFold = options.caseFold
        } else { // Backwards compat for when caseFold was the 4th argument
            caseFold = options
            options = null
        }

        if (typeof query === "string") {
            if (caseFold === null) caseFold = false
            this.matches = function (reverse, pos) {
                return (reverse ? searchStringBackward : searchStringForward)(doc, query, pos, caseFold)
            }
        } else {
            query = ensureFlags(query, "gm")
            if (!options || options.multiline !== false)
                this.matches = function (reverse, pos) {
                    return (reverse ? searchRegexpBackwardMultiline : searchRegexpForwardMultiline)(doc, query, pos)
                }
            else
                this.matches = function (reverse, pos) {
                    return (reverse ? searchRegexpBackward : searchRegexpForward)(doc, query, pos)
                }
        }
    }

    SearchCursor.prototype = {
        findNext: function () {
            return this.find(false)
        },
        findPrevious: function () {
            return this.find(true)
        },

        find: function (reverse) {
            let head = this.doc.clipPos(reverse ? this.pos.from : this.pos.to);
            if (this.afterEmptyMatch && this.atOccurrence) {
                // do not return the same 0 width match twice
                head = Pos(head.line, head.ch)
                if (reverse) {
                    head.ch--;
                    if (head.ch < 0) {
                        head.line--;
                        head.ch = (this.doc.getLine(head.line) || "").length;
                    }
                } else {
                    head.ch++;
                    if (head.ch > (this.doc.getLine(head.line) || "").length) {
                        head.ch = 0;
                        head.line++;
                    }
                }
                if (CodeMirror.cmpPos(head, this.doc.clipPos(head)) !== 0) {
                    return this.atOccurrence = false
                }
            }
            const result = this.matches(reverse, head);
            this.afterEmptyMatch = result && CodeMirror.cmpPos(result.from, result.to) === 0

            if (result) {
                this.pos = result
                this.atOccurrence = true
                return this.pos.match || true
            } else {
                const end = Pos(reverse ? this.doc.firstLine() : this.doc.lastLine() + 1, 0);
                this.pos = {from: end, to: end}
                return this.atOccurrence = false
            }
        },

        from: function () {
            if (this.atOccurrence) return this.pos.from
        },
        to: function () {
            if (this.atOccurrence) return this.pos.to
        },

        replace: function (newText, origin) {
            if (!this.atOccurrence) return
            const lines = CodeMirror.splitLines(newText);
            this.doc.replaceRange(lines, this.pos.from, this.pos.to, origin)
            this.pos.to = Pos(this.pos.from.line + lines.length - 1,
                lines[lines.length - 1].length + (lines.length === 1 ? this.pos.from.ch : 0))
        }
    }

    CodeMirror.defineExtension("getSearchCursor", function (query, pos, caseFold) {
        return new SearchCursor(this.doc, query, pos, caseFold)
    })
    CodeMirror.defineDocExtension("getSearchCursor", function (query, pos, caseFold) {
        return new SearchCursor(this, query, pos, caseFold)
    })

    CodeMirror.defineExtension("selectMatches", function (query, caseFold) {
        const ranges = [];
        const cur = this.getSearchCursor(query, this.getCursor("from"), caseFold);
        while (cur.findNext()) {
            if (CodeMirror.cmpPos(cur.to(), this.getCursor("to")) > 0) break
            ranges.push({anchor: cur.from(), head: cur.to()})
        }
        if (ranges.length)
            this.setSelections(ranges, 0)
    })
});
