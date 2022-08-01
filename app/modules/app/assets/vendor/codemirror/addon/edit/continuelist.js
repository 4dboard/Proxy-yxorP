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

    const listRE = /^(\s*)(>[> ]*|[*+-] \[[x ]]\s|[*+-]\s|(\d+)([.)]))(\s*)/,
        emptyListRE = /^(\s*)(>[> ]*|[*+-] \[[x ]]|[*+-]|(\d+)[.)])(\s*)$/,
        unorderedListRE = /[*+-]\s/;

    CodeMirror.commands.newlineAndIndentContinueMarkdownList = function (cm) {
        if (cm.getOption("disableInput")) return CodeMirror.Pass;
        const ranges = cm.listSelections(), replacements = [];
        for (let i = 0; i < ranges.length; i++) {
            const pos = ranges[i].head;

            // If we're not in Markdown mode, fall back to normal newlineAndIndent
            let eolState = cm.getStateAfter(pos.line);
            const inner = CodeMirror.innerMode(cm.getMode(), eolState);
            if (inner.mode.name !== "markdown" && inner.mode.helperType !== "markdown") {
                cm.execCommand("newlineAndIndent");
                return;
            } else {
                eolState = inner.state;
            }

            const inList = eolState.list !== false;
            const inQuote = eolState.quote !== 0;

            const line = cm.getLine(pos.line), match = listRE.exec(line);
            const cursorBeforeBullet = /^\s*$/.test(line.slice(0, pos.ch));
            if (!ranges[i].empty() || (!inList && !inQuote) || !match || cursorBeforeBullet) {
                cm.execCommand("newlineAndIndent");
                return;
            }
            if (emptyListRE.test(line)) {
                const endOfQuote = inQuote && />\s*$/.test(line);
                const endOfList = !/>\s*$/.test(line);
                if (endOfQuote || endOfList) cm.replaceRange("", {
                    line: pos.line, ch: 0
                }, {
                    line: pos.line, ch: pos.ch + 1
                });
                replacements[i] = "\n";
            } else {
                const indent = match[1], after = match[5];
                const numbered = !(unorderedListRE.test(match[2]) || match[2].indexOf(">") >= 0);
                const bullet = numbered ? (parseInt(match[3], 10) + 1) + match[4] : match[2].replace("x", " ");
                replacements[i] = "\n" + indent + bullet + after;

                if (numbered) incrementRemainingMarkdownListNumbers(cm, pos);
            }
        }

        cm.replaceSelections(replacements);
    };

    // Auto-updating Markdown list numbers when a new item is added to the
    // middle of a list
    function incrementRemainingMarkdownListNumbers(cm, pos) {
        const startLine = pos.line;
        let lookAhead = 0, skipCount = 0;
        const startItem = listRE.exec(cm.getLine(startLine)), startIndent = startItem[1];

        do {
            lookAhead += 1;
            const nextLineNumber = startLine + lookAhead;
            var nextLine = cm.getLine(nextLineNumber), nextItem = listRE.exec(nextLine);

            if (nextItem) {
                const nextIndent = nextItem[1];
                const newNumber = (parseInt(startItem[3], 10) + lookAhead - skipCount);
                const nextNumber = (parseInt(nextItem[3], 10));
                let itemNumber = nextNumber;

                if (startIndent === nextIndent && !isNaN(nextNumber)) {
                    if (newNumber === nextNumber) itemNumber = nextNumber + 1;
                    if (newNumber > nextNumber) itemNumber = newNumber + 1;
                    cm.replaceRange(
                        nextLine.replace(listRE, nextIndent + itemNumber + nextItem[4] + nextItem[5]),
                        {
                            line: nextLineNumber, ch: 0
                        }, {
                            line: nextLineNumber, ch: nextLine.length
                        });
                } else {
                    if (startIndent.length > nextIndent.length) return;
                    // This doesn't run if the next line immediately indents, as it is
                    // not clear of the users intention (new indented item or same level)
                    if ((startIndent.length < nextIndent.length) && (lookAhead === 1)) return;
                    skipCount += 1;
                }
            }
        } while (nextItem);
    }
});
