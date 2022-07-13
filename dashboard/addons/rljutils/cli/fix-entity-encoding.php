<?php
/*
 * html_entity_decode in all wysiwyg fields in all collections
 */

if (!YXORP_CLI) return;

$time_all = time();

$collections = yxorp('collections')->collections();

$languages = [];
if (isset($app['languages']) && is_array($app['languages'])) {
    foreach ($app['languages'] as $lang => $label) {
        if ($lang == 'default') continue;
        $languages[] = $lang;
    }
}

$fixes = [];

foreach ($collections as $col) {

    if (isset($col['fields']) && is_array($col['fields'])) {

        $f = [];

        foreach ($col['fields'] as $field) {

            // check for wysiwyg fields
            if ($field['type'] == 'wysiwyg') {

                $f[] = $field['name'];

                if ($field['localize'] == true) {

                    // check translated fields
                    foreach ($languages as $lang) {
                        $f[] = $field['name'] . '_' . $lang;
                    }
                }
            }
        }

        if (!empty($f)) $fixes[$col['name']] = $f;
    }
}

foreach ($fixes as $collection => $fields) {

    $count = yxorp('collections')->count($collection);

    CLI::writeln("Found $count entries in $collection");

    $options = [];

    foreach ($fields as $field) {
        $options['fields'][$field] = true;
    }

    $entries = yxorp('collections')->find($collection, $options);

    CLI::writeln("Starting to convert fields: " . implode(', ', $fields));

    $time = time();

    foreach ($entries as &$entry) {

        foreach ($fields as $field) {
            if (isset($entry[$field])) {
                $entry[$field] = html_entity_decode($entry[$field]);
            }
        }

    }

    // save entries
    yxorp('collections')->save($collection, $entries);

    CLI::writeln("Converted $count items in " . (time() - $time) . ' seconds');

}

CLI::writeln("Done all in " . (time() - $time_all) . ' seconds');

