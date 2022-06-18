<?php namespace yxorP\Http;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;

class HtmlTokenizer
{
    public const DataState = "DataState";
    public const CharacterReferenceInDataState = "CharacterReferenceInDataState";
    public const RCDATAState = "RCDATAState";
    public const CharacterReferenceInRCDATAState = "CharacterReferenceInRCDATAState";
    public const RAWTEXTState = "RAWTEXTState";
    public const ScriptDataState = "ScriptDataState";
    public const PLAINTEXTState = "PLAINTEXTState";
    public const TagOpenState = "TagOpenState";
    public const EndTagOpenState = "EndTagOpenState";
    public const TagNameState = "TagNameState";
    public const RCDATALessThanSignState = "RCDATALessThanSignState";
    public const RCDATAEndTagOpenState = "RCDATAEndTagOpenState";
    public const RCDATAEndTagNameState = "RCDATAEndTagNameState";
    public const RAWTEXTLessThanSignState = "RAWTEXTLessThanSignState";
    public const RAWTEXTEndTagOpenState = "RAWTEXTEndTagOpenState";
    public const RAWTEXTEndTagNameState = "RAWTEXTEndTagNameState";
    public const ScriptDataLessThanSignState = "ScriptDataLessThanSignState";
    public const ScriptDataEndTagOpenState = "ScriptDataEndTagOpenState";
    public const ScriptDataEndTagNameState = "ScriptDataEndTagNameState";
    public const ScriptDataEscapeStartState = "ScriptDataEscapeStartState";
    public const ScriptDataEscapeStartDashState = "ScriptDataEscapeStartDashState";
    public const ScriptDataEscapedState = "ScriptDataEscapedState";
    public const ScriptDataEscapedDashState = "ScriptDataEscapedDashState";
    public const ScriptDataEscapedDashDashState = "ScriptDataEscapedDashDashState";
    public const ScriptDataEscapedLessThanSignState = "ScriptDataEscapedLessThanSignState";
    public const ScriptDataEscapedEndTagOpenState = "ScriptDataEscapedEndTagOpenState";
    public const ScriptDataEscapedEndTagNameState = "ScriptDataEscapedEndTagNameState";
    public const ScriptDataDoubleEscapeStartState = "ScriptDataDoubleEscapeStartState";
    public const ScriptDataDoubleEscapedState = "ScriptDataDoubleEscapedState";
    public const ScriptDataDoubleEscapedDashState = "ScriptDataDoubleEscapedDashState";
    public const ScriptDataDoubleEscapedDashDashState = "ScriptDataDoubleEscapedDashDashState";
    public const ScriptDataDoubleEscapedLessThanSignState = "ScriptDataDoubleEscapedLessThanSignState";
    public const ScriptDataDoubleEscapeEndState = "ScriptDataDoubleEscapeEndState";
    public const BeforeAttributeNameState = "BeforeAttributeNameState";
    public const AttributeNameState = "AttributeNameState";
    public const AfterAttributeNameState = "AfterAttributeNameState";
    public const BeforeAttributeValueState = "BeforeAttributeValueState";
    public const AttributeValueDoubleQuotedState = "AttributeValueDoubleQuotedState";
    public const AttributeValueSingleQuotedState = "AttributeValueSingleQuotedState";
    public const AttributeValueUnquotedState = "AttributeValueUnquotedState";
    public const CharacterReferenceInAttributeValueState = "CharacterReferenceInAttributeValueState";
    public const AfterAttributeValueQuotedState = "AfterAttributeValueQuotedState";
    public const SelfClosingStartTagState = "SelfClosingStartTagState";
    public const BogusCommentState = "BogusCommentState";
    public const ContinueBogusCommentState = "ContinueBogusCommentState";
    public const MarkupDeclarationOpenState = "MarkupDeclarationOpenState";
    public const CommentStartState = "CommentStartState";
    public const CommentStartDashState = "CommentStartDashState";
    public const CommentState = "CommentState";
    public const CommentEndDashState = "CommentEndDashState";
    public const CommentEndState = "CommentEndState";
    public const CommentEndBangState = "CommentEndBangState";
    public const DOCTYPEState = "DOCTYPEState";
    public const BeforeDOCTYPENameState = "BeforeDOCTYPENameState";
    public const DOCTYPENameState = "DOCTYPENameState";
    public const AfterDOCTYPENameState = "AfterDOCTYPENameState";
    public const AfterDOCTYPEPublicKeywordState = "AfterDOCTYPEPublicKeywordState";
    public const BeforeDOCTYPEPublicIdentifierState = "BeforeDOCTYPEPublicIdentifierState";
    public const DOCTYPEPublicIdentifierDoubleQuotedState = "DOCTYPEPublicIdentifierDoubleQuotedState";
    public const DOCTYPEPublicIdentifierSingleQuotedState = "DOCTYPEPublicIdentifierSingleQuotedState";
    public const AfterDOCTYPEPublicIdentifierState = "AfterDOCTYPEPublicIdentifierState";
    public const BetweenDOCTYPEPublicAndSystemIdentifiersState = "BetweenDOCTYPEPublicAndSystemIdentifiersState";
    public const AfterDOCTYPESystemKeywordState = "AfterDOCTYPESystemKeywordState";
    public const BeforeDOCTYPESystemIdentifierState = "BeforeDOCTYPESystemIdentifierState";
    public const DOCTYPESystemIdentifierDoubleQuotedState = "DOCTYPESystemIdentifierDoubleQuotedState";
    public const DOCTYPESystemIdentifierSingleQuotedState = "DOCTYPESystemIdentifierSingleQuotedState";
    public const AfterDOCTYPESystemIdentifierState = "AfterDOCTYPESystemIdentifierState";
    public const BogusDOCTYPEState = "BogusDOCTYPEState";
    public const CDATASectionState = "CDATASectionState";
    public const CDATASectionRightSquareBracketState = "CDATASectionRightSquareBracketState";
    public const CDATASectionDoubleRightSquareBracketState = "CDATASectionDoubleRightSquareBracketState";
    public const kEndOfFileMarker = false;
    protected $_SegmentedString;
    protected $_Token;
    protected $_pluginsEnabled = true;
    protected $_scriptEnabled = true;
    protected $_stack = [];
    protected $_buffer = [];
    protected $_startPos = 0;
    protected $_tokens = [];
    protected $_state;
    protected $_startState;
    protected $_additionalAllowedCharacter = null;
    protected $_temporaryBuffer = "";
    protected $_bufferedEndTagName = "";
    protected $_appropriateEndTagName = "";
    protected $_debug = false;

