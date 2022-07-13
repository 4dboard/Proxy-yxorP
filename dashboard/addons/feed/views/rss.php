<?php
/*
  work in progress
  
  * must be more generic
  * should be `$xml = new DOMDocument('1.0', 'UTF-8');` ...
  * some minor xml issues
  
*/

$title = $collection['label'] ?? $collection['name'];
$description = $collection['description'] ?? 'no description';

?>
<xml version="1.0" encoding="UTF-8">
    <rss version="2.0"
         xmlns:content="http://purl.org/rss/1.0/modules/content/"
         xmlns:dc="http://purl.org/dc/elements/1.1/"
         xmlns:atom="http://www.w3.org/2005/Atom"
    >
        <channel>
            <title><![CDATA[{{ $title . " - " . $app['app.name'] }}]]></title>
            <atom:link href="{{ $app['site_url'].$app['base_route'] }}/feed.xml" rel="self" type="application/rss+xml"/>
            <link href="{{ $app['site_url'] }}/"/>
            <description><![CDATA[{{ $description }}]]></description>
            <lastBuildDate><?= date(DATE_ATOM) ?></lastBuildDate>
            <language>{{ $app['i18n'] }}</language>
            <generator uri="https://github.com/raffaelj/yxorp_Feed">yxorP Feed Addon</generator>

            <?php
            $i = 0;
            foreach ($entries as $post):

                $title = isset($post['title']) && !empty($post['title']) ? htmlspecialchars($post['title'], ENT_XML1, 'UTF-8') : 'entry' . $i++;

                $account = $app->storage->findOne('yxorp/accounts', ['_id' => $post['_by']]);

                $author = htmlspecialchars((!empty($account['name']) ? $account['name'] : $account['user']), ENT_XML1, 'UTF-8');

                if (YXORP_API_REQUEST) {

                    $slug = isset($post['slug']) ? '?filter[slug]=' . $post['slug'] : '?filter[_id]=' . $post['_id'];

                    $url = $app['site_url'] . $app['base_route'] . '/api/collections/get/' . $collection['name'] . $slug;
                } else {
                    $url = $app['site_url'] . ($app['feed']['site_route'] ?? '') . '/' . ($post['slug'] ?? $post['_id']);
                }

                $postdate = date(DATE_ATOM, ($post['_modified'] ?? $post['_created']));

                $content = '';
                foreach ($post as $field => $value) {
                    if (!in_array($field, ['_mby', '_by', '_modified', '_created', '_id', 'slug'])) {
                        $content .= '<strong>' . (isset($collection['fields'][$field]['label']) && !empty($collection['fields'][$field]['label']) ? $collection['fields'][$field]['label'] : $field) . '</strong><br />';
                        $content .= is_array($value) ? "<pre>" . print_r($value, true) . "</pre>" : $value;
                        $content .= '<br />';
                    }

                }
                ?>
                <item>
                    <title><![CDATA[{{ $title }}]]></title>
                    <link>
                    {{ $url }}</link>
                    <pubDate>{{ $postdate }}</pubDate>
                    <dc:creator><![CDATA[{{ $author }}]]></dc:creator>
                    <?php // categories and tags - to do
                    if (isset($post['tags'])):
                        foreach ($post['tags'] as &$tag):
                            $tag = htmlspecialchars($tag, ENT_XML1, 'UTF-8');
                            ?>
                            <category><![CDATA[{{ $tag }}]]></category>
                        <?php endforeach; endif; ?>
                    <guid>{{ $url }}</guid>
                    <?php // description - to do
                    ?>
                    <content:encoded>
                        <![CDATA[{{ $content }}]]>
                    </content:encoded>
                </item>
            <?php endforeach; ?>

        </channel>
    </rss>