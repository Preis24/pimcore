<?php 

/** 
* Generated at: 2017-07-20T11:45:22+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (2)
* IP: 10.0.0.1


Fields Summary: 
- name [input]
- display [quantityValue]
- memory [quantityValue]
- deviceImage [image]
- description [wysiwyg]
- color [input]
*/ 


return Pimcore\Model\Object\ClassDefinition::__set_state(array(
   'name' => 'device',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1500543922,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => 'Pimcore\\Model\\Object\\DistributionInformation',
   'useTraits' => '',
   'allowInherit' => true,
   'allowVariants' => true,
   'showVariants' => true,
   'layoutDefinitions' => 
  Pimcore\Model\Object\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => NULL,
     'collapsed' => NULL,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\Object\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'labelWidth' => 100,
         'layout' => NULL,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\Object\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'regex' => '',
             'name' => 'name',
             'title' => 'name',
             'tooltip' => 'Dies ist der Name des Gerätes',
             'mandatory' => true,
             'noteditable' => false,
             'index' => true,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => true,
             'visibleSearch' => true,
          )),
          1 => 
          Pimcore\Model\Object\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => '3',
             'validUnits' => 
            array (
              0 => '3',
            ),
             'queryColumnType' => 
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'columnType' => 
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => 'Pimcore\\Model\\Object\\Data\\QuantityValue',
             'name' => 'display',
             'title' => 'Displaydiagonale',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => false,
             'index' => true,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => true,
          )),
          2 => 
          Pimcore\Model\Object\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => '1',
             'validUnits' => 
            array (
              0 => '1',
            ),
             'queryColumnType' => 
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'columnType' => 
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => 'Pimcore\\Model\\Object\\Data\\QuantityValue',
             'name' => 'memory',
             'title' => 'Speicherkapazität',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          3 => 
          Pimcore\Model\Object\ClassDefinition\Data\Image::__set_state(array(
             'fieldtype' => 'image',
             'width' => '',
             'height' => '',
             'uploadPath' => '/products/devices',
             'queryColumnType' => 'int(11)',
             'columnType' => 'int(11)',
             'phpdocType' => '\\Pimcore\\Model\\Asset\\Image',
             'name' => 'deviceImage',
             'title' => 'Geräteabbild',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => false,
             'index' => true,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => true,
          )),
          4 => 
          Pimcore\Model\Object\ClassDefinition\Data\Wysiwyg::__set_state(array(
             'fieldtype' => 'wysiwyg',
             'width' => '',
             'height' => '',
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => 'string',
             'toolbarConfig' => '',
             'name' => 'description',
             'title' => 'Beschreibung',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          5 => 
          Pimcore\Model\Object\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'regex' => '',
             'name' => 'color',
             'title' => 'Farbe',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => NULL,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => NULL,
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => true,
   'linkGeneratorReference' => '',
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'dao' => NULL,
));
