<?php

$this->on('admin.init', function() use($helpers) {

    if (!empty($helpers['locked_entries_disabled'])) {

        // delete all keys, that start with "locked:"
        $keys = $this->memory->keys('locked:*');
        if (!empty($keys)) {
            $this->memory->del(...$keys);
        }

    }

});
