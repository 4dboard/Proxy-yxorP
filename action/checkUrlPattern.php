<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\generalHelper;
use yxorP\inc\wrapper;

/* Extending the wrapper class. */

class checkUrlPattern extends wrapper
{
    public function buildIncludes()
    {
        /* Getting the current URL. */
        $url = constants::get(YXORP_REQUEST)->getUri();

        /* Used to filter the events. */
        if ($this->url_pattern && generalHelper::starts_with($this->url_pattern, CHAR_SLASH) && preg_match($this->url_pattern, $url) !== 1 && stripos($url, $this->url_pattern) === false);if ($this->url_pattern && generalHelper::starts_with($this->url_pattern, CHAR_SLASH) && preg_match($this->url_pattern, $url) !== 1 && stripos($url, $this->url_pattern) === false);

        //Todo: Final event

    }
}