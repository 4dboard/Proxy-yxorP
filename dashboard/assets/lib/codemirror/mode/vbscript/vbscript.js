// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

/*
For extra ASP classic objects, initialize CodeMirror instance with this option:
    isASP: true

E.G.:
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        isASP: true
      });
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

    CodeMirror.defineMode("vbscript", function (conf, parserConf) {
        const ERRORCLASS = 'error';

        function wordRegexp(words) {
            return new RegExp("^((" + words.join(")|(") + "))\\b", "i");
        }

        const singleOperators = new RegExp("^[+\\-*/&\\\\^<>=]");
        const doubleOperators = new RegExp("^((<>)|(<=)|(>=))");
        const singleDelimiters = new RegExp('^[.,]');
        const brakets = new RegExp('^[()]');
        const identifiers = new RegExp("^[A-Za-z][_A-Za-z0-9]*");

        const openingKeywords = ['class', 'sub', 'select', 'while', 'if', 'function', 'property', 'with', 'for'];
        const middleKeywords = ['else', 'elseif', 'case'];
        const endKeywords = ['next', 'loop', 'wend'];

        const wordOperators = wordRegexp(['and', 'or', 'not', 'xor', 'is', 'mod', 'eqv', 'imp']);
        const commonkeywords = ['dim', 'redim', 'then', 'until', 'randomize',
            'byval', 'byref', 'new', 'property', 'exit', 'in',
            'const', 'private', 'public',
            'get', 'set', 'let', 'stop', 'on error resume next', 'on error goto 0', 'option explicit', 'call', 'me'];

        //This list was from: http://msdn.microsoft.com/en-us/library/f8tbc79x(v=vs.84).aspx
        const atomWords = ['true', 'false', 'nothing', 'empty', 'null'];
        //This list was from: http://msdn.microsoft.com/en-us/library/3ca8tfek(v=vs.84).aspx
        const builtinFuncsWords = ['abs', 'array', 'asc', 'atn', 'cbool', 'cbyte', 'ccur', 'cdate', 'cdbl', 'chr', 'cint', 'clng', 'cos', 'csng', 'cstr', 'date', 'dateadd', 'datediff', 'datepart',
            'dateserial', 'datevalue', 'day', 'escape', 'eval', 'execute', 'exp', 'filter', 'formatcurrency', 'formatdatetime', 'formatnumber', 'formatpercent', 'getlocale', 'getobject',
            'getref', 'hex', 'hour', 'inputbox', 'instr', 'instrrev', 'int', 'fix', 'isarray', 'isdate', 'isempty', 'isnull', 'isnumeric', 'isobject', 'join', 'lbound', 'lcase', 'left',
            'len', 'loadpicture', 'log', 'ltrim', 'rtrim', 'trim', 'maths', 'mid', 'minute', 'month', 'monthname', 'msgbox', 'now', 'oct', 'replace', 'rgb', 'right', 'rnd', 'round',
            'scriptengine', 'scriptenginebuildversion', 'scriptenginemajorversion', 'scriptengineminorversion', 'second', 'setlocale', 'sgn', 'sin', 'space', 'split', 'sqr', 'strcomp',
            'string', 'strreverse', 'tan', 'time', 'timer', 'timeserial', 'timevalue', 'typename', 'ubound', 'ucase', 'unescape', 'vartype', 'weekday', 'weekdayname', 'year'];

        //This list was from: http://msdn.microsoft.com/en-us/library/ydz4cfk3(v=vs.84).aspx
        const builtinConsts = ['vbBlack', 'vbRed', 'vbGreen', 'vbYellow', 'vbBlue', 'vbMagenta', 'vbCyan', 'vbWhite', 'vbBinaryCompare', 'vbTextCompare',
            'vbSunday', 'vbMonday', 'vbTuesday', 'vbWednesday', 'vbThursday', 'vbFriday', 'vbSaturday', 'vbUseSystemDayOfWeek', 'vbFirstJan1', 'vbFirstFourDays', 'vbFirstFullWeek',
            'vbGeneralDate', 'vbLongDate', 'vbShortDate', 'vbLongTime', 'vbShortTime', 'vbObjectError',
            'vbOKOnly', 'vbOKCancel', 'vbAbortRetryIgnore', 'vbYesNoCancel', 'vbYesNo', 'vbRetryCancel', 'vbCritical', 'vbQuestion', 'vbExclamation', 'vbInformation', 'vbDefaultButton1', 'vbDefaultButton2',
            'vbDefaultButton3', 'vbDefaultButton4', 'vbApplicationModal', 'vbSystemModal', 'vbOK', 'vbCancel', 'vbAbort', 'vbRetry', 'vbIgnore', 'vbYes', 'vbNo',
            'vbCr', 'VbCrLf', 'vbFormFeed', 'vbLf', 'vbNewLine', 'vbNullChar', 'vbNullString', 'vbTab', 'vbVerticalTab', 'vbUseDefault', 'vbTrue', 'vbFalse',
            'vbEmpty', 'vbNull', 'vbInteger', 'vbLong', 'vbSingle', 'vbDouble', 'vbCurrency', 'vbDate', 'vbString', 'vbObject', 'vbError', 'vbBoolean', 'vbVariant', 'vbDataObject', 'vbDecimal', 'vbByte', 'vbArray'];
        //This list was from: http://msdn.microsoft.com/en-us/library/hkc375ea(v=vs.84).aspx
        let builtinObjsWords = ['WScript', 'err', 'debug', 'RegExp'];
        const knownProperties = ['description', 'firstindex', 'global', 'helpcontext', 'helpfile', 'ignorecase', 'length', 'number', 'pattern', 'source', 'value', 'count'];
        const knownMethods = ['clear', 'execute', 'raise', 'replace', 'test', 'write', 'writeline', 'close', 'open', 'state', 'eof', 'update', 'addnew', 'end', 'createobject', 'quit'];

        const aspBuiltinObjsWords = ['server', 'response', 'request', 'session', 'application'];
        const aspKnownProperties = ['buffer', 'cachecontrol', 'charset', 'contenttype', 'expires', 'expiresabsolute', 'isclientconnected', 'pics', 'status', //response
            'clientcertificate', 'cookies', 'form', 'querystring', 'servervariables', 'totalbytes', //request
            'contents', 'staticobjects', //application
            'codepage', 'lcid', 'sessionid', 'timeout', //session
            'scripttimeout']; //server
        const aspKnownMethods = ['addheader', 'appendtolog', 'binarywrite', 'end', 'flush', 'redirect', //response
            'binaryread', //request
            'remove', 'removeall', 'lock', 'unlock', //application
            'abandon', //session
            'getlasterror', 'htmlencode', 'mappath', 'transfer', 'urlencode']; //server

        let knownWords = knownMethods.concat(knownProperties);

        builtinObjsWords = builtinObjsWords.concat(builtinConsts);

        if (conf.isASP) {
            builtinObjsWords = builtinObjsWords.concat(aspBuiltinObjsWords);
            knownWords = knownWords.concat(aspKnownMethods, aspKnownProperties);
        }

        const keywords = wordRegexp(commonkeywords);
        const atoms = wordRegexp(atomWords);
        const builtinFuncs = wordRegexp(builtinFuncsWords);
        const builtinObjs = wordRegexp(builtinObjsWords);
        const known = wordRegexp(knownWords);
        const stringPrefixes = '"';

        const opening = wordRegexp(openingKeywords);
        const middle = wordRegexp(middleKeywords);
        const closing = wordRegexp(endKeywords);
        const doubleClosing = wordRegexp(['end']);
        const doOpening = wordRegexp(['do']);
        const noIndentWords = wordRegexp(['on error resume next', 'exit']);
        const comment = wordRegexp(['rem']);


        function indent(_stream, state) {
            state.currentIndent++;
        }

        function dedent(_stream, state) {
            state.currentIndent--;
        }

        // tokenizers
        function tokenBase(stream, state) {
            if (stream.eatSpace()) {
                return 'space';
                //return null;
            }

            const ch = stream.peek();

            // Handle Comments
            if (ch === "'") {
                stream.skipToEnd();
                return 'comment';
            }
            if (stream.match(comment)) {
                stream.skipToEnd();
                return 'comment';
            }


            // Handle Number Literals
            if (stream.match(/^((&H)|(&O))?[0-9.]/i, false) && !stream.match(/^((&H)|(&O))?[0-9.]+[a-z_]/i, false)) {
                let floatLiteral = false;
                // Floats
                if (stream.match(/^\d*\.\d+/i)) {
                    floatLiteral = true;
                } else if (stream.match(/^\d+\.\d*/)) {
                    floatLiteral = true;
                } else if (stream.match(/^\.\d+/)) {
                    floatLiteral = true;
                }

                if (floatLiteral) {
                    // Float literals may be "imaginary"
                    stream.eat(/J/i);
                    return 'number';
                }
                // Integers
                let intLiteral = false;
                // Hex
                if (stream.match(/^&H[0-9a-f]+/i)) {
                    intLiteral = true;
                }
                // Octal
                else if (stream.match(/^&O[0-7]+/i)) {
                    intLiteral = true;
                }
                // Decimal
                else if (stream.match(/^[1-9]\d*F?/)) {
                    // Decimal literals may be "imaginary"
                    stream.eat(/J/i);
                    // TODO - Can you have imaginary longs?
                    intLiteral = true;
                }
                // Zero by itself with no other piece of number.
                else if (stream.match(/^0(?![\dx])/i)) {
                    intLiteral = true;
                }
                if (intLiteral) {
                    // Integer literals may be "long"
                    stream.eat(/L/i);
                    return 'number';
                }
            }

            // Handle Strings
            if (stream.match(stringPrefixes)) {
                state.tokenize = tokenStringFactory(stream.current());
                return state.tokenize(stream, state);
            }

            // Handle operators and Delimiters
            if (stream.match(doubleOperators)
                || stream.match(singleOperators)
                || stream.match(wordOperators)) {
                return 'operator';
            }
            if (stream.match(singleDelimiters)) {
                return null;
            }

            if (stream.match(brakets)) {
                return "bracket";
            }

            if (stream.match(noIndentWords)) {
                state.doInCurrentLine = true;

                return 'keyword';
            }

            if (stream.match(doOpening)) {
                indent(stream, state);
                state.doInCurrentLine = true;

                return 'keyword';
            }
            if (stream.match(opening)) {
                if (!state.doInCurrentLine)
                    indent(stream, state);
                else
                    state.doInCurrentLine = false;

                return 'keyword';
            }
            if (stream.match(middle)) {
                return 'keyword';
            }


            if (stream.match(doubleClosing)) {
                dedent(stream, state);
                dedent(stream, state);

                return 'keyword';
            }
            if (stream.match(closing)) {
                if (!state.doInCurrentLine)
                    dedent(stream, state);
                else
                    state.doInCurrentLine = false;

                return 'keyword';
            }

            if (stream.match(keywords)) {
                return 'keyword';
            }

            if (stream.match(atoms)) {
                return 'atom';
            }

            if (stream.match(known)) {
                return 'variable-2';
            }

            if (stream.match(builtinFuncs)) {
                return 'builtin';
            }

            if (stream.match(builtinObjs)) {
                return 'variable-2';
            }

            if (stream.match(identifiers)) {
                return 'variable';
            }

            // Handle non-detected items
            stream.next();
            return ERRORCLASS;
        }

        function tokenStringFactory(delimiter) {
            const singleline = delimiter.length === 1;
            const OUTCLASS = 'string';

            return function (stream, state) {
                while (!stream.eol()) {
                    stream.eatWhile(/[^'"]/);
                    if (stream.match(delimiter)) {
                        state.tokenize = tokenBase;
                        return OUTCLASS;
                    } else {
                        stream.eat(/['"]/);
                    }
                }
                if (singleline) {
                    if (parserConf.singleLineStringErrors) {
                        return ERRORCLASS;
                    } else {
                        state.tokenize = tokenBase;
                    }
                }
                return OUTCLASS;
            };
        }


        function tokenLexer(stream, state) {
            let style = state.tokenize(stream, state);
            let current = stream.current();

            // Handle '.' connected identifiers
            if (current === '.') {
                style = state.tokenize(stream, state);

                current = stream.current();
                if (style && (style.substr(0, 8) === 'variable' || style === 'builtin' || style === 'keyword')) {//|| knownWords.indexOf(current.substring(1)) > -1) {
                    if (style === 'builtin' || style === 'keyword') style = 'variable';
                    if (knownWords.indexOf(current.substr(1)) > -1) style = 'variable-2';

                    return style;
                } else {
                    return ERRORCLASS;
                }
            }

            return style;
        }

        const external = {
            electricChars: "dDpPtTfFeE ",
            startState: function () {
                return {
                    tokenize: tokenBase,
                    lastToken: null,
                    currentIndent: 0,
                    nextLineIndent: 0,
                    doInCurrentLine: false,
                    ignoreKeyword: false


                };
            },

            token: function (stream, state) {
                if (stream.sol()) {
                    state.currentIndent += state.nextLineIndent;
                    state.nextLineIndent = 0;
                    state.doInCurrentLine = 0;
                }
                let style = tokenLexer(stream, state);

                state.lastToken = {style: style, content: stream.current()};

                if (style === 'space') style = null;

                return style;
            },

            indent: function (state, textAfter) {
                const trueText = textAfter.replace(/^\s+|\s+$/g, '');
                if (trueText.match(closing) || trueText.match(doubleClosing) || trueText.match(middle)) return conf.indentUnit * (state.currentIndent - 1);
                if (state.currentIndent < 0) return 0;
                return state.currentIndent * conf.indentUnit;
            }

        };
        return external;
    });

    CodeMirror.defineMIME("text/vbscript", "vbscript");

});
