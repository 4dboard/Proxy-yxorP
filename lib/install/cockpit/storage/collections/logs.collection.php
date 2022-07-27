<?php
 return array (
  'name' => 'logs',
  'label' => 'logs',
  '_id' => 'logs',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'event',
      'label' => 'event',
      'type' => 'code',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    1 => 
    array (
      'name' => 'tags',
      'label' => 'tags',
      'type' => 'tags-autoupdate',
      'default' => '',
      'info' => 'tags',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    2 => 
    array (
      'name' => 'notes',
      'label' => 'note',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => 'notes',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1658956871,
  '_modified' => 1658957126,
  'color' => '#D8334A',
  'acl' => 
  array (
  ),
  'sort' => 
  array (
    'column' => '_created',
    'dir' => -1,
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'group' => 'core',
  'icon' => 'info.svg',
);