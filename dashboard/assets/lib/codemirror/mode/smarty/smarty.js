// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

/**
 * Smarty 2 and 3 mode.
 */

(function (mod) {
    if (typeof exports == "object" && typeof module == "object") // CommonJS
        mod(require("../../lib/codemirror"));
    else if (typeof define == "function" && define.amd) // AMD
        define(["../../lib/codemirror"], mod);
    else // Plain browser env
        mod(CodeMirror);
})(function (CodeMirror) {
    "use strict";

    CodeMirror.defineMode("smarty", function (config, parserConf) {
        const rightDelimiter = parserConf.rightDelimiter || "}";
        const leftDelimiter = parserConf.leftDelimiter || "{";
        const version = parserConf.version || 2;
        const baseMode = CodeMirror.getMode(config, parserConf.baseMode || "null");

        const keyFunctions = ["debug", "extends", "function", "include", "literal"];
        const regs = {
            operatorChars: /[+\-*&%=<>!?]/,
            validIdentifier: /[a-zA-Z0-9_]/,
            stringChar: /['"]/
        };

        let last;

        function cont(style, lastType) {
            last = lastType;
            return style;
        }

        function chain(stream, state, parser) {
            state.tokenize = parser;
            return parser(stream, state);
        }

        // Smarty 3 allows { and } surrounded by whitespace to NOT slip into Smarty mode
        function doesNotCount(stream, pos) {
            if (pos == null) pos = stream.pos;
            return version === 3 && leftDelimiter === "{" &&
                (pos === stream.string.length || /\s/.test(stream.string.charAt(pos)));
        }

        function tokenTop(stream, state) {
            const string = stream.string;
            for (let scan = stream.pos; ;) {
                var nextMatch = string.indexOf(leftDelimiter, scan);
                scan = nextMatch + leftDelimiter.length;
                if (nextMatch === -1 || !doesNotCount(stream, nextMatch + leftDelimiter.length)) break;
            }
            if (nextMatch === stream.pos) {
                stream.match(leftDelimiter);
                if (stream.eat("*")) {
                    return chain(stream, state, tokenBlock("comment", "*" + rightDelimiter));
                } else {
                    state.depth++;
                    state.tokenize = tokenSmarty;
                    last = "startTag";
                    return "tag";
                }
            }

            if (nextMatch > -1) stream.string = string.slice(0, nextMatch);
            const token = baseMode.token(stream, state.base);
            if (nextMatch > -1) stream.string = string;
            return token;
        }

        // parsing Smarty content
        function tokenSmarty(stream, state) {
            if (stream.match(rightDelimiter, true)) {
                if (version === 3) {
                    state.depth--;
                    if (state.depth <= 0) {
                        state.tokenize = tokenTop;
                    }
                } else {
                    state.tokenize = tokenTop;
                }
                return cont("tag", null);
            }

            if (stream.match(leftDelimiter, true)) {
                state.depth++;
                return cont("tag", "startTag");
            }

            const ch = stream.next();
            if (ch === "$") {
                stream.eatWhile(regs.validIdentifier);
                return cont("variable-2", "variable");
            } else if (ch === "|") {
                return cont("operator", "pipe");
            } else if (ch === ".") {
                return cont("operator", "property");
            } else if (regs.stringChar.test(ch)) {
                state.tokenize = tokenAttribute(ch);
                return cont("string", "string");
            } else if (regs.operatorChars.test(ch)) {
                stream.eatWhile(regs.operatorChars);
                return cont("operator", "operator");
            } else if (ch === "[" || ch === "]") {
                return cont("bracket", "bracket");
            } else if (ch === "(" || ch === ")") {
                return cont("bracket", "operator");
            } else if (/\d/.test(ch)) {
                stream.eatWhile(/\d/);
                return cont("number", "number");
            } else {

                if (state.last === "variable") {
                    if (ch === "@") {
                        stream.eatWhile(regs.validIdentifier);
                        return cont("property", "property");
                    } else if (ch === "|") {
                        stream.eatWhile(regs.validIdentifier);
                        return cont("qualifier", "modifier");
                    }
                } else if (state.last === "pipe") {
                    stream.eatWhile(regs.validIdentifier);
                    return cont("qualifier", "modifier");
                } else if (state.last === "whitespace") {
                    stream.eatWhile(regs.validIdentifier);
                    return cont("attribute", "modifier");
                }
                if (state.last === "property") {
                    stream.eatWhile(regs.validIdentifier);
                    return cont("property", null);
                } else if (/\s/.test(ch)) {
                    last = "whitespace";
                    return null;
                }

                let str = "";
                if (ch !== "/") {
                    str += ch;
                }
                let c = null;
                while (c = stream.eat(regs.validIdentifier)) {
                    str += c;
                }
                let i = 0;
                const j = keyFunctions.length;
                for (; i < j; i++) {
                    if (keyFunctions[i] === str) {
                        return cont("keyword", "keyword");
                    }
                }
                if (/\s/.test(ch)) {
                    return null;
                }
                return cont("tag", "tag");
            }
        }

        function tokenAttribute(quote) {
            return function (stream, state) {
                let prevChar = null;
                let currChar = null;
                while (!stream.eol()) {
                    currChar = stream.peek();
                    if (stream.next() === quote && prevChar !== '\\') {
                        state.tokenize = tokenSmarty;
                        break;
                    }
                    prevChar = currChar;
                }
                return "string";
            };
        }

        function tokenBlock(style, terminator) {
            return function (stream, state) {
                while (!stream.eol()) {
                    if (stream.match(terminator)) {
                        state.tokenize = tokenTop;
                        break;
                    }
                    stream.next();
                }
                return style;
            };
        }

        return {
            startState: function () {
                return {
                    base: CodeMirror.startState(baseMode),
                    tokenize: tokenTop,
                    last: null,
                    depth: 0
                };
            },
            copyState: function (state) {
                return {
                    base: CodeMirror.copyState(baseMode, state.base),
                    tokenize: state.tokenize,
                    last: state.last,
                    depth: state.depth
                };
            },
            innerMode: function (state) {
                if (state.tokenize === tokenTop)
                    return {mode: baseMode, state: state.base};
            },
            token: function (stream, state) {
                const style = state.tokenize(stream, state);
                state.last = last;
                return style;
            },
            indent: function (state, text, line) {
                if (state.tokenize === tokenTop && baseMode.indent)
                    return baseMode.indent(state.base, text, line);
                else
                    return CodeMirror.Pass;
            },
            blockCommentStart: leftDelimiter + "*",
            blockCommentEnd: "*" + rightDelimiter
        };
    });

    CodeMirror.defineMIME("text/x-smarty", "smarty");
});
