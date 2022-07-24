<?php
return array(
    'name' => 'global',
    'label' => 'global',
    '_id' => 'global',
    'fields' =>
        array(
            0 =>
                array(
                    'name' => 'type',
                    'label' => 'type',
                    'type' => 'text',
                    'default' => '',
                    'info' => 'Name of collection',
                    'group' => '',
                    'localize' => 0,
                    'options' =>
                        array(),
                    'width' => '1-1',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
            1 =>
                array(
                    'name' => 'value',
                    'label' => 'value',
                    'type' => 'object',
                    'default' => '',
                    'info' => 'Search Replace "key":"value" json collection i.e. {"search":"replace"}',
                    'group' => '',
                    'localize' => 0,
                    'options' =>
                        array(),
                    'width' => '1-1',
                    'lst' => true,
                    'acl' =>
                        array(),
                ),
        ),
    'sortable' => 0,
    'in_menu' => 0,
    '_created' => 1655773950,
    '_modified' => 1655778790,
    'color' => '#AC92EC',
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
                    'enabled' => 0,
                ),
            'read' =>
                array(
                    'enabled' => 0,
                ),
            'update' =>
                array(
                    'enabled' => 0,
                ),
            'delete' =>
                array(
                    'enabled' => 0,
                ),
        ),
    'group' => 'core',
    'icon' => 'globe.svg',
);