    #[Pure] public function __construct(HtmlString $SegmentedString, $option = [])
    {
        $this->_SegmentedString = $SegmentedString;
        $this->_Token = new HtmlToken();
        $this->_state = static::DataState;
        $this->_startState = static::DataState;
        $this->_option = $option + ["debug" => false];
        $this->_debug = !!$this->_option["debug"];
    }

    public function getState()
    {
        return $this->_state;
    }

    public function setState($state)
    {
        $this->_state = $state;
    }

    public function tokenizer()
    {
        if ($this->_SegmentedString->eos()) {
            return [];
        }
        while (true) {
            $this->_startPos = $startPos = $this->_SegmentedString->tell();
            $result = $this->nextToken($this->_SegmentedString);
            $this->_state = static::DataState;
            $endPos = $this->_SegmentedString->tell();
            if ($result === false && $endPos - $startPos === 0) {
                throw new InvalidArgumentException("Given invalid string or invalid statement.");
            }
            $startState = $this->_startState;
            $type = $this->_Token->getType();
            if ($type === HtmlToken::Character && $this->_bufferedEndTagName !== "" && ($startState === static::RAWTEXTState || $startState === static::RCDATAState || $startState === static::ScriptDataState)) {
                $length = strlen($this->_Token->getData());
                $this->_buffer = array_slice($this->_buffer, 0, $length);
                $this->_compactBuffer($startPos, $startPos + $length, $type);
                $token = $this->_Token;
                $this->_tokens[] = $token;
                $this->_SegmentedString->seek($startPos + $length);
                $this->_state = $startState;
            } else {
                $this->_compactBuffer($startPos, $endPos, $type);
                $token = $this->_Token;
                $this->_tokens[] = $token;
                if ($type === HtmlToken::StartTag) {
                    $this->_updateStateFor($token->getTagName());
                } else {
                    $this->_state = static::DataState;
                }
            }
            $this->_startState = $this->_state;
            $this->_buffer = [];
            $this->_bufferedEndTagName = "";
            $this->_temporaryBuffer = "";
            $this->_Token = new HtmlToken();
            if ($this->_SegmentedString->eos()) {
                break;
            }
        }
        return $this->_tokens;
    }

