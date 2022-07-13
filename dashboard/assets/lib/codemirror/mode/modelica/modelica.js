// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

// Modelica support for CodeMirror, copyright (c) by Lennart Ochel

(function (mod) {
    if (typeof exports == "object" && typeof module == "object") // CommonJS
        mod(require("../../lib/codemirror"));
    else if (typeof define == "function" && define.amd) // AMD
        define(["../../lib/codemirror"], mod);
    else // Plain browser env
        mod(CodeMirror);
})

(function (CodeMirror) {
    "use strict";

    CodeMirror.defineMode("modelica", function (config, parserConfig) {

        const indentUnit = config.indentUnit;
        const keywords = parserConfig.keywords || {};
        const builtin = parserConfig.builtin || {};
        const atoms = parserConfig.atoms || {};

        const isSingleOperatorChar = /[;=\(:\),{}.*<>+\-\/^\[\]]/;
        const isDoubleOperatorChar = /(:=|<=|>=|==|<>|\.\+|\.\-|\.\*|\.\/|\.\^)/;
        const isDigit = /[0-9]/;
        const isNonDigit = /[_a-zA-Z]/;

        function tokenLineComment(stream, state) {
            stream.skipToEnd();
            state.tokenize = null;
            return "comment";
        }

        function tokenBlockComment(stream, state) {
            let maybeEnd = false, ch;
            while (ch = stream.next()) {
                if (maybeEnd && ch === "/") {
                    state.tokenize = null;
                    break;
                }
                maybeEnd = (ch === "*");
            }
            return "comment";
        }

        function tokenString(stream, state) {
            let escaped = false, ch;
            while ((ch = stream.next()) != null) {
                if (ch === '"' && !escaped) {
                    state.tokenize = null;
                    state.sol = false;
                    break;
                }
                escaped = !escaped && ch === "\\";
            }

            return "string";
        }

        function tokenIdent(stream, state) {
            stream.eatWhile(isDigit);
            while (stream.eat(isDigit) || stream.eat(isNonDigit)) {
            }


            const cur = stream.current();

            if (state.sol && (cur === "package" || cur === "model" || cur === "when" || cur === "connector")) state.level++;
            else if (state.sol && cur === "end" && state.level > 0) state.level--;

            state.tokenize = null;
            state.sol = false;

            if (keywords.propertyIsEnumerable(cur)) return "keyword";
            else if (builtin.propertyIsEnumerable(cur)) return "builtin";
            else if (atoms.propertyIsEnumerable(cur)) return "atom";
            else return "variable";
        }

        function tokenQIdent(stream, state) {
            while (stream.eat(/[^']/)) {
            }

            state.tokenize = null;
            state.sol = false;

            if (stream.eat("'"))
                return "variable";
            else
                return "error";
        }

        function tokenUnsignedNuber(stream, state) {
            stream.eatWhile(isDigit);
            if (stream.eat('.')) {
                stream.eatWhile(isDigit);
            }
            if (stream.eat('e') || stream.eat('E')) {
                if (!stream.eat('-'))
                    stream.eat('+');
                stream.eatWhile(isDigit);
            }

            state.tokenize = null;
            state.sol = false;
            return "number";
        }

        // Interface
        return {
            startState: function () {
                return {
                    tokenize: null,
                    level: 0,
                    sol: true
                };
            },

            token: function (stream, state) {
                if (state.tokenize != null) {
                    return state.tokenize(stream, state);
                }

                if (stream.sol()) {
                    state.sol = true;
                }

                // WHITESPACE
                if (stream.eatSpace()) {
                    state.tokenize = null;
                    return null;
                }

                const ch = stream.next();

                // LINECOMMENT
                if (ch === '/' && stream.eat('/')) {
                    state.tokenize = tokenLineComment;
                }
                // BLOCKCOMMENT
                else if (ch === '/' && stream.eat('*')) {
                    state.tokenize = tokenBlockComment;
                }
                // TWO SYMBOL TOKENS
                else if (isDoubleOperatorChar.test(ch + stream.peek())) {
                    stream.next();
                    state.tokenize = null;
                    return "operator";
                }
                // SINGLE SYMBOL TOKENS
                else if (isSingleOperatorChar.test(ch)) {
                    state.tokenize = null;
                    return "operator";
                }
                // IDENT
                else if (isNonDigit.test(ch)) {
                    state.tokenize = tokenIdent;
                }
                // Q-IDENT
                else if (ch === "'" && stream.peek() && stream.peek() !== "'") {
                    state.tokenize = tokenQIdent;
                }
                // STRING
                else if (ch === '"') {
                    state.tokenize = tokenString;
                }
                // UNSIGNED_NUBER
                else if (isDigit.test(ch)) {
                    state.tokenize = tokenUnsignedNuber;
                }
                // ERROR
                else {
                    state.tokenize = null;
                    return "error";
                }

                return state.tokenize(stream, state);
            },

            indent: function (state, textAfter) {
                if (state.tokenize != null) return CodeMirror.Pass;

                let level = state.level;
                if (/(algorithm)/.test(textAfter)) level--;
                if (/(equation)/.test(textAfter)) level--;
                if (/(initial algorithm)/.test(textAfter)) level--;
                if (/(initial equation)/.test(textAfter)) level--;
                if (/(end)/.test(textAfter)) level--;

                if (level > 0)
                    return indentUnit * level;
                else
                    return 0;
            },

            blockCommentStart: "/*",
            blockCommentEnd: "*/",
            lineComment: "//"
        };
    });

    function words(str) {
        const obj = {}, words = str.split(" ");
        for (let i = 0; i < words.length; ++i)
            obj[words[i]] = true;
        return obj;
    }

    const modelicaKeywords = "algorithm and annotation assert block break class connect connector constant constrainedby der discrete each else elseif elsewhen encapsulated end enumeration equation expandable extends external false final flow for function if import impure in initial inner input loop model not operator or outer output package parameter partial protected public pure record redeclare replaceable return stream then true type when while within";
    const modelicaBuiltin = "abs acos actualStream asin atan atan2 cardinality ceil cos cosh delay div edge exp floor getInstanceName homotopy inStream integer log log10 mod pre reinit rem semiLinear sign sin sinh spatialDistribution sqrt tan tanh";
    const modelicaAtoms = "Real Boolean Integer String";

    function def(mimes, mode) {
        if (typeof mimes == "string")
            mimes = [mimes];

        const words = [];

        function add(obj) {
            if (obj)
                for (let prop in obj)
                    if (obj.hasOwnProperty(prop))
                        words.push(prop);
        }

        add(mode.keywords);
        add(mode.builtin);
        add(mode.atoms);

        if (words.length) {
            mode.helperType = mimes[0];
            CodeMirror.registerHelper("hintWords", mimes[0], words);
        }

        for (let i = 0; i < mimes.length; ++i)
            CodeMirror.defineMIME(mimes[i], mode);
    }

    def(["text/x-modelica"], {
        name: "modelica",
        keywords: words(modelicaKeywords),
        builtin: words(modelicaBuiltin),
        atoms: words(modelicaAtoms)
    });
});
