<?php
return array(
    'name' => 'sites',
    'label' => 'sites',
    '_id' => 'sites',
    'fields' =>
        array(
            0 =>
                array(
                    'name' => 'host',
                    'label' => 'host',
                    'type' => 'text',
                    'default' => '',
                    'info' => 'Site host name i.e \'localhost\'',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-3',
                    'lst' => true,
                    'acl' =>
                        array(),
                    'required' => true,
                ),
            1 =>
                array(
                    'name' => 'target',
                    'label' => 'target',
                    'type' => 'text',
                    'default' => '',
                    'info' => 'Hostname of site to proxy i.e. \'www.example.com\'',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-3',
                    'lst' => true,
                    'acl' =>
                        array(),
                    'required' => true,
                ),
            2 =>
                array(
                    'name' => 'affiliate',
                    'label' => 'affiliate',
                    'type' => 'text',
                    'default' => '',
                    'info' => 'Affiliate ID to append to fetch URL i.e. "?affiliate_id=xxxxxx"',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-3',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            3 =>
                array(
                    'name' => 'files',
                    'label' => 'dir',
                    'type' => 'text',
                    'default' => '',
                    'info' => 'Directory containing site files in the /override directory i.e. \'example\'',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-3',
                    'lst' => true,
                    'acl' =>
                        array(),
                    'required' => true,
                ),
            4 =>
                array(
                    'name' => 'plugins',
                    'label' => 'plugins',
                    'type' => 'multipleselect',
                    'default' => '',
                    'info' => 'Activate selected site plugins, located in the \'/plugin\' directory',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(
                            'options' => 'BlockListPlugin, CookiePlugin, DailyMotionPlugin, HeaderRewritePlugin, LogPlugin, ProxifyPlugin, StreamPlugin, TwitterPlugin, YoutubePlugin',
                        ),
                    'width' => '1-3',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            5 =>
                array(
                    'name' => 'tags',
                    'label' => 'tags',
                    'type' => 'tags-autoupdate',
                    'default' => '',
                    'info' => 'tags',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-3',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            6 =>
                array(
                    'name' => 'replace',
                    'label' => 'replace',
                    'type' => 'key-value-pair',
                    'default' => '',
                    'info' => 'Key value  {  "search": "replace" }',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(
                            'search' => 'replace',
                        ),
                    'width' => '1-2',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            7 =>
                array(
                    'name' => 'pattern',
                    'label' => 'pattern',
                    'type' => 'key-value-pair',
                    'default' => '',
                    'info' => 'Regex patter search replace i.e. \'<header[\\s\\S]*?header>\'',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(
                            'search' => 'replace',
                        ),
                    'width' => '1-2',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            8 =>
                array(
                    'name' => 'css',
                    'label' => 'css',
                    'type' => 'code',
                    'default' => '',
                    'info' => '',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-2',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            9 =>
                array(
                    'name' => 'js',
                    'label' => 'js',
                    'type' => 'code',
                    'default' => '',
                    'info' => '',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-2',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            10 =>
                array(
                    'name' => 'note',
                    'label' => 'note',
                    'type' => 'wysiwyg',
                    'default' => '',
                    'info' => 'notes',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(),
                    'width' => '1-1',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            11 =>
                array(
                    'name' => 'folder',
                    'label' => '',
                    'type' => 'simple-repeater',
                    'default' => '',
                    'info' => '',
                    'group' => '',
                    'localize' => false,
                    'options' =>
                        array(
                            'fields' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'asset',
                                            'label' => 'An Asset',
                                        ),
                                ),
                        ),
                    'width' => '1-1',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
        ),
    'fields' => [
        0 => [
            'name' => 'host',
            'label' => 'host',
            'type' => 'text',
            'default' => '',
            'info' => 'Site host name i.e \'localhost\'',
            'group' => '',
            'localize' => 0,
            'options' => [
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
            'required' => true,
        ],
        1 => [
            'name' => 'target',
            'label' => 'target',
            'type' => 'text',
            'default' => '',
            'info' => 'Hostname of site to proxy i.e. \'example.com\'',
            'group' => '',
            'localize' => 0,
            'options' => [
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
            'required' => true,
        ],
        2 => [
            'name' => 'affiliate',
            'label' => 'affiliate',
            'type' => 'text',
            'default' => '',
            'info' => 'Affiliate ID to append to fetch URL i.e. "?affiliate_id=xxxxxx"',
            'group' => '',
            'localize' => 0,
            'options' => [
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
        ],
        3 => [
            'name' => 'files',
            'label' => 'dir',
            'type' => 'text',
            'default' => '',
            'info' => 'Directory containing site files in the /override directory i.e. \'example\'',
            'group' => '',
            'localize' => 0,
            'options' => [
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
            'required' => true,
        ],
        4 => [
            'name' => 'plugins',
            'label' => 'plugins',
            'type' => 'multipleselect',
            'default' => '',
            'info' => 'Activate selected site plugins, located in the \'/plugin\' directory',
            'group' => '',
            'localize' => 0,
            'options' => [
                'options' => 'BlockListPlugin, CookiePlugin, DailyMotionPlugin, HeaderRewritePlugin, LogPlugin, ProxifyPlugin, StreamPlugin, TwitterPlugin, YoutubePlugin',
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
        ],
        5 => [
            'name' => 'replace',
            'label' => 'replace',
            'type' => 'set',
            'default' => '',
            'info' => 'Key value  {  "search": "replace" }',
            'group' => '',
            'localize' => 0,
            'options' => [
                'search' => 'replace',
            ],
            'width' => '1-2',
            'lst' => true,
            'acl' => [
            ],
            'meta' => NULL,
            'opts' => [
                'fields' => NULL,
                'display' => NULL,
            ],
        ],
        6 => [
            'name' => 'pattern',
            'label' => 'pattern',
            'type' => 'object',
            'default' => '',
            'info' => 'Regex patter search replace i.e. \'<header[\\s\\S]*?header>\'',
            'group' => '',
            'localize' => 0,
            'options' => [
                'search' => 'replace',
            ],
            'width' => '1-2',
            'lst' => true,
            'acl' => [
            ],
        ],
    ],
    'sortable' => false,
    'in_menu' => false,
    '_created' => 1655673274,
    '_modified' => 1658957852,
    'color' => '#4FC1E9',
    'acl' =>
        array(),
    'sort' =>
        array(
            'column' => '_created',
            'dir' => -1,
        ),
    'rules' =>
        array(
            'create' =>
                array(
                    'enabled' => false,
                ),
            'read' =>
                array(
                    'enabled' => true,
                ),
            'update' =>
                array(
                    'enabled' => false,
                ),
            'delete' =>
                array(
                    'enabled' => false,
                ),
        ),
    'icon' => 'module.svg',
    'group' => 'core',
    'description' => 'Domain mapping',
);