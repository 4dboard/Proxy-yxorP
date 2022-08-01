// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

// declare global: diff_match_patch, DIFF_INSERT, DIFF_DELETE, DIFF_EQUAL

(function (mod) {
    if (typeof exports === "object" && typeof module === "object") // CommonJS
        mod(require("../../lib/codemirror")); // Note non-packaged dependency diff_match_patch
    else if (typeof define === "function" && define.amd) // AMD
        define(["../../lib/codemirror", "diff_match_patch"], mod);
    else // Plain browser env
        mod(CodeMirror);
})(function (CodeMirror) {
    "use strict";
    const Pos = CodeMirror.Pos;
    const svgNS = "http://www.w3.org/2000/svg";

    function DiffView(mv, type) {
        this.mv = mv;
        this.type = type;
        this.classes = type === "left"
            ? {
                chunk: "CodeMirror-merge-l-chunk",
                start: "CodeMirror-merge-l-chunk-start",
                end: "CodeMirror-merge-l-chunk-end",
                insert: "CodeMirror-merge-l-inserted",
                del: "CodeMirror-merge-l-deleted",
                connect: "CodeMirror-merge-l-connect"
            }
            : {
                chunk: "CodeMirror-merge-r-chunk",
                start: "CodeMirror-merge-r-chunk-start",
                end: "CodeMirror-merge-r-chunk-end",
                insert: "CodeMirror-merge-r-inserted",
                del: "CodeMirror-merge-r-deleted",
                connect: "CodeMirror-merge-r-connect"
            };
    }

    DiffView.prototype = {
        constructor: DiffView,
        init: function (pane, orig, options) {
            this.edit = this.mv.edit;
            ;(this.edit.state.diffViews || (this.edit.state.diffViews = [])).push(this);
            this.orig = CodeMirror(pane, copyObj({
                value: orig,
                readOnly: !this.mv.options.allowEditingOriginals
            }, copyObj(options)));
            if (this.mv.options.connect === "align") {
                if (!this.edit.state.trackAlignable) this.edit.state.trackAlignable = new TrackAlignable(this.edit)
                this.orig.state.trackAlignable = new TrackAlignable(this.orig)
            }
            this.lockButton.title = this.edit.phrase("Toggle locked scrolling");
            this.lockButton.setAttribute("aria-label", this.lockButton.title);

            this.orig.state.diffViews = [this];
            let classLocation = options.chunkClassLocation || "background";
            if (Object.prototype.toString.call(classLocation) !== "[object Array]") classLocation = [classLocation]
            this.classes.classLocation = classLocation

            this.diff = getDiff(asString(orig), asString(options.value), this.mv.options.ignoreWhitespace);
            this.chunks = getChunks(this.diff);
            this.diffOutOfDate = this.dealigned = false;
            this.needsScrollSync = null

            this.showDifferences = options.showDifferences !== false;
        },
        registerEvents: function (otherDv) {
            this.forceUpdate = registerUpdate(this);
            setScrollLock(this, true, false);
            registerScroll(this, otherDv);
        },
        setShowDifferences: function (val) {
            val = val !== false;
            if (val !== this.showDifferences) {
                this.showDifferences = val;
                this.forceUpdate("full");
            }
        }
    };

    function ensureDiff(dv) {
        if (dv.diffOutOfDate) {
            dv.diff = getDiff(dv.orig.getValue(), dv.edit.getValue(), dv.mv.options.ignoreWhitespace);
            dv.chunks = getChunks(dv.diff);
            dv.diffOutOfDate = false;
            CodeMirror.signal(dv.edit, "updateDiff", dv.diff);
        }
    }

    let updating = false;

    function registerUpdate(dv) {
        const edit = {from: 0, to: 0, marked: []};
        const orig = {from: 0, to: 0, marked: []};
        let debounceChange, updatingFast = false;

        function update(mode) {
            updating = true;
            updatingFast = false;
            if (mode === "full") {
                if (dv.svg) clear(dv.svg);
                if (dv.copyButtons) clear(dv.copyButtons);
                clearMarks(dv.edit, edit.marked, dv.classes);
                clearMarks(dv.orig, orig.marked, dv.classes);
                edit.from = edit.to = orig.from = orig.to = 0;
            }
            ensureDiff(dv);
            if (dv.showDifferences) {
                updateMarks(dv.edit, dv.diff, edit, DIFF_INSERT, dv.classes);
                updateMarks(dv.orig, dv.diff, orig, DIFF_DELETE, dv.classes);
            }

            if (dv.mv.options.connect === "align")
                alignChunks(dv);
            makeConnections(dv);
            if (dv.needsScrollSync != null) syncScroll(dv, dv.needsScrollSync)

            updating = false;
        }

        function setDealign(fast) {
            if (updating) return;
            dv.dealigned = true;
            set(fast);
        }

        function set(fast) {
            if (updating || updatingFast) return;
            clearTimeout(debounceChange);
            if (fast === true) updatingFast = true;
            debounceChange = setTimeout(update, fast === true ? 20 : 250);
        }

        function change(_cm, change) {
            if (!dv.diffOutOfDate) {
                dv.diffOutOfDate = true;
                edit.from = edit.to = orig.from = orig.to = 0;
            }
            // Update faster when a line was added/removed
            setDealign(change.text.length - 1 !== change.to.line - change.from.line);
        }

        function swapDoc() {
            dv.diffOutOfDate = true;
            dv.dealigned = true;
            update("full");
        }

        dv.edit.on("change", change);
        dv.orig.on("change", change);
        dv.edit.on("swapDoc", swapDoc);
        dv.orig.on("swapDoc", swapDoc);
        if (dv.mv.options.connect === "align") {
            CodeMirror.on(dv.edit.state.trackAlignable, "realign", setDealign)
            CodeMirror.on(dv.orig.state.trackAlignable, "realign", setDealign)
        }
        dv.edit.on("viewportChange", function () {
            set(false);
        });
        dv.orig.on("viewportChange", function () {
            set(false);
        });
        update();
        return update;
    }

    function registerScroll(dv, otherDv) {
        dv.edit.on("scroll", function () {
            syncScroll(dv, true) && makeConnections(dv);
        });
        dv.orig.on("scroll", function () {
            syncScroll(dv, false) && makeConnections(dv);
            if (otherDv) syncScroll(otherDv, true) && makeConnections(otherDv);
        });
    }

    function syncScroll(dv, toOrig) {
        // Change handler will do a refresh after a timeout when diff is out of date
        if (dv.diffOutOfDate) {
            if (dv.lockScroll && dv.needsScrollSync === null) dv.needsScrollSync = toOrig
            return false
        }
        dv.needsScrollSync = null
        if (!dv.lockScroll) return true;
        let editor, other;
        const now = +new Date;
        if (toOrig) {
            editor = dv.edit;
            other = dv.orig;
        } else {
            editor = dv.orig;
            other = dv.edit;
        }
        // Don't take action if the position of this editor was recently set
        // (to prevent feedback loops)
        if (editor.state.scrollSetBy === dv && (editor.state.scrollSetAt || 0) + 250 > now) return false;

        const sInfo = editor.getScrollInfo();
        if (dv.mv.options.connect === "align") {
            targetPos = sInfo.top;
        } else {
            const halfScreen = .5 * sInfo.clientHeight, midY = sInfo.top + halfScreen;
            const mid = editor.lineAtHeight(midY, "local");
            const around = chunkBoundariesAround(dv.chunks, mid, toOrig);
            const off = getOffsets(editor, toOrig ? around.edit : around.orig);
            const offOther = getOffsets(other, toOrig ? around.orig : around.edit);
            const ratio = (midY - off.top) / (off.bot - off.top);
            var targetPos = (offOther.top - halfScreen) + ratio * (offOther.bot - offOther.top);

            let botDist, mix;
            // Some careful tweaking to make sure no space is left out of view
            // when scrolling to top or bottom.
            if (targetPos > sInfo.top && (mix = sInfo.top / halfScreen) < 1) {
                targetPos = targetPos * mix + sInfo.top * (1 - mix);
            } else if ((botDist = sInfo.height - sInfo.clientHeight - sInfo.top) < halfScreen) {
                const otherInfo = other.getScrollInfo();
                const botDistOther = otherInfo.height - otherInfo.clientHeight - targetPos;
                if (botDistOther > botDist && (mix = botDist / halfScreen) < 1)
                    targetPos = targetPos * mix + (otherInfo.height - otherInfo.clientHeight - botDist) * (1 - mix);
            }
        }

        other.scrollTo(sInfo.left, targetPos);
        other.state.scrollSetAt = now;
        other.state.scrollSetBy = dv;
        return true;
    }

    function getOffsets(editor, around) {
        let bot = around.after;
        if (bot === null) bot = editor.lastLine() + 1;
        return {
            top: editor.heightAtLine(around.before || 0, "local"),
            bot: editor.heightAtLine(bot, "local")
        };
    }

    function setScrollLock(dv, val, action) {
        dv.lockScroll = val;
        if (val && action !== false) syncScroll(dv, DIFF_INSERT) && makeConnections(dv);
        (val ? CodeMirror.addClass : CodeMirror.rmClass)(dv.lockButton, "CodeMirror-merge-scrolllock-enabled");
    }

    // Updating the marks for editor content

    function removeClass(editor, line, classes) {
        const locs = classes.classLocation;
        for (let i = 0; i < locs.length; i++) {
            editor.removeLineClass(line, locs[i], classes.chunk);
            editor.removeLineClass(line, locs[i], classes.start);
            editor.removeLineClass(line, locs[i], classes.end);
        }
    }

    function clearMarks(editor, arr, classes) {
        for (let i = 0; i < arr.length; ++i) {
            const mark = arr[i];
            if (mark instanceof CodeMirror.TextMarker)
                mark.clear();
            else if (mark.parent)
                removeClass(editor, mark, classes);
        }
        arr.length = 0;
    }

    // FIXME maybe add a margin around viewport to prevent too many updates
    function updateMarks(editor, diff, state, type, classes) {
        const vp = editor.getViewport();
        editor.operation(function () {
            if (state.from === state.to || vp.from - state.to > 20 || state.from - vp.to > 20) {
                clearMarks(editor, state.marked, classes);
                markChanges(editor, diff, type, state.marked, vp.from, vp.to, classes);
                state.from = vp.from;
                state.to = vp.to;
            } else {
                if (vp.from < state.from) {
                    markChanges(editor, diff, type, state.marked, vp.from, state.from, classes);
                    state.from = vp.from;
                }
                if (vp.to > state.to) {
                    markChanges(editor, diff, type, state.marked, state.to, vp.to, classes);
                    state.to = vp.to;
                }
            }
        });
    }

    function addClass(editor, lineNr, classes, main, start, end) {
        const locs = classes.classLocation, line = editor.getLineHandle(lineNr);
        for (let i = 0; i < locs.length; i++) {
            if (main) editor.addLineClass(line, locs[i], classes.chunk);
            if (start) editor.addLineClass(line, locs[i], classes.start);
            if (end) editor.addLineClass(line, locs[i], classes.end);
        }
        return line;
    }

    function markChanges(editor, diff, type, marks, from, to, classes) {
        let pos = Pos(0, 0);
        const top = Pos(from, 0), bot = editor.clipPos(Pos(to - 1));
        const cls = type === DIFF_DELETE ? classes.del : classes.insert;

        function markChunk(start, end) {
            const bfrom = Math.max(from, start), bto = Math.min(to, end);
            for (let i = bfrom; i < bto; ++i)
                marks.push(addClass(editor, i, classes, true, i === start, i === end - 1));
            // When the chunk is empty, make sure a horizontal line shows up
            if (start === end && bfrom === end && bto === end) {
                if (bfrom)
                    marks.push(addClass(editor, bfrom - 1, classes, false, false, true));
                else
                    marks.push(addClass(editor, bfrom, classes, false, true, false));
            }
        }

        let chunkStart = 0, pending = false;
        for (var i = 0; i < diff.length; ++i) {
            const part = diff[i], tp = part[0], str = part[1];
            if (tp === DIFF_EQUAL) {
                const cleanFrom = pos.line + (startOfLineClean(diff, i) ? 0 : 1);
                moveOver(pos, str);
                const cleanTo = pos.line + (endOfLineClean(diff, i) ? 1 : 0);
                if (cleanTo > cleanFrom) {
                    if (pending) {
                        markChunk(chunkStart, cleanFrom);
                        pending = false
                    }
                    chunkStart = cleanTo;
                }
            } else {
                pending = true
                if (tp === type) {
                    var end = moveOver(pos, str, true);
                    const a = posMax(top, pos), b = posMin(bot, end);
                    if (!posEq(a, b))
                        marks.push(editor.markText(a, b, {className: cls}));
                    pos = end;
                }
            }
        }
        if (pending) markChunk(chunkStart, pos.line + 1);
    }

    // Updating the gap between editor and original

    function makeConnections(dv) {
        if (!dv.showDifferences) return;

        if (dv.svg) {
            clear(dv.svg);
            var w = dv.gap.offsetWidth;
            attrs(dv.svg, "width", w, "height", dv.gap.offsetHeight);
        }
        if (dv.copyButtons) clear(dv.copyButtons);

        const vpEdit = dv.edit.getViewport(), vpOrig = dv.orig.getViewport();
        const outerTop = dv.mv.wrap.getBoundingClientRect().top;
        const sTopEdit = outerTop - dv.edit.getScrollerElement().getBoundingClientRect().top + dv.edit.getScrollInfo().top;
        const sTopOrig = outerTop - dv.orig.getScrollerElement().getBoundingClientRect().top + dv.orig.getScrollInfo().top;
        for (let i = 0; i < dv.chunks.length; i++) {
            const ch = dv.chunks[i];
            if (ch.editFrom <= vpEdit.to && ch.editTo >= vpEdit.from &&
                ch.origFrom <= vpOrig.to && ch.origTo >= vpOrig.from)
                drawConnectorsForChunk(dv, ch, sTopOrig, sTopEdit, w);
        }
    }

    function getMatchingOrigLine(editLine, chunks) {
        let editStart = 0, origStart = 0;
        for (let i = 0; i < chunks.length; i++) {
            const chunk = chunks[i];
            if (chunk.editTo > editLine && chunk.editFrom <= editLine) return null;
            if (chunk.editFrom > editLine) break;
            editStart = chunk.editTo;
            origStart = chunk.origTo;
        }
        return origStart + (editLine - editStart);
    }

    // Combines information about chunks and widgets/markers to return
    // an array of lines, in a single editor, that probably need to be
    // aligned with their counterparts in the editor next to it.
    function alignableFor(cm, chunks, isOrig) {
        const tracker = cm.state.trackAlignable;
        let start = cm.firstLine(), trackI = 0;
        const result = [];
        for (let i = 0; ; i++) {
            const chunk = chunks[i];
            const chunkStart = !chunk ? 1e9 : isOrig ? chunk.origFrom : chunk.editFrom;
            for (; trackI < tracker.alignable.length; trackI += 2) {
                const n = tracker.alignable[trackI] + 1;
                if (n <= start) continue
                if (n <= chunkStart) result.push(n)
                else break
            }
            if (!chunk) break
            result.push(start = isOrig ? chunk.origTo : chunk.editTo)
        }
        return result
    }

    // Given information about alignable lines in two editors, fill in
    // the result (an array of three-element arrays) to reflect the
    // lines that need to be aligned with each other.
    function mergeAlignable(result, origAlignable, chunks, setIndex) {
        let rI = 0, origI = 0, chunkI = 0, diff = 0;
        outer: for (; ; rI++) {
            const nextR = result[rI], nextO = origAlignable[origI];
            if (!nextR && nextO === null) break

            const rLine = nextR ? nextR[0] : 1e9, oLine = nextO === null ? 1e9 : nextO;
            while (chunkI < chunks.length) {
                const chunk = chunks[chunkI];
                if (chunk.origFrom <= oLine && chunk.origTo > oLine) {
                    origI++
                    rI--
                    continue outer;
                }
                if (chunk.editTo > rLine) {
                    if (chunk.editFrom <= rLine) continue outer;
                    break
                }
                diff += (chunk.origTo - chunk.origFrom) - (chunk.editTo - chunk.editFrom)
                chunkI++
            }
            if (rLine === oLine - diff) {
                nextR[setIndex] = oLine
                origI++
            } else if (rLine < oLine - diff) {
                nextR[setIndex] = rLine + diff
            } else {
                const record = [oLine - diff, null, null];
                record[setIndex] = oLine
                result.splice(rI, 0, record)
                origI++
            }
        }
    }

    function findAlignedLines(dv, other) {
        const alignable = alignableFor(dv.edit, dv.chunks, false), result = [];
        if (other) for (var i = 0, j = 0; i < other.chunks.length; i++) {
            const n = other.chunks[i].editTo;
            while (j < alignable.length && alignable[j] < n) j++
            if (j === alignable.length || alignable[j] !== n) alignable.splice(j++, 0, n)
        }
        for (var i = 0; i < alignable.length; i++)
            result.push([alignable[i], null, null])

        mergeAlignable(result, alignableFor(dv.orig, dv.chunks, true), dv.chunks, 1)
        if (other)
            mergeAlignable(result, alignableFor(other.orig, other.chunks, true), other.chunks, 2)

        return result
    }

    function alignChunks(dv, force) {
        if (!dv.dealigned && !force) return;
        if (!dv.orig.curOp) return dv.orig.operation(function () {
            alignChunks(dv, force);
        });

        dv.dealigned = false;
        const other = dv.mv.left === dv ? dv.mv.right : dv.mv.left;
        if (other) {
            ensureDiff(other);
            other.dealigned = false;
        }
        const linesToAlign = findAlignedLines(dv, other);

        // Clear old aligners
        const aligners = dv.mv.aligners;
        for (var i = 0; i < aligners.length; i++)
            aligners[i].clear();
        aligners.length = 0;

        const cm = [dv.edit, dv.orig], scroll = [], offset = [];
        if (other) cm.push(other.orig);
        for (var i = 0; i < cm.length; i++) {
            scroll.push(cm[i].getScrollInfo().top);
            offset.push(-cm[i].getScrollerElement().getBoundingClientRect().top)
        }

        if (offset[0] !== offset[1] || cm.length === 3 && offset[1] !== offset[2])
            alignLines(cm, offset, [0, 0, 0], aligners)
        for (let ln = 0; ln < linesToAlign.length; ln++)
            alignLines(cm, offset, linesToAlign[ln], aligners);

        for (var i = 0; i < cm.length; i++)
            cm[i].scrollTo(null, scroll[i]);
    }

    function alignLines(cm, cmOffset, lines, aligners) {
        let maxOffset = -1e8;
        const offset = [];
        for (var i = 0; i < cm.length; i++) if (lines[i] != null) {
            const off = cm[i].heightAtLine(lines[i], "local") - cmOffset[i];
            offset[i] = off;
            maxOffset = Math.max(maxOffset, off);
        }
        for (var i = 0; i < cm.length; i++) if (lines[i] != null) {
            const diff = maxOffset - offset[i];
            if (diff > 1)
                aligners.push(padAbove(cm[i], lines[i], diff));
        }
    }

    function padAbove(cm, line, size) {
        let above = true;
        if (line > cm.lastLine()) {
            line--;
            above = false;
        }
        const elt = document.createElement("div");
        elt.className = "CodeMirror-merge-spacer";
        elt.style.height = size + "px";
        elt.style.minWidth = "1px";
        return cm.addLineWidget(line, elt, {height: size, above: above, mergeSpacer: true, handleMouseEvents: true});
    }

    function drawConnectorsForChunk(dv, chunk, sTopOrig, sTopEdit, w) {
        const flip = dv.type === "left";
        const top = dv.orig.heightAtLine(chunk.origFrom, "local", true) - sTopOrig;
        if (dv.svg) {
            let topLpx = top;
            let topRpx = dv.edit.heightAtLine(chunk.editFrom, "local", true) - sTopEdit;
            if (flip) {
                var tmp = topLpx;
                topLpx = topRpx;
                topRpx = tmp;
            }
            let botLpx = dv.orig.heightAtLine(chunk.origTo, "local", true) - sTopOrig;
            let botRpx = dv.edit.heightAtLine(chunk.editTo, "local", true) - sTopEdit;
            if (flip) {
                var tmp = botLpx;
                botLpx = botRpx;
                botRpx = tmp;
            }
            const curveTop = " C " + w / 2 + " " + topRpx + " " + w / 2 + " " + topLpx + " " + (w + 2) + " " + topLpx;
            const curveBot = " C " + w / 2 + " " + botLpx + " " + w / 2 + " " + botRpx + " -1 " + botRpx;
            attrs(dv.svg.appendChild(document.createElementNS(svgNS, "path")),
                "d", "M -1 " + topRpx + curveTop + " L " + (w + 2) + " " + botLpx + curveBot + " z",
                "class", dv.classes.connect);
        }
        if (dv.copyButtons) {
            const copy = dv.copyButtons.appendChild(elt("div", dv.type === "left" ? "\u21dd" : "\u21dc",
                "CodeMirror-merge-copy"));
            const editOriginals = dv.mv.options.allowEditingOriginals;
            copy.title = dv.edit.phrase(editOriginals ? "Push to left" : "Revert chunk");
            copy.chunk = chunk;
            copy.style.top = (chunk.origTo > chunk.origFrom ? top : dv.edit.heightAtLine(chunk.editFrom, "local") - sTopEdit) + "px";
            copy.setAttribute("role", "button");
            copy.setAttribute("tabindex", "0");
            copy.setAttribute("aria-label", copy.title);

            if (editOriginals) {
                const topReverse = dv.edit.heightAtLine(chunk.editFrom, "local") - sTopEdit;
                const copyReverse = dv.copyButtons.appendChild(elt("div", dv.type === "right" ? "\u21dd" : "\u21dc",
                    "CodeMirror-merge-copy-reverse"));
                copyReverse.title = "Push to right";
                copyReverse.chunk = {
                    editFrom: chunk.origFrom, editTo: chunk.origTo,
                    origFrom: chunk.editFrom, origTo: chunk.editTo
                };
                copyReverse.style.top = topReverse + "px";
                dv.type === "right" ? copyReverse.style.left = "2px" : copyReverse.style.right = "2px";
                copyReverse.setAttribute("role", "button");
                copyReverse.setAttribute("tabindex", "0");
                copyReverse.setAttribute("aria-label", copyReverse.title);
            }
        }
    }

    function copyChunk(dv, to, from, chunk) {
        if (dv.diffOutOfDate) return;
        const origStart = chunk.origTo > from.lastLine() ? Pos(chunk.origFrom - 1) : Pos(chunk.origFrom, 0);
        const origEnd = Pos(chunk.origTo, 0);
        const editStart = chunk.editTo > to.lastLine() ? Pos(chunk.editFrom - 1) : Pos(chunk.editFrom, 0);
        const editEnd = Pos(chunk.editTo, 0);
        const handler = dv.mv.options.revertChunk;
        if (handler)
            handler(dv.mv, from, origStart, origEnd, to, editStart, editEnd)
        else
            to.replaceRange(from.getRange(origStart, origEnd), editStart, editEnd)
    }

    // Merge view, containing 0, 1, or 2 diff views.

    const MergeView = CodeMirror.MergeView = function (node, options) {
        if (!(this instanceof MergeView)) return new MergeView(node, options);

        this.options = options;
        const origLeft = options.origLeft, origRight = options.origRight === null ? options.orig : options.origRight;

        const hasLeft = origLeft != null, hasRight = origRight != null;
        const panes = 1 + (hasLeft ? 1 : 0) + (hasRight ? 1 : 0);
        const wrap = [];
        let left = this.left = null, right = this.right = null;
        const self = this;

        if (hasLeft) {
            left = this.left = new DiffView(this, "left");
            var leftPane = elt("div", null, "CodeMirror-merge-pane CodeMirror-merge-left");
            wrap.push(leftPane);
            wrap.push(buildGap(left));
        }

        const editPane = elt("div", null, "CodeMirror-merge-pane CodeMirror-merge-editor");
        wrap.push(editPane);

        if (hasRight) {
            right = this.right = new DiffView(this, "right");
            wrap.push(buildGap(right));
            var rightPane = elt("div", null, "CodeMirror-merge-pane CodeMirror-merge-right");
            wrap.push(rightPane);
        }

        (hasRight ? rightPane : editPane).className += " CodeMirror-merge-pane-rightmost";

        wrap.push(elt("div", null, null, "height: 0; clear: both;"));

        const wrapElt = this.wrap = node.appendChild(elt("div", wrap, "CodeMirror-merge CodeMirror-merge-" + panes + "pane"));
        this.edit = CodeMirror(editPane, copyObj(options));

        if (left) left.init(leftPane, origLeft, options);
        if (right) right.init(rightPane, origRight, options);
        if (options.collapseIdentical)
            this.editor().operation(function () {
                collapseIdenticalStretches(self, options.collapseIdentical);
            });
        if (options.connect === "align") {
            this.aligners = [];
            alignChunks(this.left || this.right, true);
        }
        if (left) left.registerEvents(right)
        if (right) right.registerEvents(left)


        const onResize = function () {
            if (left) makeConnections(left);
            if (right) makeConnections(right);
        };
        CodeMirror.on(window, "resize", onResize);
        const resizeInterval = setInterval(function () {
            for (var p = wrapElt.parentNode; p && p !== document.body; p = p.parentNode) {
            }
            if (!p) {
                clearInterval(resizeInterval);
                CodeMirror.off(window, "resize", onResize);
            }
        }, 5000);
    };

    function buildGap(dv) {
        const lock = dv.lockButton = elt("div", null, "CodeMirror-merge-scrolllock");
        lock.setAttribute("role", "button");
        lock.setAttribute("tabindex", "0");
        const lockWrap = elt("div", [lock], "CodeMirror-merge-scrolllock-wrap");
        CodeMirror.on(lock, "click", function () {
            setScrollLock(dv, !dv.lockScroll);
        });
        CodeMirror.on(lock, "keyup", function (e) {
            e.key === "Enter" && setScrollLock(dv, !dv.lockScroll);
        });
        const gapElts = [lockWrap];
        if (dv.mv.options.revertButtons !== false) {
            dv.copyButtons = elt("div", null, "CodeMirror-merge-copybuttons-" + dv.type);

            function copyButtons(e) {
                const node = e.target || e.srcElement;
                if (!node.chunk) return;
                if (node.className === "CodeMirror-merge-copy-reverse") {
                    copyChunk(dv, dv.orig, dv.edit, node.chunk);
                    return;
                }
                copyChunk(dv, dv.edit, dv.orig, node.chunk);
            }

            CodeMirror.on(dv.copyButtons, "click", copyButtons);
            CodeMirror.on(dv.copyButtons, "keyup", function (e) {
                e.key === "Enter" && copyButtons(e);
            });
            gapElts.unshift(dv.copyButtons);
        }
        if (dv.mv.options.connect !== "align") {
            let svg = document.createElementNS && document.createElementNS(svgNS, "svg");
            if (svg && !svg.createSVGRect) svg = null;
            dv.svg = svg;
            if (svg) gapElts.push(svg);
        }

        return dv.gap = elt("div", gapElts, "CodeMirror-merge-gap");
    }

    MergeView.prototype = {
        constructor: MergeView,
        editor: function () {
            return this.edit;
        },
        rightOriginal: function () {
            return this.right && this.right.orig;
        },
        leftOriginal: function () {
            return this.left && this.left.orig;
        },
        setShowDifferences: function (val) {
            if (this.right) this.right.setShowDifferences(val);
            if (this.left) this.left.setShowDifferences(val);
        },
        rightChunks: function () {
            if (this.right) {
                ensureDiff(this.right);
                return this.right.chunks;
            }
        },
        leftChunks: function () {
            if (this.left) {
                ensureDiff(this.left);
                return this.left.chunks;
            }
        }
    };

    function asString(obj) {
        if (typeof obj === "string") return obj;
        else return obj.getValue();
    }

    // Operations on diffs
    let dmp;

    function getDiff(a, b, ignoreWhitespace) {
        if (!dmp) dmp = new diff_match_patch();

        const diff = dmp.diff_main(a, b);
        // The library sometimes leaves in empty parts, which confuse the algorithm
        for (let i = 0; i < diff.length; ++i) {
            const part = diff[i];
            if (ignoreWhitespace ? !/[^ \t]/.test(part[1]) : !part[1]) {
                diff.splice(i--, 1);
            } else if (i && diff[i - 1][0] === part[0]) {
                diff.splice(i--, 1);
                diff[i][1] += part[1];
            }
        }
        return diff;
    }

    function getChunks(diff) {
        const chunks = [];
        if (!diff.length) return chunks;
        let startEdit = 0, startOrig = 0;
        const edit = Pos(0, 0), orig = Pos(0, 0);
        for (let i = 0; i < diff.length; ++i) {
            const part = diff[i], tp = part[0];
            if (tp === DIFF_EQUAL) {
                const startOff = !startOfLineClean(diff, i) || edit.line < startEdit || orig.line < startOrig ? 1 : 0;
                const cleanFromEdit = edit.line + startOff, cleanFromOrig = orig.line + startOff;
                moveOver(edit, part[1], null, orig);
                const endOff = endOfLineClean(diff, i) ? 1 : 0;
                const cleanToEdit = edit.line + endOff, cleanToOrig = orig.line + endOff;
                if (cleanToEdit > cleanFromEdit) {
                    if (i) chunks.push({
                        origFrom: startOrig, origTo: cleanFromOrig,
                        editFrom: startEdit, editTo: cleanFromEdit
                    });
                    startEdit = cleanToEdit;
                    startOrig = cleanToOrig;
                }
            } else {
                moveOver(tp === DIFF_INSERT ? edit : orig, part[1]);
            }
        }
        if (startEdit <= edit.line || startOrig <= orig.line)
            chunks.push({
                origFrom: startOrig, origTo: orig.line + 1,
                editFrom: startEdit, editTo: edit.line + 1
            });
        return chunks;
    }

    function endOfLineClean(diff, i) {
        if (i === diff.length - 1) return true;
        let next = diff[i + 1][1];
        if ((next.length === 1 && i < diff.length - 2) || next.charCodeAt(0) !== 10) return false;
        if (i === diff.length - 2) return true;
        next = diff[i + 2][1];
        return (next.length > 1 || i === diff.length - 3) && next.charCodeAt(0) === 10;
    }

    function startOfLineClean(diff, i) {
        if (i === 0) return true;
        let last = diff[i - 1][1];
        if (last.charCodeAt(last.length - 1) !== 10) return false;
        if (i === 1) return true;
        last = diff[i - 2][1];
        return last.charCodeAt(last.length - 1) === 10;
    }

    function chunkBoundariesAround(chunks, n, nInEdit) {
        let beforeE, afterE, beforeO, afterO;
        for (let i = 0; i < chunks.length; i++) {
            const chunk = chunks[i];
            const fromLocal = nInEdit ? chunk.editFrom : chunk.origFrom;
            const toLocal = nInEdit ? chunk.editTo : chunk.origTo;
            if (afterE === null) {
                if (fromLocal > n) {
                    afterE = chunk.editFrom;
                    afterO = chunk.origFrom;
                } else if (toLocal > n) {
                    afterE = chunk.editTo;
                    afterO = chunk.origTo;
                }
            }
            if (toLocal <= n) {
                beforeE = chunk.editTo;
                beforeO = chunk.origTo;
            } else if (fromLocal <= n) {
                beforeE = chunk.editFrom;
                beforeO = chunk.origFrom;
            }
        }
        return {edit: {before: beforeE, after: afterE}, orig: {before: beforeO, after: afterO}};
    }

    function collapseSingle(cm, from, to) {
        cm.addLineClass(from, "wrap", "CodeMirror-merge-collapsed-line");
        const widget = document.createElement("span");
        widget.className = "CodeMirror-merge-collapsed-widget";
        widget.title = cm.phrase("Identical text collapsed. Click to expand.");
        const mark = cm.markText(Pos(from, 0), Pos(to - 1), {
            inclusiveLeft: true,
            inclusiveRight: true,
            replacedWith: widget,
            clearOnEnter: true
        });

        function clear() {
            mark.clear();
            cm.removeLineClass(from, "wrap", "CodeMirror-merge-collapsed-line");
        }

        if (mark.explicitlyCleared) clear();
        CodeMirror.on(widget, "click", clear);
        mark.on("clear", clear);
        CodeMirror.on(widget, "click", clear);
        return {mark: mark, clear: clear};
    }

    function collapseStretch(size, editors) {
        const marks = [];

        function clear() {
            for (let i = 0; i < marks.length; i++) marks[i].clear();
        }

        for (var i = 0; i < editors.length; i++) {
            const editor = editors[i];
            const mark = collapseSingle(editor.cm, editor.line, editor.line + size);
            marks.push(mark);
            mark.mark.on("clear", clear);
        }
        return marks[0].mark;
    }

    function unclearNearChunks(dv, margin, off, clear) {
        for (let i = 0; i < dv.chunks.length; i++) {
            const chunk = dv.chunks[i];
            for (let l = chunk.editFrom - margin; l < chunk.editTo + margin; l++) {
                const pos = l + off;
                if (pos >= 0 && pos < clear.length) clear[pos] = false;
            }
        }
    }

    function collapseIdenticalStretches(mv, margin) {
        if (typeof margin != "number") margin = 2;
        const clear = [], edit = mv.editor(), off = edit.firstLine();
        let l = off;
        const e = edit.lastLine();
        for (; l <= e; l++) clear.push(true);
        if (mv.left) unclearNearChunks(mv.left, margin, off, clear);
        if (mv.right) unclearNearChunks(mv.right, margin, off, clear);

        for (let i = 0; i < clear.length; i++) {
            if (clear[i]) {
                const line = i + off;
                for (var size = 1; i < clear.length - 1 && clear[i + 1]; i++, size++) {
                }
                if (size > margin) {
                    const editors = [{line: line, cm: edit}];
                    if (mv.left) editors.push({line: getMatchingOrigLine(line, mv.left.chunks), cm: mv.left.orig});
                    if (mv.right) editors.push({line: getMatchingOrigLine(line, mv.right.chunks), cm: mv.right.orig});
                    const mark = collapseStretch(size, editors);
                    if (mv.options.onCollapse) mv.options.onCollapse(mv, line, size, mark);
                }
            }
        }
    }

    // General utilities

    function elt(tag, content, className, style) {
        const e = document.createElement(tag);
        if (className) e.className = className;
        if (style) e.style.cssText = style;
        if (typeof content === "string") e.appendChild(document.createTextNode(content));
        else if (content) for (let i = 0; i < content.length; ++i) e.appendChild(content[i]);
        return e;
    }

    function clear(node) {
        for (let count = node.childNodes.length; count > 0; --count)
            node.removeChild(node.firstChild);
    }

    function attrs(elt) {
        for (let i = 1; i < arguments.length; i += 2)
            elt.setAttribute(arguments[i], arguments[i + 1]);
    }

    function copyObj(obj, target) {
        if (!target) target = {};
        for (let prop in obj) if (obj.hasOwnProperty(prop)) target[prop] = obj[prop];
        return target;
    }

    function moveOver(pos, str, copy, other) {
        const out = copy ? Pos(pos.line, pos.ch) : pos;
        let at = 0;
        for (; ;) {
            const nl = str.indexOf("\n", at);
            if (nl === -1) break;
            ++out.line;
            if (other) ++other.line;
            at = nl + 1;
        }
        out.ch = (at ? 0 : out.ch) + (str.length - at);
        if (other) other.ch = (at ? 0 : other.ch) + (str.length - at);
        return out;
    }

    // Tracks collapsed markers and line widgets, in order to be able to
    // accurately align the content of two editors.

    const F_WIDGET = 1, F_WIDGET_BELOW = 2, F_MARKER = 4;

    function TrackAlignable(cm) {
        this.cm = cm
        this.alignable = []
        this.height = cm.doc.height
        const self = this;
        cm.on("markerAdded", function (_, marker) {
            if (!marker.collapsed) return
            const found = marker.find(1);
            if (found != null) self.set(found.line, F_MARKER)
        })
        cm.on("markerCleared", function (_, marker, _min, max) {
            if (max != null && marker.collapsed)
                self.check(max, F_MARKER, self.hasMarker)
        })
        cm.on("markerChanged", this.signal.bind(this))
        cm.on("lineWidgetAdded", function (_, widget, lineNo) {
            if (widget.mergeSpacer) return
            if (widget.above) self.set(lineNo - 1, F_WIDGET_BELOW)
            else self.set(lineNo, F_WIDGET)
        })
        cm.on("lineWidgetCleared", function (_, widget, lineNo) {
            if (widget.mergeSpacer) return
            if (widget.above) self.check(lineNo - 1, F_WIDGET_BELOW, self.hasWidgetBelow)
            else self.check(lineNo, F_WIDGET, self.hasWidget)
        })
        cm.on("lineWidgetChanged", this.signal.bind(this))
        cm.on("change", function (_, change) {
            const start = change.from.line, nBefore = change.to.line - change.from.line;
            const nAfter = change.text.length - 1, end = start + nAfter;
            if (nBefore || nAfter) self.map(start, nBefore, nAfter)
            self.check(end, F_MARKER, self.hasMarker)
            if (nBefore || nAfter) self.check(change.from.line, F_MARKER, self.hasMarker)
        })
        cm.on("viewportChange", function () {
            if (self.cm.doc.height !== self.height) self.signal()
        })
    }

    TrackAlignable.prototype = {
        signal: function () {
            CodeMirror.signal(this, "realign")
            this.height = this.cm.doc.height
        },

        set: function (n, flags) {
            let pos = -1;
            for (; pos < this.alignable.length; pos += 2) {
                const diff = this.alignable[pos] - n;
                if (diff === 0) {
                    if ((this.alignable[pos + 1] & flags) === flags) return
                    this.alignable[pos + 1] |= flags
                    this.signal()
                    return
                }
                if (diff > 0) break
            }
            this.signal()
            this.alignable.splice(pos, 0, n, flags)
        },

        find: function (n) {
            for (let i = 0; i < this.alignable.length; i += 2)
                if (this.alignable[i] === n) return i
            return -1
        },

        check: function (n, flag, pred) {
            const found = this.find(n);
            if (found === -1 || !(this.alignable[found + 1] && flag)) return
            if (!pred.call(this, n)) {
                this.signal()
                const flags = this.alignable[found + 1] & ~flag;
                if (flags) this.alignable[found + 1] = flags
                else this.alignable.splice(found, 2)
            }
        },

        hasMarker: function (n) {
            const handle = this.cm.getLineHandle(n);
            if (handle.markedSpans) for (let i = 0; i < handle.markedSpans.length; i++)
                if (handle.markedSpans[i].marker.collapsed && handle.markedSpans[i].to != null)
                    return true
            return false
        },

        hasWidget: function (n) {
            const handle = this.cm.getLineHandle(n);
            if (handle.widgets) for (let i = 0; i < handle.widgets.length; i++)
                if (!handle.widgets[i].above && !handle.widgets[i].mergeSpacer) return true
            return false
        },

        hasWidgetBelow: function (n) {
            if (n === this.cm.lastLine()) return false
            const handle = this.cm.getLineHandle(n + 1);
            if (handle.widgets) for (let i = 0; i < handle.widgets.length; i++)
                if (handle.widgets[i].above && !handle.widgets[i].mergeSpacer) return true
            return false
        },

        map: function (from, nBefore, nAfter) {
            const diff = nAfter - nBefore, to = from + nBefore;
            let widgetFrom = -1, widgetTo = -1;
            for (let i = 0; i < this.alignable.length; i += 2) {
                const n = this.alignable[i];
                if (n === from && (this.alignable[i + 1] && F_WIDGET_BELOW)) widgetFrom = i
                if (n === to && (this.alignable[i + 1] && F_WIDGET_BELOW)) widgetTo = i
                if (n <= from)
                else if (n < to) this.alignable.splice(i--, 2)
                else this.alignable[i] += diff
            }
            if (widgetFrom > -1) {
                const flags = this.alignable[widgetFrom + 1];
                if (flags === F_WIDGET_BELOW) this.alignable.splice(widgetFrom, 2)
                else this.alignable[widgetFrom + 1] = flags & ~F_WIDGET_BELOW
            }
            if (widgetTo > -1 && nAfter)
                this.set(from + nAfter, F_WIDGET_BELOW)
        }
    }

    function posMin(a, b) {
        return (a.line - b.line || a.ch - b.ch) < 0 ? a : b;
    }

    function posMax(a, b) {
        return (a.line - b.line || a.ch - b.ch) > 0 ? a : b;
    }

    function posEq(a, b) {
        return a.line === b.line && a.ch === b.ch;
    }

    function findPrevDiff(chunks, start, isOrig) {
        for (let i = chunks.length - 1; i >= 0; i--) {
            const chunk = chunks[i];
            const to = (isOrig ? chunk.origTo : chunk.editTo) - 1;
            if (to < start) return to;
        }
    }

    function findNextDiff(chunks, start, isOrig) {
        for (let i = 0; i < chunks.length; i++) {
            const chunk = chunks[i];
            const from = (isOrig ? chunk.origFrom : chunk.editFrom);
            if (from > start) return from;
        }
    }

    function goNearbyDiff(cm, dir) {
        let found = null;
        const views = cm.state.diffViews, line = cm.getCursor().line;
        if (views) for (let i = 0; i < views.length; i++) {
            const dv = views[i], isOrig = cm === dv.orig;
            ensureDiff(dv);
            const pos = dir < 0 ? findPrevDiff(dv.chunks, line, isOrig) : findNextDiff(dv.chunks, line, isOrig);
            if (pos != null && (found === null || (dir < 0 ? pos > found : pos < found)))
                found = pos;
        }
        if (found != null)
            cm.setCursor(found, 0);
        else
            return CodeMirror.Pass;
    }

    CodeMirror.commands.goNextDiff = function (cm) {
        return goNearbyDiff(cm, 1);
    };
    CodeMirror.commands.goPrevDiff = function (cm) {
        return goNearbyDiff(cm, -1);
    };
});
