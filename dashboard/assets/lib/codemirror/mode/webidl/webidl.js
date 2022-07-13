// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function (mod) {
    if (typeof exports == "object" && typeof module == "object") // CommonJS
        mod(require("../../lib/codemirror"));
    else if (typeof define == "function" && define.amd) // AMD
        define(["../../lib/codemirror"], mod);
    else // Plain browser env
        mod(CodeMirror);
})(function (CodeMirror) {
    "use strict";

    function wordRegexp(words) {
        return new RegExp("^((" + words.join(")|(") + "))\\b");
    }

    const builtinArray = [
        "Clamp",
        "Constructor",
        "EnforceRange",
        "Exposed",
        "ImplicitThis",
        "Global", "PrimaryGlobal",
        "LegacyArrayClass",
        "LegacyUnenumerableNamedProperties",
        "LenientThis",
        "NamedConstructor",
        "NewObject",
        "NoInterfaceObject",
        "OverrideBuiltins",
        "PutForwards",
        "Replaceable",
        "SameObject",
        "TreatNonObjectAsNull",
        "TreatNullAs",
        "EmptyString",
        "Unforgeable",
        "Unscopeable"
    ];
    const builtins = wordRegexp(builtinArray);

    const typeArray = [
        "unsigned", "short", "long",                  // UnsignedIntegerType
        "unrestricted", "float", "double",            // UnrestrictedFloatType
        "boolean", "byte", "octet",                   // Rest of PrimitiveType
        "Promise",                                    // PromiseType
        "ArrayBuffer", "DataView", "Int8Array", "Int16Array", "Int32Array",
        "Uint8Array", "Uint16Array", "Uint32Array", "Uint8ClampedArray",
        "Float32Array", "Float64Array",               // BufferRelatedType
        "ByteString", "DOMString", "USVString", "sequence", "object", "RegExp",
        "Error", "DOMException", "FrozenArray",       // Rest of NonAnyType
        "any",                                        // Rest of SingleType
        "void"                                        // Rest of ReturnType
    ];
    const types = wordRegexp(typeArray);

    const keywordArray = [
        "attribute", "callback", "const", "deleter", "dictionary", "enum", "getter",
        "implements", "inherit", "interface", "iterable", "legacycaller", "maplike",
        "partial", "required", "serializer", "setlike", "setter", "static",
        "stringifier", "typedef",                     // ArgumentNameKeyword except
                                                      // "unrestricted"
        "optional", "readonly", "or"
    ];
    const keywords = wordRegexp(keywordArray);

    const atomArray = [
        "true", "false",                              // BooleanLiteral
        "Infinity", "NaN",                            // FloatLiteral
        "null"                                        // Rest of ConstValue
    ];
    const atoms = wordRegexp(atomArray);

    CodeMirror.registerHelper("hintWords", "webidl",
        builtinArray.concat(typeArray).concat(keywordArray).concat(atomArray));

    const startDefArray = ["callback", "dictionary", "enum", "interface"];
    const startDefs = wordRegexp(startDefArray);

    const endDefArray = ["typedef"];
    const endDefs = wordRegexp(endDefArray);

    const singleOperators = /^[:<=>?]/;
    const integers = /^-?([1-9][0-9]*|0[Xx][0-9A-Fa-f]+|0[0-7]*)/;
    const floats = /^-?(([0-9]+\.[0-9]*|[0-9]*\.[0-9]+)([Ee][+-]?[0-9]+)?|[0-9]+[Ee][+-]?[0-9]+)/;
    const identifiers = /^_?[A-Za-z][0-9A-Z_a-z-]*/;
    const identifiersEnd = /^_?[A-Za-z][0-9A-Z_a-z-]*(?=\s*;)/;
    const strings = /^"[^"]*"/;
    const multilineComments = /^\/\*.*?\*\//;
    const multilineCommentsStart = /^\/\*.*/;
    const multilineCommentsEnd = /^.*?\*\//;

    function readToken(stream, state) {
        // whitespace
        if (stream.eatSpace()) return null;

        // comment
        if (state.inComment) {
            if (stream.match(multilineCommentsEnd)) {
                state.inComment = false;
                return "comment";
            }
            stream.skipToEnd();
            return "comment";
        }
        if (stream.match("//")) {
            stream.skipToEnd();
            return "comment";
        }
        if (stream.match(multilineComments)) return "comment";
        if (stream.match(multilineCommentsStart)) {
            state.inComment = true;
            return "comment";
        }

        // integer and float
        if (stream.match(/^-?[0-9.]/, false)) {
            if (stream.match(integers) || stream.match(floats)) return "number";
        }

        // string
        if (stream.match(strings)) return "string";

        // identifier
        if (state.startDef && stream.match(identifiers)) return "def";

        if (state.endDef && stream.match(identifiersEnd)) {
            state.endDef = false;
            return "def";
        }

        if (stream.match(keywords)) return "keyword";

        if (stream.match(types)) {
            const lastToken = state.lastToken;
            const nextToken = (stream.match(/^\s*(.+?)\b/, false) || [])[1];

            if (lastToken === ":" || lastToken === "implements" ||
                nextToken === "implements" || nextToken === "=") {
                // Used as identifier
                return "builtin";
            } else {
                // Used as type
                return "variable-3";
            }
        }

        if (stream.match(builtins)) return "builtin";
        if (stream.match(atoms)) return "atom";
        if (stream.match(identifiers)) return "variable";

        // other
        if (stream.match(singleOperators)) return "operator";

        // unrecognized
        stream.next();
        return null;
    }

    CodeMirror.defineMode("webidl", function () {
        return {
            startState: function () {
                return {
                    // Is in multiline comment
                    inComment: false,
                    // Last non-whitespace, matched token
                    lastToken: "",
                    // Next token is a definition
                    startDef: false,
                    // Last token of the statement is a definition
                    endDef: false
                };
            },
            token: function (stream, state) {
                const style = readToken(stream, state);

                if (style) {
                    const cur = stream.current();
                    state.lastToken = cur;
                    if (style === "keyword") {
                        state.startDef = startDefs.test(cur);
                        state.endDef = state.endDef || endDefs.test(cur);
                    } else {
                        state.startDef = false;
                    }
                }

                return style;
            }
        };
    });

    CodeMirror.defineMIME("text/x-webidl", "webidl");
});
