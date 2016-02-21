<?php
$xpdo_meta_map['modLMIMS']= array (
  'package' => 'lmims',
  'version' => '1.1',
  'table' => 'lmims',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'key' => '',
    'date' => 0,
    'hash' => '',
    'resource' => 0,
  ),
  'fieldMeta' => 
  array (
    'key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '32',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'pk',
    ),
    'date' => 
    array (
      'dbtype' => 'int',
      'precision' => '20',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'hash' => 
    array (
      'dbtype' => 'char',
      'precision' => '40',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
      'index' => 'index',
    ),
    'resource' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'key' => 
    array (
      'alias' => 'key',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'key' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'date' => 
    array (
      'alias' => 'date',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'date' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
