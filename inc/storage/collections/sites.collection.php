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
                            'options' => 'blockListPluginAction, cookiePluginAction, dailyMotionPluginAction, headerRewritePluginAction, logPluginAction, proxifyPluginAction, streamPluginAction, twitterPluginAction, youtubePluginAction',
                        ),
                    'width' => '1-3',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            5 =>
                array(
                    'name' => 'replace',
                    'label' => 'replace',
                    'type' => 'object',
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
            6 =>
                array(
                    'name' => 'pattern',
                    'label' => 'pattern',
                    'type' => 'object',
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
        ),
    'sortable' => false,
    'in_menu' => false,
    '_created' => 1655673274,
    '_modified' => 1655783885,
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