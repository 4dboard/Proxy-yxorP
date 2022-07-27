<?php
/**
 * html_entity_decode in all wysiwyg fields in all collections
 */

/**
 * This is a security measure to prevent the script from being executed in the browser.
 */
if (!COCKPIT_CLI) return;
/**
 * Setting the variable `$time_all` to the current time.
 */

$time_all = time();
/**
 * It's getting all collections from the database.
 */

$collections = cockpit('collections')->collections();

$languages = [];
/**
 * It's checking if the `$app['languages']` array is set and if it's an array.
 */
if (isset($app['languages']) && is_array($app['languages'])) {
    /**
     * It's getting all languages from the `$app['languages']` array.
     */
    foreach ($app['languages'] as $lang => $label) {
        if ($lang == 'default') continue;
        $languages[] = $lang;
    }
    /**
     * It's creating an empty array.
     */
}

$fixes = [];

/**
 * It's getting all collections from the database.
 */
foreach ($collections as $col) {

    /**
     * It's checking if the `$col['fields']` array is set and if it's an array.
     */
    if (isset($col['fields']) && is_array($col['fields'])) {

        $f = [];

        /**
         * It's getting all fields from the collection.
         */
        foreach ($col['fields'] as $field) {

            // check for wysiwyg fields
            if ($field['type'] == 'wysiwyg') {

                $f[] = $field['name'];

                /**
                 * It's checking if the `$field['localize']` variable is set to `true`.
                 */
                if ($field['localize'] == true) {

                    // check translated fields
                    /**
                     * It's getting all languages from the `$app['languages']` array.
                     */
                    foreach ($languages as $lang) {
                        $f[] = $field['name'] . '_' . $lang;
                    }
                }
            }
        }

        /**
         * It's checking if the `$f` array is empty and if it's not empty it's adding the `$f` array to the `$fixes` array.
         */
        if (!empty($f)) $fixes[$col['name']] = $f;
    }
}
/**
 * It's getting all collections from the database.
 */

foreach ($fixes as $collection => $fields) {

    /**
     * It's getting the number of entries in the collection.
     */
    $count = cockpit('collections')->count($collection);

    /**
     * It's writing the number of entries in the collection to the console.
     */
    CLI::writeln("Found $count entries in $collection");

    /**
     * It's creating an empty array.
     */
    $options = [];

    /**
     * It's getting all fields from the collection.
     */
    foreach ($fields as $field) {
        /**
         * It's adding the `$field` variable to the `$options['fields']` array.
         */
        $options['fields'][$field] = true;
    }

    /**
     * It's getting all entries from the collection.
     */
    $entries = cockpit('collections')->find($collection, $options);

    /**
     * It's writing the `$fields` array to the console.
     */
    CLI::writeln("Starting to convert fields: " . implode(', ', $fields));

    /**
     * It's setting the `$time` variable to the current time.
     */
    $time = time();

    /**
     * It's getting all entries from the collection.
     */
    foreach ($entries as &$entry) {

        /**
         * It's getting all fields from the collection.
         */
        foreach ($fields as $field) {
            if (/**
             * It's decoding the HTML entities in the `$entry[$field]` variable.
             */
            isset($entry[$field])) {
                $entry[$field] = html_entity_decode($entry[$field]);
            }
        }

    }

    // save entries
    cockpit('collections')->save($collection, $entries);

    CLI::writeln("Converted $count items in " . (time() - $time) . ' seconds');

}

CLI::writeln("Done all in " . (time() - $time_all) . ' seconds');

