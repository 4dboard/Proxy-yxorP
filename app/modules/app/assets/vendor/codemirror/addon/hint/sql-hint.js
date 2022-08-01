// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function (mod) {
    if (typeof exports === "object" && typeof module === "object") // CommonJS
        mod(require("../../lib/codemirror"), require("../../mode/sql/sql"));
    else if (typeof define === "function" && define.amd) // AMD
        define(["../../lib/codemirror", "../../mode/sql/sql"], mod);
    else // Plain browser env
        mod(CodeMirror);
})(function (CodeMirror) {
    "use strict";

    let tables;
    let defaultTable;
    let keywords;
    let identifierQuote;
    const CONS = {
        QUERY_DIV: ";",
        ALIAS_KEYWORD: "AS"
    };
    const Pos = CodeMirror.Pos, cmpPos = CodeMirror.cmpPos;

    function isArray(val) {
        return Object.prototype.toString.call(val) === "[object Array]"
    }

    function getKeywords(editor) {
        let mode = editor.doc.modeOption;
        if (mode === "sql") mode = "text/x-sql";
        return CodeMirror.resolveMode(mode).keywords;
    }

    function getIdentifierQuote(editor) {
        let mode = editor.doc.modeOption;
        if (mode === "sql") mode = "text/x-sql";
        return CodeMirror.resolveMode(mode).identifierQuote || "`";
    }

    function getText(item) {
        return typeof item === "string" ? item : item.text;
    }

    function wrapTable(name, value) {
        if (isArray(value)) value = {columns: value}
        if (!value.text) value.text = name
        return value
    }

    function parseTables(input) {
        const result = {};
        if (isArray(input)) {
            for (let i = input.length - 1; i >= 0; i--) {
                const item = input[i];
                result[getText(item).toUpperCase()] = wrapTable(getText(item), item)
            }
        } else if (input) {
            for (let name in input)
                result[name.toUpperCase()] = wrapTable(name, input[name])
        }
        return result
    }

    function getTable(name) {
        return tables[name.toUpperCase()]
    }

    function shallowClone(object) {
        const result = {};
        for (let key in object) if (object.hasOwnProperty(key))
            result[key] = object[key];
        return result;
    }

    function match(string, word) {
        const len = string.length;
        const sub = getText(word).substr(0, len);
        return string.toUpperCase() === sub.toUpperCase();
    }

    function addMatches(result, search, wordlist, formatter) {
        if (isArray(wordlist)) {
            for (let i = 0; i < wordlist.length; i++)
                if (match(search, wordlist[i])) result.push(formatter(wordlist[i]))
        } else {
            for (let word in wordlist) if (wordlist.hasOwnProperty(word)) {
                let val = wordlist[word];
                if (!val || val === true)
                    val = word
                else
                    val = val.displayText ? {text: val.text, displayText: val.displayText} : val.text
                if (match(search, val)) result.push(formatter(val))
            }
        }
    }

    function cleanName(name) {
        // Get rid name from identifierQuote and preceding dot(.)
        if (name.charAt(0) === ".") {
            name = name.substr(1);
        }
        // replace duplicated identifierQuotes with single identifierQuotes
        // and remove single identifierQuotes
        const nameParts = name.split(identifierQuote + identifierQuote);
        for (let i = 0; i < nameParts.length; i++)
            nameParts[i] = nameParts[i].replace(new RegExp(identifierQuote, "g"), "");
        return nameParts.join(identifierQuote);
    }

    function insertIdentifierQuotes(name) {
        const nameParts = getText(name).split(".");
        for (let i = 0; i < nameParts.length; i++)
            nameParts[i] = identifierQuote +
                // duplicate identifierQuotes
                nameParts[i].replace(new RegExp(identifierQuote, "g"), identifierQuote + identifierQuote) +
                identifierQuote;
        const escaped = nameParts.join(".");
        if (typeof name === "string") return escaped;
        name = shallowClone(name);
        name.text = escaped;
        return name;
    }

    function nameCompletion(cur, token, result, editor) {
        // Try to complete table, column names and return start position of completion
        let useIdentifierQuotes = false;
        const nameParts = [];
        let start = token.start;
        let cont = true;
        while (cont) {
            cont = (token.string.charAt(0) === ".");
            useIdentifierQuotes = useIdentifierQuotes || (token.string.charAt(0) === identifierQuote);

            start = token.start;
            nameParts.unshift(cleanName(token.string));

            token = editor.getTokenAt(Pos(cur.line, token.start));
            if (token.string === ".") {
                cont = true;
                token = editor.getTokenAt(Pos(cur.line, token.start));
            }
        }

        // Try to complete table names
        let string = nameParts.join(".");
        addMatches(result, string, tables, function (w) {
            return useIdentifierQuotes ? insertIdentifierQuotes(w) : w;
        });

        // Try to complete columns from defaultTable
        addMatches(result, string, defaultTable, function (w) {
            return useIdentifierQuotes ? insertIdentifierQuotes(w) : w;
        });

        // Try to complete columns
        string = nameParts.pop();
        let table = nameParts.join(".");

        let alias = false;
        const aliasTable = table;
        // Check if table is available. If not, find table by Alias
        if (!getTable(table)) {
            const oldTable = table;
            table = findTableByAlias(table, editor);
            if (table !== oldTable) alias = true;
        }

        let columns = getTable(table);
        if (columns && columns.columns)
            columns = columns.columns;

        if (columns) {
            addMatches(result, string, columns, function (w) {
                let tableInsert = table;
                if (alias === true) tableInsert = aliasTable;
                if (typeof w === "string") {
                    w = tableInsert + "." + w;
                } else {
                    w = shallowClone(w);
                    w.text = tableInsert + "." + w.text;
                }
                return useIdentifierQuotes ? insertIdentifierQuotes(w) : w;
            });
        }

        return start;
    }

    function eachWord(lineText, f) {
        const words = lineText.split(/\s+/);
        for (let i = 0; i < words.length; i++)
            if (words[i]) f(words[i].replace(/[`,;]/g, ''))
    }

    function findTableByAlias(alias, editor) {
        const doc = editor.doc;
        const fullQuery = doc.getValue();
        const aliasUpperCase = alias.toUpperCase();
        let previousWord = "";
        let table = "";
        const separator = [];
        let validRange = {
            start: Pos(0, 0),
            end: Pos(editor.lastLine(), editor.getLineHandle(editor.lastLine()).length)
        };

        //add separator
        let indexOfSeparator = fullQuery.indexOf(CONS.QUERY_DIV);
        while (indexOfSeparator !== -1) {
            separator.push(doc.posFromIndex(indexOfSeparator));
            indexOfSeparator = fullQuery.indexOf(CONS.QUERY_DIV, indexOfSeparator + 1);
        }
        separator.unshift(Pos(0, 0));
        separator.push(Pos(editor.lastLine(), editor.getLineHandle(editor.lastLine()).text.length));

        //find valid range
        let prevItem = null;
        const current = editor.getCursor();
        for (var i = 0; i < separator.length; i++) {
            if ((prevItem === null || cmpPos(current, prevItem) > 0) && cmpPos(current, separator[i]) <= 0) {
                validRange = {start: prevItem, end: separator[i]};
                break;
            }
            prevItem = separator[i];
        }

        if (validRange.start) {
            const query = doc.getRange(validRange.start, validRange.end, false);

            for (var i = 0; i < query.length; i++) {
                const lineText = query[i];
                eachWord(lineText, function (word) {
                    const wordUpperCase = word.toUpperCase();
                    if (wordUpperCase === aliasUpperCase && getTable(previousWord))
                        table = previousWord;
                    if (wordUpperCase !== CONS.ALIAS_KEYWORD)
                        previousWord = word;
                });
                if (table) break;
            }
        }
        return table;
    }

    CodeMirror.registerHelper("hint", "sql", function (editor, options) {
        tables = parseTables(options && options.tables)
        const defaultTableName = options && options.defaultTable;
        const disableKeywords = options && options.disableKeywords;
        defaultTable = defaultTableName && getTable(defaultTableName);
        keywords = getKeywords(editor);
        identifierQuote = getIdentifierQuote(editor);

        if (defaultTableName && !defaultTable)
            defaultTable = findTableByAlias(defaultTableName, editor);

        defaultTable = defaultTable || [];

        if (defaultTable.columns)
            defaultTable = defaultTable.columns;

        const cur = editor.getCursor();
        const result = [];
        const token = editor.getTokenAt(cur);
        let start, end, search;
        if (token.end > cur.ch) {
            token.end = cur.ch;
            token.string = token.string.slice(0, cur.ch - token.start);
        }

        if (token.string.match(/^[.`"'\w@][\w$#]*$/g)) {
            search = token.string;
            start = token.start;
            end = token.end;
        } else {
            start = end = cur.ch;
            search = "";
        }
        if (search.charAt(0) === "." || search.charAt(0) === identifierQuote) {
            start = nameCompletion(cur, token, result, editor);
        } else {
            const objectOrClass = function (w, className) {
                if (typeof w === "object") {
                    w.className = className;
                } else {
                    w = {text: w, className: className};
                }
                return w;
            };
            addMatches(result, search, defaultTable, function (w) {
                return objectOrClass(w, "CodeMirror-hint-table CodeMirror-hint-default-table");
            });
            addMatches(
                result,
                search,
                tables, function (w) {
                    return objectOrClass(w, "CodeMirror-hint-table");
                }
            );
            if (!disableKeywords)
                addMatches(result, search, keywords, function (w) {
                    return objectOrClass(w.toUpperCase(), "CodeMirror-hint-keyword");
                });
        }

        return {list: result, from: Pos(cur.line, start), to: Pos(cur.line, end)};
    });
});
