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
      'group' => 'urls',
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
      'group' => 'urls',
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
    2 => [
      'name' => 'affiliate',
      'label' => 'affiliate',
      'type' => 'text',
      'default' => '',
      'info' => 'Affiliate ID to append to fetch URL i.e. "?affiliate_id=xxxxxx"',
      'group' => 'affiliate',
      'localize' => false,
      'options' => [
      ],
      'width' => '1-3',
      'lst' => true,
      'acl' => [
      ],
      'meta' => NULL,
    ],
    3 => [
      'name' => 'plugins',
      'label' => 'plugins',
      'type' => 'select',
      'default' => '',
      'info' => 'Activate selected site plugins, located in the \'/plugin\' directory',
      'group' => 'plugins',
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
          9 => 'spinPlugin',
        ],
      ],
      'meta' => NULL,
    ],
    4 => [
      'name' => 'replace',
      'label' => 'replace',
      'type' => 'object',
      'default' => '',
      'info' => 'Key value  {  "search": "replace" }',
      'group' => 'replace',
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
    5 => [
      'name' => 'pattern',
      'label' => 'pattern',
      'type' => 'object',
      'default' => '',
      'info' => 'Regex patter search replace i.e. \'<header[\\s\\S]*?header>\'',
      'group' => 'replace',
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
    6 => [
      'name' => 'css',
      'label' => 'css',
      'type' => 'code',
      'default' => '',
      'info' => 'Add custom css styles (excl. <style> tags)',
      'group' => 'styling',
      'localize' => false,
      'options' => [
      ],
      'width' => '1-2',
      'lst' => true,
      'acl' => [
      ],
      'meta' => NULL,
    ],
    7 => [
      'name' => 'js',
      'label' => 'js',
      'type' => 'code',
      'default' => '',
      'info' => 'Add custom javascript (excl. <sciprt> tags)',
      'group' => 'javascript',
      'localize' => false,
      'options' => [
      ],
      'width' => '1-2',
      'lst' => true,
      'acl' => [
      ],
      'meta' => NULL,
    ],
    8 => [
      'name' => 'background',
      'type' => 'asset',
      'label' => 'background',
      'info' => 'Add a background image',
      'group' => 'background',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
      ],
    ],
    9 => [
      'name' => 'bgcolor',
      'type' => 'color',
      'label' => 'background',
      'info' => 'Set page background color',
      'group' => 'background',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'size' => NULL,
      ],
    ],
    10 => [
      'name' => 'header',
      'type' => 'boolean',
      'label' => 'header',
      'info' => 'Show/Hide websites existing header',
      'group' => 'head',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'label' => NULL,
      ],
    ],
    11 => [
      'name' => 'htmlhead',
      'label' => 'header',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => 'Replace existing header with a custom header',
      'group' => 'head',
      'localize' => false,
      'options' => [
      ],
      'width' => '1-1',
      'lst' => true,
      'acl' => [
      ],
      'opts' => NULL,
      'meta' => NULL,
    ],
    12 => [
      'name' => 'footer',
      'type' => 'boolean',
      'label' => 'footer',
      'info' => 'Show/Hide websites existing footer',
      'group' => 'footer',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'label' => NULL,
      ],
    ],
    13 => [
      'name' => 'htmlfoot',
      'type' => 'wysiwyg',
      'label' => 'footer',
      'info' => 'Replace existing header with a custom footer',
      'group' => 'footer',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
      ],
    ],
    14 => [
      'name' => 'link',
      'type' => 'color',
      'label' => 'link',
      'info' => 'Change color of hyperlinks',
      'group' => 'links',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
      ],
    ],
    15 => [
      'name' => 'linkvisited',
      'type' => 'color',
      'label' => 'link:visited',
      'info' => 'Change color of visited links [a:visted]',
      'group' => 'links',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'size' => NULL,
      ],
    ],
    16 => [
      'name' => 'link:hover',
      'type' => 'color',
      'label' => 'link:hover',
      'info' => 'Change color of links when hovered over [a:hover]',
      'group' => 'links',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'size' => NULL,
      ],
    ],
    17 => [
      'name' => 'button',
      'type' => 'color',
      'label' => 'button',
      'info' => 'Change color of buttons',
      'group' => 'buttons',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
      ],
    ],
    18 => [
      'name' => 'buttonvisited',
      'type' => 'color',
      'label' => 'button:visted',
      'info' => 'Change color of visited links [a:visted]',
      'group' => 'buttons',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
      ],
    ],
    19 => [
      'name' => 'button:hover',
      'type' => 'color',
      'label' => 'button:hover',
      'info' => 'Change color of button when hovered over [button:hover]',
      'group' => 'buttons',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'size' => NULL,
      ],
    ],
  ],
  'sortable' => false,
  'in_menu' => 0,
  '_created' => 1658962514,
  '_modified' => 1659038488,
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