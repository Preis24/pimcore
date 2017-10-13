<?php 

/** 
* Generated at: 2017-09-12T14:33:36+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- Input [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\NewClassToCreate\Listing getByInput ($value, $limit = 0) 
*/

class NewClassToCreate extends Concrete {

public $o_classId = 16;
public $o_className = "NewClassToCreate";
public $Input;


/**
* @param array $values
* @return \Pimcore\Model\Object\NewClassToCreate
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Input - Input
* @return string
*/
public function getInput () {
	$preValue = $this->preGetValue("Input"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Input;
	return $data;
}

/**
* Set Input - Input
* @param string $Input
* @return \Pimcore\Model\Object\NewClassToCreate
*/
public function setInput ($Input) {
	$this->Input = $Input;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