    protected function nextToken(HtmlString $source)
    {
        while (true) {
            $char = $this->_SegmentedString->getCurrentChar();
            switch ($this->_state) {
                case static::DataState:
                    if ($char === "&") {
                        $this->_HTML_ADVANCE_TO(static::CharacterReferenceInDataState);
                    } elseif ($char === "<") {
                        if ($this->_Token->getType() === HtmlToken::Character) {
                            return true;
                        }
                        $this->_HTML_ADVANCE_TO(static::TagOpenState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        return $this->_emitEndOfFile();
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::DataState);
                    }
                    break;
                case static::CharacterReferenceInDataState:
                    $this->_HTML_SWITCH_TO(static::DataState);
                    break;
                case static::RCDATAState:
                    if ($char === "&") {
                        $this->_HTML_ADVANCE_TO(static::CharacterReferenceInRCDATAState);
                    } elseif ($char === "<") {
                        $this->_HTML_ADVANCE_TO(static::RCDATALessThanSignState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        return $this->_emitEndOfFile();
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::RCDATAState);
                    }
                    break;
                case static::CharacterReferenceInRCDATAState:
                    $this->_HTML_SWITCH_TO(static::RCDATAState);
                    break;
                case static::RAWTEXTState:
                    if ($char === "<") {
                        $this->_HTML_ADVANCE_TO(static::RAWTEXTLessThanSignState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        return $this->_emitEndOfFile();
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::RAWTEXTState);
                    }
                    break;
                case static::ScriptDataState:
                    if ($char === "<") {
                        $this->_HTML_ADVANCE_TO(static::ScriptDataLessThanSignState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        return $this->_emitEndOfFile();
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataState);
                    }
                    break;
                case static::PLAINTEXTState:
                    if ($char === static::kEndOfFileMarker) {
                        return $this->_emitEndOfFile();
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::PLAINTEXTState);
                    }
                    break;
                case static::TagOpenState:
                    if ($char === "!") {
                        $this->_HTML_ADVANCE_TO(static::MarkupDeclarationOpenState);
                    } elseif ($char === "/") {
                        $this->_HTML_ADVANCE_TO(static::EndTagOpenState);
                    } elseif (ctype_upper($char)) {
                        $this->_Token->beginStartTag(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::TagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_Token->beginStartTag(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::TagNameState);
                    } elseif ($char === "?") {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::BogusCommentState);
                    } else {
                        $this->_parseError();
                        $this->_bufferCharacter("<");
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    }
                    break;
                case static::EndTagOpenState:
                    if (ctype_upper($char)) {
                        $this->_Token->beginEndTag(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::TagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_Token->beginEndTag(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::TagNameState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_HTML_ADVANCE_TO(static::DataState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::BogusCommentState);
                    }
                    break;
                case static::TagNameState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeAttributeNameState);
                    } elseif ($char === "/") {
                        $this->_HTML_ADVANCE_TO(static::SelfClosingStartTagState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif (ctype_upper($char)) {
                        $this->_Token->appendToName(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::TagNameState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_Token->appendToName($char);
                        $this->_HTML_ADVANCE_TO(static::TagNameState);
                    }
                    break;
                case static::RCDATALessThanSignState:
                    if ($char === "/") {
                        $this->_temporaryBuffer = "";
                        $this->_HTML_ADVANCE_TO(static::RCDATAEndTagOpenState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_HTML_RECONSUME_IN(static::RCDATAState);
                    }
                    break;
                case static::RCDATAEndTagOpenState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::RCDATAEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::RCDATAEndTagNameState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_HTML_RECONSUME_IN(static::RCDATAState);
                    }
                    break;
                case static::RCDATAEndTagNameState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::RCDATAEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::RCDATAEndTagNameState);
                    } else {
                        if ($this->_isTokenizerWhitespace($char)) {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                $result = $this->_FLUSH_AND_ADVANCE_TO(static::BeforeAttributeNameState);
                                if ($result !== null) {
                                    return $result;
                                }
                                break;
                            }
                        } elseif ($char === "/") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                $result = $this->_FLUSH_AND_ADVANCE_TO(static::SelfClosingStartTagState);
                                if ($result !== null) {
                                    return $result;
                                }
                                break;
                            }
                        } elseif ($char === ">") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                return $this->_flushEmitAndResumeIn($source, HtmlTokenizer::DataState);
                            }
                        }
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_Token->appendToCharacter($this->_temporaryBuffer);
                        $this->_bufferedEndTagName = "";
                        $this->_temporaryBuffer = "";
                        $this->_HTML_RECONSUME_IN(static::RCDATAState);
                    }
                    break;
                case static::RAWTEXTLessThanSignState:
                    if ($char === "/") {
                        $this->_temporaryBuffer = "";
                        $this->_HTML_ADVANCE_TO(static::RAWTEXTEndTagOpenState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_HTML_RECONSUME_IN(static::RAWTEXTState);
                    }
                    break;
                case static::RAWTEXTEndTagOpenState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::RAWTEXTEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::RAWTEXTEndTagNameState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_HTML_RECONSUME_IN(static::RAWTEXTState);
                    }
                    break;
                case static::RAWTEXTEndTagNameState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::RAWTEXTEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::RAWTEXTEndTagNameState);
                    } else {
                        if ($this->_isTokenizerWhitespace($char)) {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                $result = $this->_FLUSH_AND_ADVANCE_TO(static::BeforeAttributeNameState);
                                if ($result !== null) {
                                    return $result;
                                }
                                break;
                            }
                        } elseif ($char === "/") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                $result = $this->_FLUSH_AND_ADVANCE_TO(static::SelfClosingStartTagState);
                                if ($result !== null) {
                                    return $result;
                                }
                                break;
                            }
                        } elseif ($char === ">") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                return $this->_flushEmitAndResumeIn($source, HtmlTokenizer::DataState);
                            }
                        }
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_Token->appendToCharacter($this->_temporaryBuffer);
                        $this->_bufferedEndTagName = "";
                        $this->_temporaryBuffer = "";
                        $this->_HTML_RECONSUME_IN(static::RAWTEXTState);
                    }
                    break;
                case static::ScriptDataLessThanSignState:
                    if ($char === "/") {
                        $this->_temporaryBuffer = "";
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEndTagOpenState);
                    } elseif ($char === "!") {
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("!");
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapeStartState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_HTML_RECONSUME_IN(static::ScriptDataState);
                    }
                    break;
                case static::ScriptDataEndTagOpenState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEndTagNameState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_HTML_RECONSUME_IN(static::ScriptDataState);
                    }
                    break;
                case static::ScriptDataEndTagNameState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEndTagNameState);
                    } else {
                        if ($this->_isTokenizerWhitespace($char)) {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                $result = $this->_FLUSH_AND_ADVANCE_TO(static::BeforeAttributeNameState);
                                if ($result !== null) {
                                    return $result;
                                }
                                break;
                            }
                        } elseif ($char === "/") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                $result = $this->_FLUSH_AND_ADVANCE_TO(static::SelfClosingStartTagState);
                                if ($result !== null) {
                                    return $result;
                                }
                                break;
                            }
                        } elseif ($char === ">") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                return $this->_flushEmitAndResumeIn($source, HtmlTokenizer::DataState);
                            }
                        }
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_Token->appendToCharacter($this->_temporaryBuffer);
                        $this->_bufferedEndTagName = "";
                        $this->_temporaryBuffer = "";
                        $this->_HTML_RECONSUME_IN(static::ScriptDataState);
                    }
                    break;
                case static::ScriptDataEscapeStartState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapeStartDashState);
                    } else {
                        $this->_HTML_RECONSUME_IN(static::ScriptDataState);
                    }
                    break;
                case static::ScriptDataEscapeStartDashState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedDashDashState);
                    } else {
                        $this->_HTML_RECONSUME_IN(static::ScriptDataState);
                    }
                    break;
                case static::ScriptDataEscapedState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedDashState);
                    } elseif ($char === "<") {
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedLessThanSignState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedState);
                    }
                    break;
                case static::ScriptDataEscapedDashState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedDashDashState);
                    } elseif ($char === "<") {
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedLessThanSignState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedState);
                    }
                    break;
                case static::ScriptDataEscapedDashDashState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedDashDashState);
                    } elseif ($char === "<") {
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedLessThanSignState);
                    } elseif ($char === ">") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedState);
                    }
                    break;
                case static::ScriptDataEscapedLessThanSignState:
                    if ($char === "/") {
                        $this->_temporaryBuffer = "";
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedEndTagOpenState);
                    } elseif (ctype_upper($char)) {
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter($char);
                        $this->_temporaryBuffer = "";
                        $this->_temporaryBuffer = strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapeStartState);
                    } elseif (ctype_lower($char)) {
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter($char);
                        $this->_temporaryBuffer = "";
                        $this->_temporaryBuffer .= $char;
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapeStartState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_HTML_RECONSUME_IN(static::ScriptDataEscapedState);
                    }
                    break;
                case static::ScriptDataEscapedEndTagOpenState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedEndTagNameState);
                    } else {
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_HTML_RECONSUME_IN(static::ScriptDataEscapedState);
                    }
                    break;
                case static::ScriptDataEscapedEndTagNameState:
                    if (ctype_upper($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedEndTagNameState);
                    } elseif (ctype_lower($char)) {
                        $this->_temporaryBuffer .= $char;
                        $this->_bufferedEndTagName .= $char;
                        $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedEndTagNameState);
                    } else {
                        if ($this->_isTokenizerWhitespace($char)) {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                return $this->_FLUSH_AND_ADVANCE_TO(static::BeforeAttributeNameState);
                            }
                        } elseif ($char === "/") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                return $this->_FLUSH_AND_ADVANCE_TO(static::SelfClosingStartTagState);
                            }
                        } elseif ($char === ">") {
                            if ($this->_isAppropriateEndTag()) {
                                $this->_temporaryBuffer .= $char;
                                $this->_temporaryBuffer .= $char;
                                return $this->_flushEmitAndResumeIn($source, HtmlTokenizer::DataState);
                            }
                        }
                        $this->_bufferCharacter("<");
                        $this->_bufferCharacter("/");
                        $this->_Token->appendToCharacter($this->_temporaryBuffer);
                        $this->_bufferedEndTagName = "";
                        $this->_temporaryBuffer = "";
                        $this->_HTML_RECONSUME_IN(static::ScriptDataEscapedState);
                    }
                    break;
                case static::ScriptDataDoubleEscapeStartState:
                    if ($this->_isTokenizerWhitespace($char) || $char === "/" || $char === ">") {
                        $this->_bufferCharacter($char);
                        if ($this->_temporaryBufferIs(HtmlNames::scriptTag)) {
                            $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedState);
                        } else {
                            $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedState);
                        }
                    } elseif (ctype_upper($char)) {
                        $this->_bufferCharacter($char);
                        $this->_temporaryBuffer .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapeStartState);
                    } elseif (ctype_lower($char)) {
                        $this->_bufferCharacter($char);
                        $this->_temporaryBuffer .= $char;
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapeStartState);
                    } else {
                        $this->_HTML_RECONSUME_IN(static::ScriptDataEscapedState);
                    }
                    break;
                case static::ScriptDataDoubleEscapedState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedDashState);
                    } elseif ($char === "<") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedLessThanSignState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedState);
                    }
                    break;
                case static::ScriptDataDoubleEscapedDashState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedDashDashState);
                    } elseif ($char === "<") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedLessThanSignState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedState);
                    }
                    break;
                case static::ScriptDataDoubleEscapedDashDashState:
                    if ($char === "-") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedDashDashState);
                    } elseif ($char === "<") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedLessThanSignState);
                    } elseif ($char === ">") {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedState);
                    }
                    break;
                case static::ScriptDataDoubleEscapedLessThanSignState:
                    if ($char === "/") {
                        $this->_bufferCharacter($char);
                        $this->_temporaryBuffer = "";
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapeEndState);
                    } else {
                        $this->_HTML_RECONSUME_IN(static::ScriptDataDoubleEscapedState);
                    }
                    break;
                case static::ScriptDataDoubleEscapeEndState:
                    if ($this->_isTokenizerWhitespace($char) || $char === "/" || $char === ">") {
                        $this->_bufferCharacter($char);
                        if ($this->_temporaryBufferIs(HtmlNames::scriptTag)) {
                            $this->_HTML_ADVANCE_TO(static::ScriptDataEscapedState);
                        } else {
                            $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapedState);
                        }
                    } elseif (ctype_upper($char)) {
                        $this->_bufferCharacter($char);
                        $this->_temporaryBuffer .= strtolower($char);
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapeEndState);
                    } elseif (ctype_lower($char)) {
                        $this->_bufferCharacter($char);
                        $this->_temporaryBuffer .= $char;
                        $this->_HTML_ADVANCE_TO(static::ScriptDataDoubleEscapeEndState);
                    } else {
                        $this->_HTML_RECONSUME_IN(static::ScriptDataDoubleEscapedState);
                    }
                    break;
                case static::BeforeAttributeNameState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeAttributeNameState);
                    } elseif ($char === "/") {
                        $this->_HTML_ADVANCE_TO(static::SelfClosingStartTagState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif (ctype_upper($char)) {
                        $this->_Token->addNewAttribute();
                        $this->_Token->beginAttributeName($source->numberOfCharactersConsumed());
                        $this->_Token->appendToAttributeName(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::AttributeNameState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        if ($char === '"' || $char === '\'' || $char === "<" || $char === "=") {
                            $this->_parseError();
                        }
                        $this->_Token->addNewAttribute();
                        $this->_Token->beginAttributeName($source->numberOfCharactersConsumed());
                        $this->_Token->appendToAttributeName($char);
                        $this->_HTML_ADVANCE_TO(static::AttributeNameState);
                    }
                    break;
                case static::AttributeNameState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_Token->endAttributeName($source->numberOfCharactersConsumed());
                        $this->_HTML_ADVANCE_TO(static::AfterAttributeNameState);
                    } elseif ($char === "/") {
                        $this->_Token->endAttributeName($source->numberOfCharactersConsumed());
                        $this->_HTML_ADVANCE_TO(static::SelfClosingStartTagState);
                    } elseif ($char === "=") {
                        $this->_Token->endAttributeName($source->numberOfCharactersConsumed());
                        $this->_HTML_ADVANCE_TO(static::BeforeAttributeValueState);
                    } elseif ($char === ">") {
                        $this->_Token->endAttributeName($source->numberOfCharactersConsumed());
                        return $this->_emitAndResumeIn();
                    } elseif (ctype_upper($char)) {
                        $this->_Token->appendToAttributeName(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::AttributeNameState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->endAttributeName($source->numberOfCharactersConsumed());
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        if ($char === '"' || $char === '\'' || $char === "<") {
                            $this->_parseError();
                        }
                        $this->_Token->appendToAttributeName($char);
                        $this->_HTML_ADVANCE_TO(static::AttributeNameState);
                    }
                    break;
                case static::AfterAttributeNameState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::AfterAttributeNameState);
                    } elseif ($char === "/") {
                        $this->_HTML_ADVANCE_TO(static::SelfClosingStartTagState);
                    } elseif ($char === "=") {
                        $this->_HTML_ADVANCE_TO(static::BeforeAttributeValueState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif (ctype_upper($char)) {
                        $this->_Token->addNewAttribute();
                        $this->_Token->beginAttributeName($source->numberOfCharactersConsumed());
                        $this->_Token->appendToAttributeName(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::AttributeNameState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        if ($char === '"' || $char === '\'' || $char === "<") {
                            $this->_parseError();
                        }
                        $this->_Token->addNewAttribute();
                        $this->_Token->beginAttributeName($source->numberOfCharactersConsumed());
                        $this->_Token->appendToAttributeName($char);
                        $this->_HTML_ADVANCE_TO(static::AttributeNameState);
                    }
                    break;
                case static::BeforeAttributeValueState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeAttributeValueState);
                    } elseif ($char === '"') {
                        $this->_Token->beginAttributeValue($source->numberOfCharactersConsumed() + 1);
                        $this->_HTML_ADVANCE_TO(static::AttributeValueDoubleQuotedState);
                    } elseif ($char === "&") {
                        $this->_Token->beginAttributeValue($source->numberOfCharactersConsumed());
                        $this->_HTML_RECONSUME_IN(static::AttributeValueUnquotedState);
                    } elseif ($char === '\'') {
                        $this->_Token->beginAttributeValue($source->numberOfCharactersConsumed() + 1);
                        $this->_HTML_ADVANCE_TO(static::AttributeValueSingleQuotedState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        if ($char === "<" || $char === "=" || $char === "`") {
                            $this->_parseError();
                        }
                        $this->_Token->beginAttributeValue($source->numberOfCharactersConsumed());
                        $this->_Token->appendToAttributeValue($char);
                        $this->_HTML_ADVANCE_TO(static::AttributeValueUnquotedState);
                    }
                    break;
                case static::AttributeValueDoubleQuotedState:
                    if ($char === '"') {
                        $this->_Token->setDoubleQuoted();
                        $this->_Token->endAttributeValue($source->numberOfCharactersConsumed());
                        $this->_HTML_ADVANCE_TO(static::AfterAttributeValueQuotedState);
                    } elseif ($char === "&") {
                        $this->_additionalAllowedCharacter = '"';
                        $this->_HTML_ADVANCE_TO(static::CharacterReferenceInAttributeValueState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->endAttributeValue($source->numberOfCharactersConsumed());
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_Token->appendToAttributeValue($char);
                        $this->_HTML_ADVANCE_TO(static::AttributeValueDoubleQuotedState);
                    }
                    break;
                case static::AttributeValueSingleQuotedState:
                    if ($char === '\'') {
                        $this->_Token->setSingleQuoted();
                        $this->_Token->endAttributeValue($source->numberOfCharactersConsumed());
                        $this->_HTML_ADVANCE_TO(static::AfterAttributeValueQuotedState);
                    } elseif ($char === "&") {
                        $this->_additionalAllowedCharacter = '\'';
                        $this->_HTML_ADVANCE_TO(static::CharacterReferenceInAttributeValueState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->endAttributeValue($source->numberOfCharactersConsumed());
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_Token->appendToAttributeValue($char);
                        $this->_HTML_ADVANCE_TO(static::AttributeValueSingleQuotedState);
                    }
                    break;
                case static::AttributeValueUnquotedState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_Token->endAttributeValue($source->numberOfCharactersConsumed());
                        $this->_HTML_ADVANCE_TO(static::BeforeAttributeNameState);
                    } elseif ($char === "&") {
                        $this->_additionalAllowedCharacter = ">";
                        $this->_HTML_ADVANCE_TO(static::CharacterReferenceInAttributeValueState);
                    } elseif ($char === ">") {
                        $this->_Token->endAttributeValue($source->numberOfCharactersConsumed());
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->endAttributeValue($source->numberOfCharactersConsumed());
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        if ($char === '"' || $char === '\'' || $char === "<" || $char === "=" || $char === "`") {
                            $this->_parseError();
                        }
                        $this->_Token->appendToAttributeValue($char);
                        $this->_HTML_ADVANCE_TO(static::AttributeValueUnquotedState);
                    }
                    break;
                case static::CharacterReferenceInAttributeValueState:
                    $this->_Token->appendToAttributeValue("&");
                    if ($this->_additionalAllowedCharacter === '"') {
                        $this->_HTML_SWITCH_TO(static::AttributeValueDoubleQuotedState);
                    } elseif ($this->_additionalAllowedCharacter === '\'') {
                        $this->_HTML_SWITCH_TO(static::AttributeValueSingleQuotedState);
                    } elseif ($this->_additionalAllowedCharacter === ">") {
                        $this->_HTML_SWITCH_TO(static::AttributeValueUnquotedState);
                    } else {
                    }
                    break;
                case static::AfterAttributeValueQuotedState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeAttributeNameState);
                    } elseif ($char === "/") {
                        $this->_HTML_ADVANCE_TO(static::SelfClosingStartTagState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::BeforeAttributeNameState);
                    }
                    break;
                case static::SelfClosingStartTagState:
                    if ($char === ">") {
                        $this->_Token->setSelfClosing();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::BeforeAttributeNameState);
                    }
                    break;
                case static::BogusCommentState:
                    $this->_Token->beginComment();
                    $this->_HTML_RECONSUME_IN(static::ContinueBogusCommentState);
                    break;
                case static::ContinueBogusCommentState:
                    if ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToComment($char);
                        $this->_HTML_ADVANCE_TO(static::ContinueBogusCommentState);
                    }
                    break;
                case static::MarkupDeclarationOpenState:
                    $dashDashString = "--";
                    $doctypeString = "doctype";
                    $cdataString = "[CDATA[";
                    if ($char === "-") {
                        $result = $source->lookAhead($dashDashString);
                        if ($result === HtmlString::DidMatch) {
                            $this->addState();
                            $this->_SegmentedString->read(strlen("--"));
                            $this->_Token->beginComment();
                            $this->_HTML_SWITCH_TO(static::CommentStartState);
                            break;
                        } elseif ($result === HtmlString::NotEnoughCharacters) {
                            $this->addState();
                            return $this->_haveBufferedCharacterToken();
                        }
                    } elseif ($char === "D" || $char === "d") {
                        $result = $this->_SegmentedString->lookAheadIgnoringCase($doctypeString);
                        if ($result === HtmlString::DidMatch) {
                            $this->addState();
                            $this->_SegmentedString->read(strlen($doctypeString));
                            $this->_HTML_SWITCH_TO(static::DOCTYPEState);
                            break;
                        } elseif ($result === HtmlString::NotEnoughCharacters) {
                            $this->addState();
                            return $this->_haveBufferedCharacterToken();
                        }
                    } elseif ($char === "[" && $this->_shouldAllowCDATA()) {
                        $result = $source->lookAhead($cdataString);
                        if ($result === HtmlString::DidMatch) {
                            $this->addState();
                            $this->_SegmentedString->read(strlen($cdataString));
                            $this->_HTML_SWITCH_TO(static::CDATASectionState);
                            break;
                        } elseif ($result === HtmlString::NotEnoughCharacters) {
                            $this->addState();
                            return $this->_haveBufferedCharacterToken();
                        }
                    }
                    $this->_parseError();
                    $this->_HTML_RECONSUME_IN(static::BogusCommentState);
                    break;
                case static::CommentStartState:
                    if ($char === "-") {
                        $this->_HTML_ADVANCE_TO(static::CommentStartDashState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToComment($char);
                        $this->_HTML_ADVANCE_TO(static::CommentState);
                    }
                    break;
                case static::CommentStartDashState:
                    if ($char === "-") {
                        $this->_HTML_ADVANCE_TO(static::CommentEndState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment($char);
                        $this->_HTML_ADVANCE_TO(static::CommentState);
                    }
                    break;
                case static::CommentState:
                    if ($char === "-") {
                        $this->_HTML_ADVANCE_TO(static::CommentEndDashState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToComment($char);
                        $this->_HTML_ADVANCE_TO(static::CommentState);
                    }
                    break;
                case static::CommentEndDashState:
                    if ($char === "-") {
                        $this->_HTML_ADVANCE_TO(static::CommentEndState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment($char);
                        $this->_HTML_ADVANCE_TO(static::CommentState);
                    }
                    break;
                case static::CommentEndState:
                    if ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === "!") {
                        $this->_parseError();
                        $this->_HTML_ADVANCE_TO(static::CommentEndBangState);
                    } elseif ($char === "-") {
                        $this->_parseError();
                        $this->_Token->appendToComment("-");
                        $this->_HTML_ADVANCE_TO(static::CommentEndState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError(true);
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment($char);
                        $this->_HTML_ADVANCE_TO(static::CommentState);
                    }
                    break;
                case static::CommentEndBangState:
                    if ($char === "-") {
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment("!");
                        $this->_HTML_ADVANCE_TO(static::CommentEndDashState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError(true);
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment("-");
                        $this->_Token->appendToComment("!");
                        $this->_Token->appendToComment($char);
                        $this->_HTML_ADVANCE_TO(static::CommentState);
                    }
                    break;
                case static::DOCTYPEState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeDOCTYPENameState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->beginDOCTYPE();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_HTML_RECONSUME_IN(static::BeforeDOCTYPENameState);
                    }
                    break;
                case static::BeforeDOCTYPENameState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeDOCTYPENameState);
                    } elseif (ctype_upper($char)) {
                        $this->_Token->beginDOCTYPE(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::DOCTYPENameState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->beginDOCTYPE();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError(true);
                        $this->_Token->beginDOCTYPE();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->beginDOCTYPE($char);
                        $this->_HTML_ADVANCE_TO(static::DOCTYPENameState);
                    }
                    break;
                case static::DOCTYPENameState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::AfterDOCTYPENameState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif (ctype_upper($char)) {
                        $this->_Token->appendToName(strtolower($char));
                        $this->_HTML_ADVANCE_TO(static::DOCTYPENameState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError(true);
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToName($char);
                        $this->_HTML_ADVANCE_TO(static::DOCTYPENameState);
                    }
                    break;
                case static::AfterDOCTYPENameState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::AfterDOCTYPENameState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError(true);
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $publicString = "public";
                        $systemString = "system";
                        if ($char === "P" || $char === "p") {
                            $result = $source->lookAheadIgnoringCase($publicString);
                            if ($result === HtmlString::DidMatch) {
                                $this->addState();
                                $this->_HTML_SWITCH_TO(static::AfterDOCTYPEPublicKeywordState);
                                $this->_SegmentedString->read(strlen($publicString));
                                break;
                            }
                        } elseif ($char === "S" || $char === "s") {
                            $result = $source->lookAheadIgnoringCase($systemString);
                            if ($result === HtmlString::DidMatch) {
                                $this->addState();
                                $this->_HTML_SWITCH_TO(static::AfterDOCTYPESystemKeywordState);
                                $this->_SegmentedString->read(strlen($systemString));
                                break;
                            }
                        }
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::AfterDOCTYPEPublicKeywordState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeDOCTYPEPublicIdentifierState);
                    } elseif ($char === '"') {
                        $this->_parseError();
                        $this->_Token->setPublicIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPEPublicIdentifierDoubleQuotedState);
                    } elseif ($char === '\'') {
                        $this->_parseError();
                        $this->_Token->setPublicIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPEPublicIdentifierSingleQuotedState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError(true);
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::BeforeDOCTYPEPublicIdentifierState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeDOCTYPEPublicIdentifierState);
                    } elseif ($char === '"') {
                        $this->_Token->setPublicIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPEPublicIdentifierDoubleQuotedState);
                    } elseif ($char === '\'') {
                        $this->_Token->setPublicIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPEPublicIdentifierSingleQuotedState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError(true);
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::DOCTYPEPublicIdentifierDoubleQuotedState:
                    if ($char === '"') {
                        $this->_HTML_ADVANCE_TO(static::AfterDOCTYPEPublicIdentifierState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToPublicIdentifier($char);
                        $this->_HTML_ADVANCE_TO(static::DOCTYPEPublicIdentifierDoubleQuotedState);
                    }
                    break;
                case static::DOCTYPEPublicIdentifierSingleQuotedState:
                    if ($char === '\'') {
                        $this->_HTML_ADVANCE_TO(static::AfterDOCTYPEPublicIdentifierState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToPublicIdentifier($char);
                        $this->_HTML_ADVANCE_TO(static::DOCTYPEPublicIdentifierSingleQuotedState);
                    }
                    break;
                case static::AfterDOCTYPEPublicIdentifierState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BetweenDOCTYPEPublicAndSystemIdentifiersState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === '"') {
                        $this->_parseError();
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierDoubleQuotedState);
                    } elseif ($char === '\'') {
                        $this->_parseError();
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierSingleQuotedState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::BetweenDOCTYPEPublicAndSystemIdentifiersState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BetweenDOCTYPEPublicAndSystemIdentifiersState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === '"') {
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierDoubleQuotedState);
                    } elseif ($char === '\'') {
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierSingleQuotedState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::AfterDOCTYPESystemKeywordState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeDOCTYPESystemIdentifierState);
                    } elseif ($char === '"') {
                        $this->_parseError();
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierDoubleQuotedState);
                    } elseif ($char === '\'') {
                        $this->_parseError();
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierSingleQuotedState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::BeforeDOCTYPESystemIdentifierState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::BeforeDOCTYPESystemIdentifierState);
                        break;
                    }
                    if ($char === '"') {
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierDoubleQuotedState);
                    } elseif ($char === '\'') {
                        $this->_Token->setSystemIdentifierToEmptyString();
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierSingleQuotedState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::DOCTYPESystemIdentifierDoubleQuotedState:
                    if ($char === '"') {
                        $this->_HTML_ADVANCE_TO(static::AfterDOCTYPESystemIdentifierState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToSystemIdentifier($char);
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierDoubleQuotedState);
                    }
                    break;
                case static::DOCTYPESystemIdentifierSingleQuotedState:
                    if ($char === '\'') {
                        $this->_HTML_ADVANCE_TO(static::AfterDOCTYPESystemIdentifierState);
                    } elseif ($char === ">") {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_Token->appendToSystemIdentifier($char);
                        $this->_HTML_ADVANCE_TO(static::DOCTYPESystemIdentifierSingleQuotedState);
                    }
                    break;
                case static::AfterDOCTYPESystemIdentifierState:
                    if ($this->_isTokenizerWhitespace($char)) {
                        $this->_HTML_ADVANCE_TO(static::AfterDOCTYPESystemIdentifierState);
                    } elseif ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_parseError();
                        $this->_Token->setForceQuirks();
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    } else {
                        $this->_parseError();
                        $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    }
                    break;
                case static::BogusDOCTYPEState:
                    if ($char === ">") {
                        return $this->_emitAndResumeIn();
                    } elseif ($char === static::kEndOfFileMarker) {
                        return $this->_emitAndReconsumeIn($source, HtmlTokenizer::DataState);
                    }
                    $this->_HTML_ADVANCE_TO(static::BogusDOCTYPEState);
                    break;
                case static::CDATASectionState:
                    if ($char === "]") {
                        $this->_HTML_ADVANCE_TO(static::CDATASectionRightSquareBracketState);
                    } elseif ($char === static::kEndOfFileMarker) {
                        $this->_HTML_RECONSUME_IN(static::DataState);
                    } else {
                        $this->_bufferCharacter($char);
                        $this->_HTML_ADVANCE_TO(static::CDATASectionState);
                    }
                    break;
                case static::CDATASectionRightSquareBracketState:
                    if ($char === "]") {
                        $this->_HTML_ADVANCE_TO(static::CDATASectionDoubleRightSquareBracketState);
                    } else {
                        $this->_bufferCharacter("]");
                        $this->_HTML_RECONSUME_IN(static::CDATASectionState);
                    }
                    break;
                case static::CDATASectionDoubleRightSquareBracketState:
                    if ($char === ">") {
                        $this->_HTML_ADVANCE_TO(static::DataState);
                    } else {
                        $this->_bufferCharacter("]");
                        $this->_bufferCharacter("]");
                        $this->_HTML_RECONSUME_IN(static::CDATASectionState);
                    }
                    break;
                default:
                    break 2;
            }
        }
        return false;
    }

    protected function _HTML_ADVANCE_TO($state)
    {
        $this->addState();
        $this->_state = $state;
        $this->_SegmentedString->advance();
    }

    protected function addState()
    {
        if (!$this->_debug) {
            return;
        }
        $this->_buffer[$this->_SegmentedString->tell() - $this->_startPos] = $this->_state;
    }

    protected function _emitEndOfFile()
    {
        if ($this->_haveBufferedCharacterToken()) {
            return true;
        }
        $this->_state = HtmlTokenizer::DataState;
        $this->_Token->makeEndOfFile();
        return true;
    }

    #[Pure] protected function _haveBufferedCharacterToken()
    {
        return $this->_Token->getType() === HtmlToken::Character;
    }

    protected function _bufferCharacter($char)
    {
        $this->_Token->ensureIsCharacterToken();
        $this->_Token->appendToCharacter($char);
    }

    protected function _HTML_SWITCH_TO($state)
    {
        $this->_state = $state;
    }

    protected function _parseError()
    {
        $this->_Token->parseError();
        $this->_notImplemented();
    }

    protected function _notImplemented()
    {
    }

    protected function _HTML_RECONSUME_IN($state)
    {
        $this->_state = $state;
    }

    protected function _isTokenizerWhitespace($char)
    {
        return $char === " " || $char === "\x0A" || $char === "\x09" || $char === "\x0C";
    }

    protected function _emitAndResumeIn()
    {
        $this->addState();
        $this->_saveEndTagNameIfNeeded();
        $this->_state = static::DataState;
        $this->_SegmentedString->advance();
        return true;
    }

    protected function _saveEndTagNameIfNeeded()
    {
        if ($this->_Token->getType() === HtmlToken::StartTag) {
            $this->_appropriateEndTagName = $this->_Token->getName();
        }
    }

    protected function _isAppropriateEndTag()
    {
        return $this->_bufferedEndTagName === $this->_appropriateEndTagName;
    }

    protected function _FLUSH_AND_ADVANCE_TO($state)
    {
        $this->addState();
        $this->_state = $state;
        if ($this->_flushBufferedEndTag($this->_SegmentedString)) {
            return true;
        }
        return null;
    }

    protected function _flushBufferedEndTag(HtmlString $source)
    {
        $source->advance();
        if ($this->_Token->getType() === HtmlToken::Character) {
            return true;
        }
        $this->_Token->beginEndTag($this->_bufferedEndTagName);
        $this->_bufferedEndTagName = "";
        $this->_appropriateEndTagName = "";
        $this->_temporaryBuffer = "";
        return false;
    }

    protected function _flushEmitAndResumeIn(HtmlString $source, $state)
    {
        $this->_state = $state;
        $this->_flushBufferedEndTag($source);
        return true;
    }

    #[Pure] protected function _temporaryBufferIs($expectedString)
    {
        return $this->_vectorEqualsString($this->_temporaryBuffer, $expectedString);
    }

    protected function _vectorEqualsString($vector, $string)
    {
        return $vector === $string;
    }

    protected function _emitAndReconsumeIn(HtmlString $source, $state)
    {
        $this->_saveEndTagNameIfNeeded();
        $this->_state = $state;
        return true;
    }

    protected function _shouldAllowCDATA()
    {
        return true;
    }

    protected function _compactBuffer($startPos, $endPos, $type)
    {
        $compactBuffer = [];
        $before = static::kEndOfFileMarker;
        $html = $this->_SegmentedString->substr($startPos, $endPos - $startPos);
        foreach ($this->_buffer as $i => $state) {
            if ($before !== $state) {
                $before = $compactBuffer[$i] = $state;
            }
        }
        switch ($type) {
            case HtmlToken::Uninitialized:
            case HtmlToken::EndOfFile:
            case HtmlToken::Character:
            case HtmlToken::Comment:
                $this->_Token->setData($html);
                break;
        }
        if ($this->_debug) {
            $this->_Token->setHtmlOrigin($html);
            $this->_Token->setState($compactBuffer);
        } elseif ($type === HtmlToken::DOCTYPE) {
            $this->_Token->setHtmlOrigin($html);
        }
        $this->_Token->clean();
    }

    protected function _updateStateFor($tagName)
    {
        if ($tagName === HtmlNames::textareaTag || $tagName === HtmlNames::titleTag) {
            $this->_state = static::RCDATAState;
        } elseif ($tagName === HtmlNames::plaintextTag) {
            $this->_state = static::PLAINTEXTState;
        } elseif ($tagName === HtmlNames::scriptTag) {
            $this->_state = static::ScriptDataState;
        } elseif ($tagName === HtmlNames::styleTag || $tagName === HtmlNames::iframeTag || $tagName === HtmlNames::xmpTag || ($tagName === HtmlNames::noembedTag && $this->_pluginsEnabled) || $tagName === HtmlNames::noframesTag || ($tagName === HtmlNames::noscriptTag && $this->_scriptEnabled)) {
            $this->_state = static::RAWTEXTState;
        }
    }

    public function getTokensAsArray()
    {
        $result = [];
        foreach ($this->_tokens as $token) {
            $result[] = $token->toArray();
        }
        return $result;
    }
}

