<?php
return [
    'name' => 'sites',
    'label' => 'sites',
    'info' => '',
    'type' => 'collection',
    'fields' => [
        0 => [
            'name' => 'host',
            'label' => 'host',
            'type' => 'text',
            'default' => '',
            'info' => 'Site host name i.e \'localhost\'',
            'group' => '',
            'localize' => false,
            'options' => [
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
            'required' => true,
            'meta' => NULL,
        ],
        1 => [
            'name' => 'target',
            'label' => 'target',
            'type' => 'text',
            'default' => '',
            'info' => 'Hostname of site to proxy i.e. \'www.example.com\'',
            'group' => '',
            'localize' => false,
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
            'localize' => false,
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
            'localize' => false,
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
            'type' => 'select',
            'default' => '',
            'info' => 'Activate selected site plugins, located in the \'/plugin\' directory',
            'group' => '',
            'localize' => 0,
            'options' => [
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
            'opts' => [
                'multiple' => true,
                'options' => [
                    0 => 'BlockListPlugin',
                    1 => 'CookiePlugin',
                    2 => 'DailyMotionPlugin',
                    3 => 'HeaderRewritePlugin',
                    4 => ' LogPlugin',
                    5 => 'ProxifyPlugin',
                    6 => 'StreamPlugin',
                    7 => 'TwitterPlugin',
                    8 => 'YoutubePlugin',
                ],
            ],
            'meta' => NULL,
        ],
        5 => [
            'name' => 'tags',
            'label' => 'tags',
            'type' => 'tags',
            'default' => '',
            'info' => 'tags',
            'group' => '',
            'localize' => false,
            'options' => [
            ],
            'width' => '1-3',
            'lst' => true,
            'acl' => [
            ],
            'opts' => [
                'placeholder' => NULL,
                'max' => NULL,
                'list' => NULL,
            ],
            'meta' => NULL,
        ],
        6 => [
            'name' => 'replace',
            'label' => 'replace',
            'type' => 'object',
            'default' => '',
            'info' => 'Key value  {  "search": "replace" }',
            'group' => '',
            'localize' => false,
            'options' => [
                'search' => 'replace',
            ],
            'width' => '1-2',
            'lst' => true,
            'acl' => [
            ],
            'opts' => [
                'height' => NULL,
            ],
            'meta' => NULL,
        ],
        7 => [
            'name' => 'pattern',
            'label' => 'pattern',
            'type' => 'object',
            'default' => '',
            'info' => 'Regex patter search replace i.e. \'<header[\\s\\S]*?header>\'',
            'group' => '',
            'localize' => false,
            'options' => [
                'search' => 'replace',
            ],
            'width' => '1-2',
            'lst' => true,
            'acl' => [
            ],
            'opts' => [
                'height' => NULL,
            ],
            'meta' => NULL,
        ],
        8 => [
            'name' => 'css',
            'label' => 'css',
            'type' => 'code',
            'default' => '',
            'info' => '',
            'group' => '',
            'localize' => false,
            'options' => [
            ],
            'width' => '1-2',
            'lst' => true,
            'acl' => [
            ],
        ],
        9 => [
            'name' => 'js',
            'label' => 'js',
            'type' => 'code',
            'default' => '',
            'info' => '',
            'group' => '',
            'localize' => false,
            'options' => [
            ],
            'width' => '1-2',
            'lst' => true,
            'acl' => [
            ],
        ],
        10 => [
            'name' => 'note',
            'label' => 'note',
            'type' => 'wysiwyg',
            'default' => '',
            'info' => 'notes',
            'group' => '',
            'localize' => false,
            'options' => [
            ],
            'width' => '1-1',
            'lst' => true,
            'acl' => [
            ],
        ],
    ],
    'sortable' => false,
    'in_menu' => 0,
    '_created' => 1658962514,
    '_modified' => 1658965354,
    'color' => '#00ffb3',
    'acl' => [
    ],
    'sort' => [
        'column' => '_created',
        'dir' => -1,
    ],
    'rules' => [
        'create' => [
            'enabled' => 0,
        ],
        'read' => [
            'enabled' => true,
        ],
        'update' => [
            'enabled' => 0,
        ],
        'delete' => [
            'enabled' => 0,
        ],
    ],
    'preview' => [
    ],
    'group' => 'core',
    'revisions' => false,
];