<?php function vid_player($url, $width = '100%', $height = '100%', $extension = false): string
{
    $path = parse_url($url, PHP_URL_PATH);
    $html5 = false;
    if ($path) {
        $extension = @false ?: pathinfo($path, PATHINFO_EXTENSION);
        if ($extension === 'mp4' || $extension === 'webm' || $extension === 'ogg') {
            $html5 = true;
        }
    }
    $video_url = proxify_url($url);
    if ($html5) {
        $html = '<video width="' . $width . '" height="' . $height . '" controls autoplay>
			<source src="' . $video_url . '" type="video/' . $extension . '">
			Your browser does not support the video tag.
		</video>';
    } else {
        $video_url = rawurlencode($video_url);
        $html = '<object id="flowplayer" width="' . $width . '" height="' . $height . '" data="
 	 
       	<param name="allowfullscreen" value="true" />
		<param name="wmode" value="transparent" />
        <param name="flashvars" value=\'inc={"clip":"' . $video_url . '", "plugins": {"controls": {"autoHide" : false} }}\' />
		
		</object>';
    }
    return $html;
}

;
return 1; ?><?php return 1; ?>