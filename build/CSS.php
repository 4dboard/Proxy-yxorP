<?php namespace yxorP\Build;

use MatthiasMullie\PathConverter\Converter;
use MatthiasMullie\PathConverter\ConverterInterface;
use yxorP\Build\Exceptions\FileImportException;

class CSS extends Minify
{
    protected $maxImportSize = 5;
    protected $importExtensions = array('gif' => 'data:image/gif', 'png' => 'data:image/png', 'jpe' => 'data:image/jpeg', 'jpg' => 'data:image/jpeg', 'jpeg' => 'data:image/jpeg', 'svg' => 'data:image/svg+xml', 'woff' => 'data:application/x-font-woff', 'woff2' => 'data:application/x-font-woff2', 'avif' => 'data:image/avif', 'apng' => 'data:image/apng', 'webp' => 'data:image/webp', 'tif' => 'image/tiff', 'tiff' => 'image/tiff', 'xbm' => 'image/x-xbitmap',);

    protected function combineImports($source, $content, $parents)
    {
        $importRegexes = array('/
            # import statement
            @import

            # whitespace
            \s+

                # open url()
                url\(

                    # (optional) open path enclosure
                    (?P<quotes>["\']?)

                        # fetch path
                        (?P<path>.+?)

                    # (optional) close path enclosure
                    (?P=quotes)

                # close url()
                \)

                # (optional) trailing whitespace
                \s*

                # (optional) media statement(s)
                (?P<media>[^;]*)

                # (optional) trailing whitespace
                \s*

            # (optional) closing semi-colon
            ;?

            /ix', '/

            # import statement
            @import

            # whitespace
            \s+

                # open path enclosure
                (?P<quotes>["\'])

                    # fetch path
                    (?P<path>.+?)

                # close path enclosure
                (?P=quotes)

                # (optional) trailing whitespace
                \s*

                # (optional) media statement(s)
                (?P<media>[^;]*)

                # (optional) trailing whitespace
                \s*

            # (optional) closing semi-colon
            ;?

            /ix',);
        $matches = array();
        foreach ($importRegexes as $importRegex) {
            if (preg_match_all($importRegex, $content, $regexMatches, PREG_SET_ORDER)) {
                $matches = array_merge($matches, $regexMatches);
            }
        }
        $search = array();
        $replace = array();
        foreach ($matches as $match) {
            $importPath = dirname($source) . '/' . $match['path'];
            if (!$this->canImportByPath($match['path']) || !$this->canImportFile($importPath)) {
                continue;
            }
            if (in_array($importPath, $parents)) {
                throw new FileImportException('Failed to import file "' . $importPath . '": circular reference detected.');
            }
            $minifier = new self($importPath);
            $minifier->setMaxImportSize($this->maxImportSize);
            $minifier->setImportExtensions($this->importExtensions);
            $importContent = $minifier->execute($source, $parents);
            if (!empty($match['media'])) {
                $importContent = '@media ' . $match['media'] . '{' . $importContent . '}';
            }
            $search[] = $match[0];
            $replace[] = $importContent;
        }
        return str_replace($search, $replace, $content);
    }

    protected function canImportByPath($path)
    {
        return preg_match('/^(data:|https?:|\\/)/', $path) === 0;
    }

    public function setMaxImportSize($size)
    {
        $this->maxImportSize = $size;
    }

    public function setImportExtensions(array $extensions)
    {
        $this->importExtensions = $extensions;
    }

    public function execute($path = null, $parents = array())
    {
        $content = '';
        foreach ($this->data as $source => $css) {
            $this->extractStrings();
            $this->stripComments();
            $this->extractMath();
            $this->extractCustomProperties();
            $css = $this->replace($css);
            $css = $this->stripWhitespace($css);
            $css = $this->shortenColors($css);
            $css = $this->shortenZeroes($css);
            $css = $this->shortenFontWeights($css);
            $css = $this->stripEmptyTags($css);
            $css = $this->restoreExtractedData($css);
            $source = is_int($source) ? '' : $source;
            $parents = $source ? array_merge($parents, array($source)) : $parents;
            $css = $this->combineImports($source, $css, $parents);
            $css = $this->importFiles($source, $css);
            $converter = $this->getPathConverter($source, $path ?: $source);
            $css = $this->move($converter, $css);
            $content .= $css;
        }
        $content = $this->moveImportsToTop($content);
        return $content;
    }

    protected function stripComments()
    {
        $minifier = $this;
        $callback = function ($match) use ($minifier) {
            $count = count($minifier->extracted);
            $placeholder = '/*' . $count . '*/';
            $minifier->extracted[$placeholder] = $match[0];
            return $placeholder;
        };
        $this->registerPattern('/\n?\/\*(!|.*?@license|.*?@preserve).*?\*\/\n?/s', $callback);
        $this->registerPattern('/\/\*.*?\*\//s', '');
    }

    protected function extractMath()
    {
        $functions = array('calc', 'clamp', 'min', 'max');
        $pattern = '/\b(' . implode('|', $functions) . ')(\(.+?)(?=$|;|})/m';
        $minifier = $this;
        $callback = function ($match) use ($minifier, $pattern, &$callback) {
            $function = $match[1];
            $length = strlen($match[2]);
            $expr = '';
            $opened = 0;
            for ($i = 0; $i < $length; $i++) {
                $char = $match[2][$i];
                $expr .= $char;
                if ($char === '(') {
                    $opened++;
                } elseif ($char === ')' && --$opened === 0) {
                    break;
                }
            }
            $count = count($minifier->extracted);
            $placeholder = 'math(' . $count . ')';
            $minifier->extracted[$placeholder] = $function . '(' . trim(substr($expr, 1, -1)) . ')';
            $rest = str_replace($function . $expr, '', $match[0]);
            $rest = preg_replace_callback($pattern, $callback, $rest);
            return $placeholder . $rest;
        };
        $this->registerPattern($pattern, $callback);
    }

    protected function extractCustomProperties()
    {
        $minifier = $this;
        $this->registerPattern('/(?<=^|[;}])\s*(--[^:;{}"\'\s]+)\s*:([^;{}]+)/m', function ($match) use ($minifier) {
            $placeholder = '--custom-' . count($minifier->extracted) . ':0';
            $minifier->extracted[$placeholder] = $match[1] . ':' . trim($match[2]);
            return $placeholder;
        });
    }

    protected function stripWhitespace($content)
    {
        $content = preg_replace('/^\s*/m', '', $content);
        $content = preg_replace('/\s*$/m', '', $content);
        $content = preg_replace('/\s+/', ' ', $content);
        $content = preg_replace('/\s*([\*$~^|]?+=|[{};,>~]|!important\b)\s*/', '$1', $content);
        $content = preg_replace('/([\[(:>\+])\s+/', '$1', $content);
        $content = preg_replace('/\s+([\]\)>\+])/', '$1', $content);
        $content = preg_replace('/\s+(:)(?![^\}]*\{)/', '$1', $content);
        $pseudos = array('nth-child', 'nth-last-child', 'nth-last-of-type', 'nth-of-type');
        $content = preg_replace('/:(' . implode('|', $pseudos) . ')\(\s*([+-]?)\s*(.+?)\s*([+-]?)\s*(.*?)\s*\)/', ':$1($2$3$4$5)', $content);
        $content = str_replace(';}', '}', $content);
        return trim($content);
    }

    protected function shortenColors($content)
    {
        $content = preg_replace('/(?<=[: ])#([0-9a-z])\\1([0-9a-z])\\2([0-9a-z])\\3(?:([0-9a-z])\\4)?(?=[; }])/i', '#$1$2$3$4', $content);
        $content = preg_replace('/(?<=[: ])#([0-9a-z]{6})ff?(?=[; }])/i', '#$1', $content);
        $content = preg_replace('/(?<=[: ])#([0-9a-z]{3})f?(?=[; }])/i', '#$1', $content);
        $colors = array('#F0FFFF' => 'azure', '#F5F5DC' => 'beige', '#A52A2A' => 'brown', '#FF7F50' => 'coral', '#FFD700' => 'gold', '#808080' => 'gray', '#008000' => 'green', '#4B0082' => 'indigo', '#FFFFF0' => 'ivory', '#F0E68C' => 'khaki', '#FAF0E6' => 'linen', '#800000' => 'maroon', '#000080' => 'navy', '#808000' => 'olive', '#CD853F' => 'peru', '#FFC0CB' => 'pink', '#DDA0DD' => 'plum', '#800080' => 'purple', '#F00' => 'red', '#FA8072' => 'salmon', '#A0522D' => 'sienna', '#C0C0C0' => 'silver', '#FFFAFA' => 'snow', '#D2B48C' => 'tan', '#FF6347' => 'tomato', '#EE82EE' => 'violet', '#F5DEB3' => 'wheat', 'WHITE' => '#fff', 'BLACK' => '#000',);
        return preg_replace_callback('/(?<=[: ])(' . implode('|', array_keys($colors)) . ')(?=[; }])/i', function ($match) use ($colors) {
            return $colors[strtoupper($match[0])];
        }, $content);
    }

    protected function shortenZeroes($content)
    {
        $before = '(?<=[:(, ])';
        $after = '(?=[ ,);}])';
        $units = '(em|ex|%|px|cm|mm|in|pt|pc|ch|rem|vh|vw|vmin|vmax|vm)';
        $content = preg_replace('/' . $before . '(-?0*(\.0+)?)(?<=0)px' . $after . '/', '\\1', $content);
        $content = preg_replace('/' . $before . '\.0+' . $units . '?' . $after . '/', '0\\1', $content);
        $content = preg_replace('/' . $before . '(-?[0-9]+\.[0-9]+)0+' . $units . '?' . $after . '/', '\\1\\2', $content);
        $content = preg_replace('/' . $before . '(-?[0-9]+)\.0+' . $units . '?' . $after . '/', '\\1\\2', $content);
        $content = preg_replace('/' . $before . '(-?)0+([0-9]*\.[0-9]+)' . $units . '?' . $after . '/', '\\1\\2\\3', $content);
        $content = preg_replace('/' . $before . '-?0+' . $units . '?' . $after . '/', '0\\1', $content);
        $content = preg_replace('/flex:([0-9]+\s[0-9]+\s)0([;\}])/', 'flex:${1}0%${2}', $content);
        $content = preg_replace('/flex-basis:0([;\}])/', 'flex-basis:0%${1}', $content);
        return $content;
    }

    protected function shortenFontWeights($content)
    {
        $weights = array('normal' => 400, 'bold' => 700,);
        $callback = function ($match) use ($weights) {
            return $match[1] . $weights[$match[2]];
        };
        return preg_replace_callback('/(font-weight\s*:\s*)(' . implode('|', array_keys($weights)) . ')(?=[;}])/', $callback, $content);
    }

    protected function stripEmptyTags($content)
    {
        $content = preg_replace('/(?<=^)[^\{\};]+\{\s*\}/', '', $content);
        $content = preg_replace('/(?<=(\}|;))[^\{\};]+\{\s*\}/', '', $content);
        return $content;
    }

    protected function importFiles($source, $content)
    {
        $regex = '/url\((["\']?)(.+?)\\1\)/i';
        if ($this->importExtensions && preg_match_all($regex, $content, $matches, PREG_SET_ORDER)) {
            $search = array();
            $replace = array();
            foreach ($matches as $match) {
                $extension = substr(strrchr($match[2], '.'), 1);
                if ($extension && !array_key_exists($extension, $this->importExtensions)) {
                    continue;
                }
                $path = $match[2];
                $path = dirname($source) . '/' . $path;
                if ($this->canImportFile($path) && $this->canImportBySize($path)) {
                    $importContent = $this->load($path);
                    $importContent = base64_encode($importContent);
                    $search[] = $match[0];
                    $replace[] = 'url(' . $this->importExtensions[$extension] . ';base64,' . $importContent . ')';
                }
            }
            $content = str_replace($search, $replace, $content);
        }
        return $content;
    }

    protected function canImportBySize($path)
    {
        return ($size = @filesize($path)) && $size <= $this->maxImportSize * 1024;
    }

    protected function getPathConverter($source, $target)
    {
        return new Converter($source, $target);
    }

    protected function move(ConverterInterface $converter, $content)
    {
        $relativeRegexes = array('/
            # open url()
            url\(

                \s*

                # open path enclosure
                (?P<quotes>["\'])?

                    # fetch path
                    (?P<path>.+?)

                # close path enclosure
                (?(quotes)(?P=quotes))

                \s*

            # close url()
            \)

            /ix', '/
            # import statement
            @import

            # whitespace
            \s+

                # we don\'t have to check for @import url(), because the
                # condition above will already catch these

                # open path enclosure
                (?P<quotes>["\'])

                    # fetch path
                    (?P<path>.+?)

                # close path enclosure
                (?P=quotes)

            /ix',);
        $matches = array();
        foreach ($relativeRegexes as $relativeRegex) {
            if (preg_match_all($relativeRegex, $content, $regexMatches, PREG_SET_ORDER)) {
                $matches = array_merge($matches, $regexMatches);
            }
        }
        $search = array();
        $replace = array();
        foreach ($matches as $match) {
            $type = (strpos($match[0], '@import') === 0 ? 'import' : 'url');
            $url = $match['path'];
            if ($this->canImportByPath($url)) {
                $params = strrchr($url, '?');
                $url = $params ? substr($url, 0, -strlen($params)) : $url;
                $url = $converter->convert($url);
                $url .= $params;
            }
            $url = trim($url);
            if (preg_match('/[\s\)\'"#\x{7f}-\x{9f}]/u', $url)) {
                $url = $match['quotes'] . $url . $match['quotes'];
            }
            $search[] = $match[0];
            if ($type === 'url') {
                $replace[] = 'url(' . $url . ')';
            } elseif ($type === 'import') {
                $replace[] = '@import "' . $url . '"';
            }
        }
        return str_replace($search, $replace, $content);
    }

    protected function moveImportsToTop($content)
    {
        if (preg_match_all('/(;?)(@import (?<url>url\()?(?P<quotes>["\']?).+?(?P=quotes)(?(url)\)));?/', $content, $matches)) {
            foreach ($matches[0] as $import) {
                $content = str_replace($import, '', $content);
            }
            $content = implode(';', $matches[2]) . ';' . trim($content, ';');
        }
        return $content;
    }
}