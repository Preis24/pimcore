<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (2)


Fields Summary: 
- price_onetime [numeric]
- products [multihrefMetadata]
- rpo [numeric]
- Distributionsinformationen [href]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\Offer\Listing getByPrice_onetime ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Offer\Listing getByProducts ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Offer\Listing getByRpo ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Offer\Listing getByDistributionsinformationen ($value, $limit = 0) 
*/

class Offer extends Concrete {

public $o_classId = 6;
public $o_className = "offer";
public $price_onetime;
public $products;
public $rpo;
public $Distributionsinformationen;


/**
* @param array $values
* @return \Pimcore\Model\Object\Offer
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get price_onetime - Einmalige Kosten
* @return float
*/
public function getPrice_onetime () {
	$preValue = $this->preGetValue("price_onetime"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->price_onetime;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("price_onetime")->isEmpty($data)) {
		return $this->getValueFromParent("price_onetime");
	}
	return $data;
}

/**
* Set price_onetime - Einmalige Kosten
* @param float $price_onetime
* @return \Pimcore\Model\Object\Offer
*/
public function setPrice_onetime ($price_onetime) {
	$this->price_onetime = $price_onetime;
	return $this;
}

/**
* Get products - Produkte
* @return \Pimcore\Model\Object\Data\ElementMetadata[]
*/
public function getProducts () {
	$preValue = $this->preGetValue("products"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("products")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("products")->isEmpty($data)) {
		return $this->getValueFromParent("products");
	}
	return $data;
}

/**
* Set products - Produkte
* @param \Pimcore\Model\Object\Data\ElementMetadata[] $products
* @return \Pimcore\Model\Object\Offer
*/
public function setProducts ($products) {
	$this->products = $this->getClass()->getFieldDefinition("products")->preSetData($this, $products);
	return $this;
}

/**
* Get rpo - RPO
* @return float
*/
public function getRpo () {
	$preValue = $this->preGetValue("rpo"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->rpo;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("rpo")->isEmpty($data)) {
		return $this->getValueFromParent("rpo");
	}
	return $data;
}

/**
* Set rpo - RPO
* @param float $rpo
* @return \Pimcore\Model\Object\Offer
*/
public function setRpo ($rpo) {
	$this->rpo = $rpo;
	return $this;
}

/**
* Get Distributionsinformationen - Distributionsinformationen
* @return \Pimcore\Model\Object\eamTariff
*/
public function getDistributionsinformationen () {
	$preValue = $this->preGetValue("Distributionsinformationen"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("Distributionsinformationen")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Distributionsinformationen")->isEmpty($data)) {
		return $this->getValueFromParent("Distributionsinformationen");
	}
	return $data;
}

/**
* Set Distributionsinformationen - Distributionsinformationen
* @param \Pimcore\Model\Object\eamTariff $Distributionsinformationen
* @return \Pimcore\Model\Object\Offer
*/
public function setDistributionsinformationen ($Distributionsinformationen) {
	$this->Distributionsinformationen = $this->getClass()->getFieldDefinition("Distributionsinformationen")->preSetData($this, $Distributionsinformationen);
	return $this;
}

protected static $_relationFields = array (
  'products' => 
  array (
    'type' => 'multihrefMetadata',
  ),
  'Distributionsinformationen' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'products',
  1 => 'Distributionsinformationen',
);

}

