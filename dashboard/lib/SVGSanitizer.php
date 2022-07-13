<?php class SVGSanitizer
{
    const SCRIPT_REGEX = '/(?:\w+script|data):/xi';
    protected $xmlDocument;
    protected $allowedTags;
    protected $allowedAttrs;
    protected $xmlLoaderValue;
    protected $minifyXML = false;
    protected $removeRemoteReferences = false;
    protected $removeXMLTag = false;
    protected $xmlOptions = LIBXML_NOEMPTYTAG;

    function __construct()
    {
        $this->allowedAttrs = ['accept', 'action', 'align', 'alt', 'autocomplete', 'background', 'bgcolor', 'border', 'cellpadding', 'cellspacing', 'checked', 'cite', 'class', 'clear', 'color', 'cols', 'colspan', 'coords', 'crossorigin', 'datetime', 'default', 'dir', 'disabled', 'download', 'enctype', 'face', 'for', 'headers', 'height', 'hidden', 'high', 'href', 'hreflang', 'id', 'integrity', 'ismap', 'label', 'lang', 'list', 'loop', 'low', 'max', 'maxlength', 'media', 'method', 'min', 'multiple', 'name', 'noshade', 'novalidate', 'nowrap', 'open', 'optimum', 'pattern', 'placeholder', 'poster', 'preload', 'pubdate', 'radiogroup', 'readonly', 'rel', 'required', 'rev', 'reversed', 'role', 'rows', 'rowspan', 'spellcheck', 'scope', 'selected', 'shape', 'size', 'sizes', 'span', 'srclang', 'start', 'src', 'srcset', 'step', 'style', 'summary', 'tabindex', 'title', 'type', 'usemap', 'valign', 'value', 'width', 'xmlns', 'accent-height', 'accumulate', 'additivive', 'alignment-baseline', 'ascent', 'attributename', 'attributetype', 'azimuth', 'basefrequency', 'baseline-shift', 'begin', 'bias', 'by', 'class', 'clip', 'clip-path', 'clip-rule', 'color', 'color-interpolation', 'color-interpolation-filters', 'color-profile', 'color-rendering', 'cx', 'cy', 'd', 'dx', 'dy', 'diffuseconstant', 'direction', 'display', 'divisor', 'dur', 'edgemode', 'elevation', 'end', 'fill', 'fill-opacity', 'fill-rule', 'filter', 'filterUnits', 'flood-color', 'flood-opacity', 'font-family', 'font-size', 'font-size-adjust', 'font-stretch', 'font-style', 'font-variant', 'font-weight', 'fx', 'fy', 'g1', 'g2', 'glyph-name', 'glyphref', 'gradientunits', 'gradienttransform', 'height', 'href', 'id', 'image-rendering', 'in', 'in2', 'k', 'k1', 'k2', 'k3', 'k4', 'kerning', 'keypoints', 'keysplines', 'keytimes', 'lang', 'lengthadjust', 'letter-spacing', 'kernelmatrix', 'kernelunitlength', 'lighting-color', 'local', 'marker-end', 'marker-mid', 'marker-start', 'markerheight', 'markerunits', 'markerwidth', 'maskcontentunits', 'maskunits', 'max', 'mask', 'mask-type', 'media', 'method', 'mode', 'min', 'name', 'numoctaves', 'offset', 'operator', 'opacity', 'order', 'orient', 'orientation', 'origin', 'overflow', 'paint-order', 'path', 'pathlength', 'patterncontentunits', 'patterntransform', 'patternunits', 'points', 'preservealpha', 'preserveaspectratio', 'r', 'rx', 'ry', 'radius', 'refx', 'refy', 'repeatcount', 'repeatdur', 'restart', 'result', 'rotate', 'scale', 'seed', 'shape-rendering', 'specularconstant', 'specularexponent', 'spreadmethod', 'stddeviation', 'stitchtiles', 'stop-color', 'stop-opacity', 'stroke-dasharray', 'stroke-dashoffset', 'stroke-linecap', 'stroke-linejoin', 'stroke-miterlimit', 'stroke-opacity', 'stroke', 'stroke-width', 'style', 'surfacescale', 'tabindex', 'targetx', 'targety', 'transform', 'text-anchor', 'text-decoration', 'text-rendering', 'textlength', 'type', 'u1', 'u2', 'unicode', 'values', 'viewbox', 'visibility', 'vert-adv-y', 'vert-origin-x', 'vert-origin-y', 'width', 'word-spacing', 'wrap', 'writing-mode', 'xchannelselector', 'ychannelselector', 'x', 'x1', 'x2', 'xmlns', 'y', 'y1', 'y2', 'z', 'zoomandpan', 'accent', 'accentunder', 'align', 'bevelled', 'close', 'columnsalign', 'columnlines', 'columnspan', 'denomalign', 'depth', 'dir', 'display', 'displaystyle', 'fence', 'frame', 'height', 'href', 'id', 'largeop', 'length', 'linethickness', 'lspace', 'lquote', 'mathbackground', 'mathcolor', 'mathsize', 'mathvariant', 'maxsize', 'minsize', 'movablelimits', 'notation', 'numalign', 'open', 'rowalign', 'rowlines', 'rowspacing', 'rowspan', 'rspace', 'rquote', 'scriptlevel', 'scriptminsize', 'scriptsizemultiplier', 'selection', 'separator', 'separators', 'slope', 'stretchy', 'subscriptshift', 'supscriptshift', 'symmetric', 'voffset', 'width', 'xmlns', 'xlink:href', 'xml:id', 'xlink:title', 'xml:space', 'xmlns:xlink',];
        $this->allowedTags = ['a', 'abbr', 'acronym', 'address', 'area', 'article', 'aside', 'audio', 'b', 'bdi', 'bdo', 'big', 'blink', 'blockquote', 'body', 'br', 'button', 'canvas', 'caption', 'center', 'cite', 'code', 'col', 'colgroup', 'content', 'data', 'datalist', 'dd', 'decorator', 'del', 'details', 'dfn', 'dir', 'div', 'dl', 'dt', 'element', 'em', 'fieldset', 'figcaption', 'figure', 'font', 'footer', 'form', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hgroup', 'hr', 'html', 'i', 'image', 'img', 'input', 'ins', 'kbd', 'label', 'legend', 'li', 'main', 'map', 'mark', 'marquee', 'menu', 'menuitem', 'meter', 'nav', 'nobr', 'ol', 'optgroup', 'option', 'output', 'p', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'section', 'select', 'shadow', 'small', 'source', 'spacer', 'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'template', 'textarea', 'tfoot', 'th', 'thead', 'time', 'tr', 'track', 'tt', 'u', 'ul', 'var', 'video', 'wbr', 'svg', 'altglyph', 'altglyphdef', 'altglyphitem', 'animatecolor', 'animatemotion', 'animatetransform', 'circle', 'clippath', 'defs', 'desc', 'ellipse', 'filter', 'font', 'g', 'glyph', 'glyphref', 'hkern', 'image', 'line', 'lineargradient', 'marker', 'mask', 'metadata', 'mpath', 'path', 'pattern', 'polygon', 'polyline', 'radialgradient', 'rect', 'stop', 'switch', 'symbol', 'text', 'textpath', 'title', 'tref', 'tspan', 'use', 'view', 'vkern', 'feBlend', 'feColorMatrix', 'feComponentTransfer', 'feComposite', 'feConvolveMatrix', 'feDiffuseLighting', 'feDisplacementMap', 'feDistantLight', 'feFlood', 'feFuncA', 'feFuncB', 'feFuncG', 'feFuncR', 'feGaussianBlur', 'feMerge', 'feMergeNode', 'feMorphology', 'feOffset', 'fePointLight', 'feSpecularLighting', 'feSpotLight', 'feTile', 'feTurbulence', 'math', 'menclose', 'merror', 'mfenced', 'mfrac', 'mglyph', 'mi', 'mlabeledtr', 'mmuliscripts', 'mn', 'mo', 'mover', 'mpadded', 'mphantom', 'mroot', 'mrow', 'ms', 'mpspace', 'msqrt', 'mystyle', 'msub', 'msup', 'msubsup', 'mtable', 'mtd', 'mtext', 'mtr', 'munder', 'munderover', '#text'];
    }

    public static function clean($svgText)
    {
        $sanitizer = new static();
        return $sanitizer->sanitize($svgText);
    }

    public function sanitize($dirty)
    {
        if (empty($dirty)) {
            return '';
        }
        $dirty = preg_replace('/<\?(=|php)(.+?)\?>/i', '', $dirty);
        $this->resetInternal();
        $this->setUpBefore();
        $loaded = $this->xmlDocument->loadXML($dirty);
        if (!$loaded) {
            $this->resetAfter();
            return false;
        }
        $this->removeDoctype();
        $allElements = $this->xmlDocument->getElementsByTagName("*");
        $this->startClean($allElements);
        if ($this->removeXMLTag) {
            $clean = $this->xmlDocument->saveXML($this->xmlDocument->documentElement, $this->xmlOptions);
        } else {
            $clean = $this->xmlDocument->saveXML($this->xmlDocument, $this->xmlOptions);
        }
        $this->resetAfter();
        if ($this->minifyXML) {
            $clean = preg_replace('/\s+/', ' ', $clean);
        }
        return $clean;
    }

    protected function resetInternal()
    {
        $this->xmlDocument = new DOMDocument();
        $this->xmlDocument->preserveWhiteSpace = false;
        $this->xmlDocument->strictErrorChecking = false;
        $this->xmlDocument->formatOutput = !$this->minifyXML;
    }

    protected function setUpBefore()
    {
        if (!version_compare(phpversion(), '8.0.0', '>=')) {
            $this->xmlLoaderValue = libxml_disable_entity_loader(true);
        }
        libxml_use_internal_errors(true);
    }

    protected function resetAfter()
    {
        if (!version_compare(phpversion(), '8.0.0', '>=')) {
            libxml_disable_entity_loader($this->xmlLoaderValue);
        }
    }

    protected function removeDoctype()
    {
        foreach ($this->xmlDocument->childNodes as $child) {
            if ($child->nodeType === XML_DOCUMENT_TYPE_NODE) {
                $child->parentNode->removeChild($child);
            }
        }
    }

    protected function startClean(\DOMNodeList $elements)
    {
        for ($i = $elements->length - 1; $i >= 0; $i--) {
            $currentElement = $elements->item($i);
            if (!in_array(strtolower($currentElement->tagName), $this->allowedTags)) {
                $currentElement->parentNode->removeChild($currentElement);
                continue;
            }
            $this->cleanAttributesOnWhitelist($currentElement);
            $this->cleanXlinkHrefs($currentElement);
            $this->cleanHrefs($currentElement);
            if (strtolower($currentElement->tagName) === 'use') {
                if ($this->isUseTagDirty($currentElement)) {
                    $currentElement->parentNode->removeChild($currentElement);
                    continue;
                }
            }
        }
    }

    protected function cleanAttributesOnWhitelist(\DOMElement $element)
    {
        for ($x = $element->attributes->length - 1; $x >= 0; $x--) {
            $attrName = $element->attributes->item($x)->name;
            if (!in_array(strtolower($attrName), $this->allowedAttrs) && !$this->isAriaAttribute(strtolower($attrName)) && !$this->isDataAttribute(strtolower($attrName))) {
                $element->removeAttribute($attrName);
            }
            if ($this->removeRemoteReferences) {
                if (isset($element->attributes->item($x)->value) && $this->hasRemoteReference($element->attributes->item($x)->value)) {
                    $element->removeAttribute($attrName);
                }
            }
        }
    }

    protected function isAriaAttribute($attributeName)
    {
        return strpos($attributeName, 'aria-') === 0;
    }

    protected function isDataAttribute($attributeName)
    {
        return strpos($attributeName, 'data-') === 0;
    }

    protected function hasRemoteReference($value)
    {
        $value = $this->removeNonPrintableCharacters($value);
        $wrapped_in_url = preg_match('~^url\(\s*[\'"]\s*(.*)\s*[\'"]\s*\)$~xi', $value, $match);
        if (!$wrapped_in_url) {
            return false;
        }
        $value = trim($match[1], '\'"');
        return preg_match('~^((https?|ftp|file):)?//~xi', $value);
    }

    protected function removeNonPrintableCharacters($value)
    {
        return trim(preg_replace('/[^ -~]/xu', '', $value));
    }

    protected function cleanXlinkHrefs(\DOMElement $element)
    {
        $xlinks = $element->getAttributeNS('http://www.w3.org/1999/xlink', 'href');
        if (preg_match(self::SCRIPT_REGEX, $xlinks) === 1) {
            if (!in_array(substr($xlinks, 0, 14), array('data:image/png', 'data:image/gif', 'data:image/jpg', 'data:image/jpe', 'data:image/pjp', 'data:image/webp',))) {
                $element->removeAttributeNS('http://www.w3.org/1999/xlink', 'href');
            }
        }
    }

    protected function cleanHrefs(\DOMElement $element)
    {
        $href = $element->getAttribute('href');
        if (preg_match(self::SCRIPT_REGEX, $href) === 1) {
            $element->removeAttribute('href');
        }
    }

    protected function isUseTagDirty(\DOMElement $element)
    {
        $xlinks = $element->getAttributeNS('http://www.w3.org/1999/xlink', 'href');
        if ($xlinks && substr($xlinks, 0, 1) !== '#') {
            return true;
        }
        return false;
    }

    public function getXMLOptions()
    {
        return $this->xmlOptions;
    }

    public function setXMLOptions($xmlOptions)
    {
        $this->xmlOptions = $xmlOptions;
    }

    public function getAllowedTags()
    {
        return $this->allowedTags;
    }

    public function setAllowedTags($allowedTags)
    {
        $this->allowedTags = array_map('strtolower', $allowedTags);
    }

    public function getAllowedAttrs()
    {
        return $this->allowedAttrs;
    }

    public function setAllowedAttrs($allowedAttrs)
    {
        $this->allowedAttrs = array_map('strtolower', $allowedAttrs);
    }

    public function removeRemoteReferences($removeRemoteRefs = false)
    {
        $this->removeRemoteReferences = $removeRemoteRefs;
    }

    public function minify($shouldMinify = false)
    {
        $this->minifyXML = (bool)$shouldMinify;
    }

    public function removeXMLTag($removeXMLTag = false)
    {
        $this->removeXMLTag = (bool)$removeXMLTag;
    }
}