<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (2)


Fields Summary: 
- name [input]
- data_volume [input]
- connection_speed_max [quantityValue]
- connection_speed_throttled [input]
- provider [href]
- price_monthly [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\Tariff\Listing getByName ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Tariff\Listing getByData_volume ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Tariff\Listing getByConnection_speed_max ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Tariff\Listing getByConnection_speed_throttled ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Tariff\Listing getByProvider ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Tariff\Listing getByPrice_monthly ($value, $limit = 0) 
*/

class Tariff extends \Pimcore\Model\Object\DistributionInformation {

public $o_classId = 5;
public $o_className = "tariff";
public $name;
public $data_volume;
public $connection_speed_max;
public $connection_speed_throttled;
public $provider;
public $price_monthly;


/**
* @param array $values
* @return \Pimcore\Model\Object\Tariff
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("name")->isEmpty($data)) {
		return $this->getValueFromParent("name");
	}
	return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\Object\Tariff
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get data_volume - Datenvolumen
* @return string
*/
public function getData_volume () {
	$preValue = $this->preGetValue("data_volume"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->data_volume;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("data_volume")->isEmpty($data)) {
		return $this->getValueFromParent("data_volume");
	}
	return $data;
}

/**
* Set data_volume - Datenvolumen
* @param string $data_volume
* @return \Pimcore\Model\Object\Tariff
*/
public function setData_volume ($data_volume) {
	$this->data_volume = $data_volume;
	return $this;
}

/**
* Get connection_speed_max - Verbindungsgeschwindigkeit max.
* @return \Pimcore\Model\Object\Data\QuantityValue
*/
public function getConnection_speed_max () {
	$preValue = $this->preGetValue("connection_speed_max"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->connection_speed_max;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("connection_speed_max")->isEmpty($data)) {
		return $this->getValueFromParent("connection_speed_max");
	}
	return $data;
}

/**
* Set connection_speed_max - Verbindungsgeschwindigkeit max.
* @param \Pimcore\Model\Object\Data\QuantityValue $connection_speed_max
* @return \Pimcore\Model\Object\Tariff
*/
public function setConnection_speed_max ($connection_speed_max) {
	$this->connection_speed_max = $connection_speed_max;
	return $this;
}

/**
* Get connection_speed_throttled - Verbindungsgeschwindigkeit gedrosselt
* @return string
*/
public function getConnection_speed_throttled () {
	$preValue = $this->preGetValue("connection_speed_throttled"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->connection_speed_throttled;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("connection_speed_throttled")->isEmpty($data)) {
		return $this->getValueFromParent("connection_speed_throttled");
	}
	return $data;
}

/**
* Set connection_speed_throttled - Verbindungsgeschwindigkeit gedrosselt
* @param string $connection_speed_throttled
* @return \Pimcore\Model\Object\Tariff
*/
public function setConnection_speed_throttled ($connection_speed_throttled) {
	$this->connection_speed_throttled = $connection_speed_throttled;
	return $this;
}

/**
* Get provider - Provider
* @return \Pimcore\Model\Object\provider
*/
public function getProvider () {
	$preValue = $this->preGetValue("provider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("provider")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("provider")->isEmpty($data)) {
		return $this->getValueFromParent("provider");
	}
	return $data;
}

/**
* Set provider - Provider
* @param \Pimcore\Model\Object\provider $provider
* @return \Pimcore\Model\Object\Tariff
*/
public function setProvider ($provider) {
	$this->provider = $this->getClass()->getFieldDefinition("provider")->preSetData($this, $provider);
	return $this;
}

/**
* Get price_monthly - price_monthly
* @return string
*/
public function getPrice_monthly () {
	$preValue = $this->preGetValue("price_monthly"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->price_monthly;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("price_monthly")->isEmpty($data)) {
		return $this->getValueFromParent("price_monthly");
	}
	return $data;
}

/**
* Set price_monthly - price_monthly
* @param string $price_monthly
* @return \Pimcore\Model\Object\Tariff
*/
public function setPrice_monthly ($price_monthly) {
	$this->price_monthly = $price_monthly;
	return $this;
}

protected static $_relationFields = array (
  'provider' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'provider',
);

}

