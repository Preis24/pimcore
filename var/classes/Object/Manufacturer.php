<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (2)


Fields Summary: 
- manufacturer [input]
- logo [image]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\Manufacturer\Listing getByManufacturer ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Manufacturer\Listing getByLogo ($value, $limit = 0) 
*/

class Manufacturer extends Concrete {

public $o_classId = 3;
public $o_className = "manufacturer";
public $manufacturer;
public $logo;


/**
* @param array $values
* @return \Pimcore\Model\Object\Manufacturer
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get manufacturer - Hersteller
* @return string
*/
public function getManufacturer () {
	$preValue = $this->preGetValue("manufacturer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->manufacturer;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("manufacturer")->isEmpty($data)) {
		return $this->getValueFromParent("manufacturer");
	}
	return $data;
}

/**
* Set manufacturer - Hersteller
* @param string $manufacturer
* @return \Pimcore\Model\Object\Manufacturer
*/
public function setManufacturer ($manufacturer) {
	$this->manufacturer = $manufacturer;
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
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("logo")->isEmpty($data)) {
		return $this->getValueFromParent("logo");
	}
	return $data;
}

/**
* Set logo - Logo
* @param \Pimcore\Model\Asset\Image $logo
* @return \Pimcore\Model\Object\Manufacturer
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

