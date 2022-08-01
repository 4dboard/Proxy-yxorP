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
    const WRAP_CLASS = "CodeMirror-activeline";
    const BACK_CLASS = "CodeMirror-activeline-background";
    const GUTT_CLASS = "CodeMirror-activeline-gutter";

    CodeMirror.defineOption("styleActiveLine", false, function (cm, val, old) {
        const prev = old === CodeMirror.Init ? false : old;
        if (val === prev) return
        if (prev) {
            cm.off("beforeSelectionChange", selectionChange);
            clearActiveLines(cm);
            delete cm.state.activeLines;
        }
        if (val) {
            cm.state.activeLines = [];
            updateActiveLines(cm, cm.listSelections());
            cm.on("beforeSelectionChange", selectionChange);
        }
    });

    function clearActiveLines(cm) {
        for (let i = 0; i < cm.state.activeLines.length; i++) {
            cm.removeLineClass(cm.state.activeLines[i], "wrap", WRAP_CLASS);
            cm.removeLineClass(cm.state.activeLines[i], "background", BACK_CLASS);
            cm.removeLineClass(cm.state.activeLines[i], "gutter", GUTT_CLASS);
        }
    }

    function sameArray(a, b) {
        if (a.length !== b.length) return false;
        for (let i = 0; i < a.length; i++)
            if (a[i] !== b[i]) return false;
        return true;
    }

    function updateActiveLines(cm, ranges) {
        const active = [];
        for (var i = 0; i < ranges.length; i++) {
            const range = ranges[i];
            const option = cm.getOption("styleActiveLine");
            if (typeof option === "object" && option.nonEmpty ? range.anchor.line !== range.head.line : !range.empty())
                continue
            const line = cm.getLineHandleVisualStart(range.head.line);
            if (active[active.length - 1] !== line) active.push(line);
        }
        if (sameArray(cm.state.activeLines, active)) return;
        cm.operation(function () {
            clearActiveLines(cm);
            for (let i = 0; i < active.length; i++) {
                cm.addLineClass(active[i], "wrap", WRAP_CLASS);
                cm.addLineClass(active[i], "background", BACK_CLASS);
                cm.addLineClass(active[i], "gutter", GUTT_CLASS);
            }
            cm.state.activeLines = active;
        });
    }

    function selectionChange(cm, sel) {
        updateActiveLines(cm, sel.ranges);
    }
});
