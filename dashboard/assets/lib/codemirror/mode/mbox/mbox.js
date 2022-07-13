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

    const rfc2822 = [
        "From", "Sender", "Reply-To", "To", "Cc", "Bcc", "Message-ID",
        "In-Reply-To", "References", "Resent-From", "Resent-Sender", "Resent-To",
        "Resent-Cc", "Resent-Bcc", "Resent-Message-ID", "Return-Path", "Received"
    ];
    const rfc2822NoEmail = [
        "Date", "Subject", "Comments", "Keywords", "Resent-Date"
    ];

    CodeMirror.registerHelper("hintWords", "mbox", rfc2822.concat(rfc2822NoEmail));

    const whitespace = /^[ \t]/;
    const separator = /^From /; // See RFC 4155
    const rfc2822Header = new RegExp("^(" + rfc2822.join("|") + "): ");
    const rfc2822HeaderNoEmail = new RegExp("^(" + rfc2822NoEmail.join("|") + "): ");
    const header = /^[^:]+:/; // Optional fields defined in RFC 2822
    const email = /^[^ ]+@[^ ]+/;
    const untilEmail = /^.*?(?=[^ ]+?@[^ ]+)/;
    const bracketedEmail = /^<.*?>/;
    const untilBracketedEmail = /^.*?(?=<.*>)/;

    function styleForHeader(header) {
        if (header === "Subject") return "header";
        return "string";
    }

    function readToken(stream, state) {
        if (stream.sol()) {
            // From last line
            state.inSeparator = false;
            if (state.inHeader && stream.match(whitespace)) {
                // Header folding
                return null;
            } else {
                state.inHeader = false;
                state.header = null;
            }

            if (stream.match(separator)) {
                state.inHeaders = true;
                state.inSeparator = true;
                return "atom";
            }

            let match;
            let emailPermitted = false;
            if ((match = stream.match(rfc2822HeaderNoEmail)) ||
                (emailPermitted = true) && (match = stream.match(rfc2822Header))) {
                state.inHeaders = true;
                state.inHeader = true;
                state.emailPermitted = emailPermitted;
                state.header = match[1];
                return "atom";
            }

            // Use vim's heuristics: recognize custom headers only if the line is in a
            // block of legitimate headers.
            if (state.inHeaders && (match = stream.match(header))) {
                state.inHeader = true;
                state.emailPermitted = true;
                state.header = match[1];
                return "atom";
            }

            state.inHeaders = false;
            stream.skipToEnd();
            return null;
        }

        if (state.inSeparator) {
            if (stream.match(email)) return "link";
            if (stream.match(untilEmail)) return "atom";
            stream.skipToEnd();
            return "atom";
        }

        if (state.inHeader) {
            const style = styleForHeader(state.header);

            if (state.emailPermitted) {
                if (stream.match(bracketedEmail)) return style + " link";
                if (stream.match(untilBracketedEmail)) return style;
            }
            stream.skipToEnd();
            return style;
        }

        stream.skipToEnd();
        return null;
    }

    CodeMirror.defineMode("mbox", function () {
        return {
            startState: function () {
                return {
                    // Is in a mbox separator
                    inSeparator: false,
                    // Is in a mail header
                    inHeader: false,
                    // If bracketed email is permitted. Only applicable when inHeader
                    emailPermitted: false,
                    // Name of current header
                    header: null,
                    // Is in a region of mail headers
                    inHeaders: false
                };
            },
            token: readToken,
            blankLine: function (state) {
                state.inHeaders = state.inSeparator = state.inHeader = false;
            }
        };
    });

    CodeMirror.defineMIME("application/mbox", "mbox");
});
