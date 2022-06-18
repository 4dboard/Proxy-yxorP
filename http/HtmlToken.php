<?php namespace yxorP\Http;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class HtmlToken
{
    public const Uninitialized = 'Uninitialized';
    public const DOCTYPE = 'DOCTYPE';
    public const StartTag = 'StartTag';
    public const EndTag = 'EndTag';
    public const Comment = 'Comment';
    public const Character = 'Character';
    public const EndOfFile = 'EndOfFile';
    public const QuirksMode = 'QuirksMode';
    public const LimitedQuirksMode = 'LimitedQuirksMode';
    public const NoQuirksMode = 'NoQuirksMode';
    public const DoubleQuoted = '"';
    public const SingleQuoted = '\'';
    protected $_type;
    protected $_data = '';
    protected $_selfClosing = false;
    protected $_currentAttribute = 0;
    protected $_attributes = array();
    protected $_parseError = false;
    protected $_doctypeData = array('hasPublicIdentifier' => false, 'hasSystemIdentifier' => false, 'publicIdentifier' => '', 'systemIdentifier' => '', 'forceQuirks' => false,);
    protected $_html = '';
    protected $_state = array();

    public function __construct()
    {
        $this->_type = static::Uninitialized;
    }

    public function __toString()
    {
        return $this->_data;
    }

    #[ArrayShape(['type' => "string", 'data' => "string", 'selfClosing' => "bool", 'attributes' => "array", 'parseError' => "bool", 'html' => "string", 'state' => "array", 'doctypeData' => "array"])] public function toArray()
    {
        $data = array('type' => $this->_type, 'data' => $this->_data, 'selfClosing' => $this->_selfClosing, 'attributes' => $this->_attributes, 'parseError' => $this->_parseError, 'html' => $this->_html, 'state' => $this->_state,);
        if ($this->getType() === static::DOCTYPE) {
            $doctypeData = $this->_doctypeData;
            if ($doctypeData['forceQuirks']) {
                $mode = static::QuirksMode;
            } else {
                $mode = $this->setCompatibilityModeFromDoctype($this->_data, $doctypeData['publicIdentifier'], $doctypeData['systemIdentifier']);
            }
            $doctypeData['mode'] = $mode;
            $data['doctypeData'] = $doctypeData;
        }
        return $data;
    }

    public function getType()
    {
        return $this->_type;
    }

    public function setType($type)
    {
        $this->_type = $type;
    }

    protected function setCompatibilityModeFromDoctype($name, $publicId, $systemId)
    {
        if ($name !== 'html') {
            return static::QuirksMode;
        }
        $startsWithPublicId = "/^(?:-\/\/(?:S(?:oftQuad(?: Software\/\/DTD HoTMetaL PRO 6\.0::19990601|\/\/DTD HoTMetaL PRO 4\.0::19971010)::extensions to HTML 4\.0|un Microsystems Corp\.\/\/DTD HotJava(?: Strict)? HTML|Q\/\/DTD HTML 2\.0 HoTMetaL \+ extensions|pyglass\/\/DTD HTML 2\.0 Extended)|W(?:3(?:C\/\/DTD (?:HTML (?:3(?:\.2(?: (?:Draft|Final)|S Draft)?| 1995-03-24)|Experimental (?:19960712|970421)|4\.0 (?:Transitional|Frameset))|W3 HTML)|O\/\/DTD W3 HTML 3\.0)|ebTechs\/\/DTD Mozilla HTML(?: 2\.0)?)|IETF\/\/DTD HTML(?: (?:2\.(?:0(?: (?:Strict(?: Level [12])?|Level [12]))?|1E)|3(?:\.(?:2(?: Final)?|0))?|Strict(?: Level [0123])?|Level [0123]))?|M(?:icrosoft\/\/DTD Internet Explorer [23]\.0 (?:HTML(?: Strict)?|Tables)|etrius\/\/DTD Metrius Presentational)|O'Reilly and Associates\/\/DTD HTML (?:Extend(?:ed Relax)?ed 1|2)\.0|A(?:dvaSoft Ltd|S)\/\/DTD HTML 3\.0 asWedit \+ extensions|Netscape Comm\. Corp\.\/\/DTD(?: Strict)? HTML)|\+\/\/Silmaril\/\/dtd html Pro v0r11 19970101)\/\//";
        $ignoringCasePublicId = '/^(?:-\/(?:\/W3O\/\/DTD W3 HTML Strict 3\.0\/\/EN\/\/|W3C\/DTD HTML 4\.0 Transitional\/EN)|HTML)$/i';
        $ignoringCaseSystemId = '/^http:\/\/www\.ibm\.com\/data\/dtd\/v11\/ibmxhtml1-transitional\.dtd$/i';
        $startsWithPublicId2 = '/^-\/\/W3C\/\/DTD HTML 4\.01 (?:Transitional|Frameset)\/\//';
        if (preg_match($startsWithPublicId, $publicId) || preg_match($ignoringCasePublicId, $publicId) || preg_match($ignoringCaseSystemId, $systemId)) {
            return static::QuirksMode;
        }
        if ($systemId === '' && preg_match($startsWithPublicId2, $publicId)) {
            return static::QuirksMode;
        }
        $pattern1 = '/^-\/\/W3C\/\/DTD XHTML 1\.0 (?:Transitional|Frameset)\/\//';
        $pattern2 = ' /^-\/\/W3C\/\/DTD HTML 4\.01 (?:Transitional|Frameset)\/\//';
        if (preg_match($pattern1, $publicId) || ($systemId !== '' && preg_match($pattern2, $publicId))) {
            return static::LimitedQuirksMode;
        }
        return static::NoQuirksMode;
    }

    public function clean()
    {
        unset($this->_currentAttribute);
    }

    public function getHtmlOrigin()
    {
        return $this->_html;
    }

    public function setHtmlOrigin($html)
    {
        $this->_html = $html;
    }

    public function getState()
    {
        return $this->_state;
    }

    public function setState($states)
    {
        $this->_state = $states;
    }

    #[Pure] public function getTagName()
    {
        $type = $this->getType();
        if ($type !== static::StartTag && $type !== static::EndTag) {
            return false;
        }
        return $this->getName();
    }

    public function getName()
    {
        return $this->_data;
    }

    public function getData()
    {
        return $this->_data;
    }

    public function setData($data)
    {
        $this->_data = $data;
    }

    public function getAttributes()
    {
        return $this->_attributes;
    }

    public function setAttributes($attributes)
    {
        $this->_attributes = $attributes;
    }

    public function getDoctypeData()
    {
        return $this->_doctypeData;
    }

    public function hasSelfClosing()
    {
        return $this->_selfClosing;
    }

    public function hasParseError()
    {
        return $this->_parseError;
    }

    public function parseError()
    {
        $this->_parseError = true;
    }

    public function clear()
    {
        $this->_type = static::Uninitialized;
        $this->_data = '';
    }

    public function ensureIsCharacterToken()
    {
        $this->_type = static::Character;
    }

    public function makeEndOfFile()
    {
        $this->_type = static::EndOfFile;
    }

    public function appendToCharacter($character)
    {
        $this->_data .= $character;
    }

    public function beginComment()
    {
        $this->_type = static::Comment;
    }

    public function appendToComment($character)
    {
        $this->_data .= $character;
    }

    public function appendToName($character)
    {
        $this->_data .= $character;
    }

    public function setDoubleQuoted()
    {
        $this->_currentAttribute['quoted'] = static::DoubleQuoted;
    }

    public function setSingleQuoted()
    {
        $this->_currentAttribute['quoted'] = static::SingleQuoted;
    }

    public function selfClosing()
    {
        return $this->_selfClosing;
    }

    public function setSelfClosing()
    {
        $this->_selfClosing = true;
    }

    public function beginStartTag($character)
    {
        $this->setType(static::StartTag);
        $this->_selfClosing = false;
        $this->_currentAttribute = 0;
        $this->_attributes = array();
        $this->_data .= $character;
    }

    public function beginEndTag($character)
    {
        $this->setType(static::EndTag);
        $this->_selfClosing = false;
        $this->_currentAttribute = 0;
        $this->_attributes = array();
        $this->_data .= $character;
    }

    public function addNewAttribute()
    {
        $_default = array('name' => '', 'value' => '', 'quoted' => false,);
        unset($this->_currentAttribute);
        $this->_currentAttribute = $_default;
        $this->_attributes[] =& $this->_currentAttribute;
    }

    public function beginAttributeName($offset)
    {
    }

    public function endAttributeName($offset)
    {
    }

    public function beginAttributeValue($offset)
    {
    }

    public function endAttributeValue($offset)
    {
    }

    public function appendToAttributeName($character)
    {
        $this->_currentAttribute['name'] .= $character;
    }

    public function appendToAttributeValue($character)
    {
        $this->_currentAttribute['value'] .= $character;
    }

    public function forceQuirks()
    {
        return $this->_doctypeData['forceQuirks'];
    }

    public function setForceQuirks()
    {
        $this->_doctypeData['forceQuirks'] = true;
    }

    public function beginDOCTYPE($character = null)
    {
        $this->_beginDOCTYPE();
        if ($character) {
            $this->_data .= $character;
        }
    }

    protected function _beginDOCTYPE()
    {
        $this->_type = static::DOCTYPE;
    }

    public function setPublicIdentifierToEmptyString()
    {
        $this->_doctypeData['hasPublicIdentifier'] = true;
        $this->_doctypeData['publicIdentifier'] = '';
    }

    public function setSystemIdentifierToEmptyString()
    {
        $this->_doctypeData['hasSystemIdentifier'] = true;
        $this->_doctypeData['systemIdentifier'] = '';
    }

    public function appendToPublicIdentifier($character)
    {
        $this->_doctypeData['publicIdentifier'] .= $character;
    }

    public function appendToSystemIdentifier($character)
    {
        $this->_doctypeData['systemIdentifier'] .= $character;
    }
}

