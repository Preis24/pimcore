<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- name [input]
- logo [image]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\Provider\Listing getByName ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Provider\Listing getByLogo ($value, $limit = 0) 
*/

class Provider extends Concrete {

public $o_classId = 7;
public $o_className = "provider";
public $name;
public $logo;


/**
* @param array $values
* @return \Pimcore\Model\Object\Provider
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Provider
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	return $data;
}

/**
* Set name - Provider
* @param string $name
* @return \Pimcore\Model\Object\Provider
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get logo - Logo
* @return \Pimcore\Model\Asset\Image
*/
public function getLogo () {
	$preValue = $this->preGetValue("logo"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->logo;
	return $data;
}

/**
* Set logo - Logo
* @param \Pimcore\Model\Asset\Image $logo
* @return \Pimcore\Model\Object\Provider
*/
public function setLogo ($logo) {
	$this->logo = $logo;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

