<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (2)


Fields Summary: 
- distributor [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\Distributor\Listing getByDistributor ($value, $limit = 0) 
*/

class Distributor extends Concrete {

public $o_classId = 4;
public $o_className = "distributor";
public $distributor;


/**
* @param array $values
* @return \Pimcore\Model\Object\Distributor
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get distributor - distributor
* @return string
*/
public function getDistributor () {
	$preValue = $this->preGetValue("distributor"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->distributor;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("distributor")->isEmpty($data)) {
		return $this->getValueFromParent("distributor");
	}
	return $data;
}

/**
* Set distributor - distributor
* @param string $distributor
* @return \Pimcore\Model\Object\Distributor
*/
public function setDistributor ($distributor) {
	$this->distributor = $distributor;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

