<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: yes
* Variants: no
* Changed by: admin (2)


Fields Summary: 
*/ 

namespace Pimcore\Model\Object;



/**
*/

class Generic extends Concrete {

public $o_classId = 1;
public $o_className = "generic";


/**
* @param array $values
* @return \Pimcore\Model\Object\Generic
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

}

