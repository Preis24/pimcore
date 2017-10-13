<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (2)


Fields Summary: 
- name [input]
- display [quantityValue]
- memory [quantityValue]
- deviceImage [image]
- description [wysiwyg]
- color [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\Device\Listing getByName ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Device\Listing getByDisplay ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Device\Listing getByMemory ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Device\Listing getByDeviceImage ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Device\Listing getByDescription ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Device\Listing getByColor ($value, $limit = 0) 
*/

class Device extends \Pimcore\Model\Object\DistributionInformation {

public $o_classId = 2;
public $o_className = "device";
public $name;
public $display;
public $memory;
public $deviceImage;
public $description;
public $color;


/**
* @param array $values
* @return \Pimcore\Model\Object\Device
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - name
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
* Set name - name
* @param string $name
* @return \Pimcore\Model\Object\Device
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get display - Displaydiagonale
* @return \Pimcore\Model\Object\Data\QuantityValue
*/
public function getDisplay () {
	$preValue = $this->preGetValue("display"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->display;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("display")->isEmpty($data)) {
		return $this->getValueFromParent("display");
	}
	return $data;
}

/**
* Set display - Displaydiagonale
* @param \Pimcore\Model\Object\Data\QuantityValue $display
* @return \Pimcore\Model\Object\Device
*/
public function setDisplay ($display) {
	$this->display = $display;
	return $this;
}

/**
* Get memory - Speicherkapazität
* @return \Pimcore\Model\Object\Data\QuantityValue
*/
public function getMemory () {
	$preValue = $this->preGetValue("memory"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->memory;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("memory")->isEmpty($data)) {
		return $this->getValueFromParent("memory");
	}
	return $data;
}

/**
* Set memory - Speicherkapazität
* @param \Pimcore\Model\Object\Data\QuantityValue $memory
* @return \Pimcore\Model\Object\Device
*/
public function setMemory ($memory) {
	$this->memory = $memory;
	return $this;
}

/**
* Get deviceImage - Geräteabbild
* @return \Pimcore\Model\Asset\Image
*/
public function getDeviceImage () {
	$preValue = $this->preGetValue("deviceImage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deviceImage;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("deviceImage")->isEmpty($data)) {
		return $this->getValueFromParent("deviceImage");
	}
	return $data;
}

/**
* Set deviceImage - Geräteabbild
* @param \Pimcore\Model\Asset\Image $deviceImage
* @return \Pimcore\Model\Object\Device
*/
public function setDeviceImage ($deviceImage) {
	$this->deviceImage = $deviceImage;
	return $this;
}

/**
* Get description - Beschreibung
* @return string
*/
public function getDescription () {
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("description")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("description")->isEmpty($data)) {
		return $this->getValueFromParent("description");
	}
	return $data;
}

/**
* Set description - Beschreibung
* @param string $description
* @return \Pimcore\Model\Object\Device
*/
public function setDescription ($description) {
	$this->description = $description;
	return $this;
}

/**
* Get color - Farbe
* @return string
*/
public function getColor () {
	$preValue = $this->preGetValue("color"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->color;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("color")->isEmpty($data)) {
		return $this->getValueFromParent("color");
	}
	return $data;
}

/**
* Set color - Farbe
* @param string $color
* @return \Pimcore\Model\Object\Device
*/
public function setColor ($color) {
	$this->color = $color;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

