<?php

/**
 * Implements collections.save.after event.
 */
$app->on('collections.save.after', function($name, $entry, $isUpdate) use ($app) {
  $settings = $this->retrieve('config/autosave', ['collections' => []]);
  if ($settings['collections'] === '*' || in_array($name, $settings['collections'])) {
    $app->module('autosave')->removeEntry($entry['_id']);
  }
});

/**
 * Implements singleton.save.after event.
 */
$app->on('singleton.saveData.after', function($singleton, $data) use($app) {
  $settings = $this->retrieve('config/autosave', ['singletons' => []]);
  if ($settings['singletons'] === '*' || in_array($singleton['name'], $settings['singletons'])) {
    $app->module('autosave')->removeEntry($singleton['_id']);
  }
});
