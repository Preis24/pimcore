<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- Name [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\PackageItem\Listing getByName ($value, $limit = 0) 
*/

class PackageItem extends Concrete {

public $o_classId = 11;
public $o_className = "packageItem";
public $Name;


/**
* @param array $values
* @return \Pimcore\Model\Object\PackageItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("Name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Name;
	return $data;
}

/**
* Set Name - Name
* @param string $Name
* @return \Pimcore\Model\Object\PackageItem
*/
public function setName ($Name) {
	$this->Name = $Name;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

