<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: yes
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- distribution_id [input]
- link [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\DistributionInformation\Listing getByDistribution_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\DistributionInformation\Listing getByLink ($value, $limit = 0) 
*/

class DistributionInformation extends Concrete {

public $o_classId = 9;
public $o_className = "distributionInformation";
public $distribution_id;
public $link;


/**
* @param array $values
* @return \Pimcore\Model\Object\DistributionInformation
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get distribution_id - Distributor ID
* @return string
*/
public function getDistribution_id () {
	$preValue = $this->preGetValue("distribution_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->distribution_id;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("distribution_id")->isEmpty($data)) {
		return $this->getValueFromParent("distribution_id");
	}
	return $data;
}

/**
* Set distribution_id - Distributor ID
* @param string $distribution_id
* @return \Pimcore\Model\Object\DistributionInformation
*/
public function setDistribution_id ($distribution_id) {
	$this->distribution_id = $distribution_id;
	return $this;
}

/**
* Get link - Link
* @return string
*/
public function getLink () {
	$preValue = $this->preGetValue("link"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->link;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("link")->isEmpty($data)) {
		return $this->getValueFromParent("link");
	}
	return $data;
}

/**
* Set link - Link
* @param string $link
* @return \Pimcore\Model\Object\DistributionInformation
*/
public function setLink ($link) {
	$this->link = $link;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

