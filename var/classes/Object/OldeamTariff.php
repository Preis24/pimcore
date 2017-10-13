<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- tarif_id [input]
- tarifname [input]
- tariff_type [input]
- monatlich_gesamt [input]
- anschlusspreis [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\OldeamTariff\Listing getByTarif_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\OldeamTariff\Listing getByTarifname ($value, $limit = 0) 
* @method \Pimcore\Model\Object\OldeamTariff\Listing getByTariff_type ($value, $limit = 0) 
* @method \Pimcore\Model\Object\OldeamTariff\Listing getByMonatlich_gesamt ($value, $limit = 0) 
* @method \Pimcore\Model\Object\OldeamTariff\Listing getByAnschlusspreis ($value, $limit = 0) 
*/

class OldeamTariff extends Concrete {

public $o_classId = 10;
public $o_className = "OldeamTariff";
public $tarif_id;
public $tarifname;
public $tariff_type;
public $monatlich_gesamt;
public $anschlusspreis;


/**
* @param array $values
* @return \Pimcore\Model\Object\OldeamTariff
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get tarif_id - tarif_id
* @return string
*/
public function getTarif_id () {
	$preValue = $this->preGetValue("tarif_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tarif_id;
	return $data;
}

/**
* Set tarif_id - tarif_id
* @param string $tarif_id
* @return \Pimcore\Model\Object\OldeamTariff
*/
public function setTarif_id ($tarif_id) {
	$this->tarif_id = $tarif_id;
	return $this;
}

/**
* Get tarifname - tarifname
* @return string
*/
public function getTarifname () {
	$preValue = $this->preGetValue("tarifname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tarifname;
	return $data;
}

/**
* Set tarifname - tarifname
* @param string $tarifname
* @return \Pimcore\Model\Object\OldeamTariff
*/
public function setTarifname ($tarifname) {
	$this->tarifname = $tarifname;
	return $this;
}

/**
* Get tariff_type - tariff_type
* @return string
*/
public function getTariff_type () {
	$preValue = $this->preGetValue("tariff_type"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tariff_type;
	return $data;
}

/**
* Set tariff_type - tariff_type
* @param string $tariff_type
* @return \Pimcore\Model\Object\OldeamTariff
*/
public function setTariff_type ($tariff_type) {
	$this->tariff_type = $tariff_type;
	return $this;
}

/**
* Get monatlich_gesamt - monatlich_gesamt
* @return string
*/
public function getMonatlich_gesamt () {
	$preValue = $this->preGetValue("monatlich_gesamt"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->monatlich_gesamt;
	return $data;
}

/**
* Set monatlich_gesamt - monatlich_gesamt
* @param string $monatlich_gesamt
* @return \Pimcore\Model\Object\OldeamTariff
*/
public function setMonatlich_gesamt ($monatlich_gesamt) {
	$this->monatlich_gesamt = $monatlich_gesamt;
	return $this;
}

/**
* Get anschlusspreis - anschlusspreis
* @return string
*/
public function getAnschlusspreis () {
	$preValue = $this->preGetValue("anschlusspreis"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->anschlusspreis;
	return $data;
}

/**
* Set anschlusspreis - anschlusspreis
* @param string $anschlusspreis
* @return \Pimcore\Model\Object\OldeamTariff
*/
public function setAnschlusspreis ($anschlusspreis) {
	$this->anschlusspreis = $anschlusspreis;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

