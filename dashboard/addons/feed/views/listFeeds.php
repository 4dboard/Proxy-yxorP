<?php
/*
  work in progress
*/

$title = 'Collection-Feeds';
$description = 'all available feeds';

?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
>
  <channel>
      <title><![CDATA[{{ $title . " - " . $app['app.name'] }}]]></title>
      <atom:link href="{{ $app['site_url'].$app['base_route'] }}/feed.xml" rel="self" type="application/rss+xml" />
      <link href="{{ $app['site_url'] }}/" />
      <description><![CDATA[{{ $description }}]]></description>
      <lastBuildDate><?=date(DATE_ATOM)?></lastBuildDate>
      <language>{{ $app['i18n'] }}</language>
      <generator uri="https://github.com/raffaelj/yxorp_Feed">Yxorp Feed Addon</generator>

      <?php
      $i = 0;
      foreach($entries as $post):
      
          $title = isset($post['label']) && !empty($post['label']) ? htmlspecialchars($post['label'], ENT_XML1, 'UTF-8') : htmlspecialchars($post['name'], ENT_XML1, 'UTF-8');
          
          $url = $post['url'];
          
          $content = !empty($post['description']) ? $post['description'] : 'no description available';
          
          $content .= "<br /><a href='$url'>open feed for $title</a>";
      ?>
        <item>
          <title><![CDATA[{{ $title }}]]></title>
          <link>{{ $url }}</link>
          <guid>{{ $url }}</guid>
          <content:encoded>
            <![CDATA[{{ $content }}]]>
          </content:encoded>
        </item>
      <?php endforeach; ?>

  </channel>
</rss>