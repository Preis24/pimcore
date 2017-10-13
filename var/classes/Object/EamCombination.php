<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- artikel_id [input]
- preis_einmalig [input]
- tarif_id [input]
- wkz [input]
- article [href]
- tariff [href]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\EamCombination\Listing getByArtikel_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamCombination\Listing getByPreis_einmalig ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamCombination\Listing getByTarif_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamCombination\Listing getByWkz ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamCombination\Listing getByArticle ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamCombination\Listing getByTariff ($value, $limit = 0) 
*/

class EamCombination extends Concrete {

public $o_classId = 15;
public $o_className = "eamCombination";
public $artikel_id;
public $preis_einmalig;
public $tarif_id;
public $wkz;
public $article;
public $tariff;


/**
* @param array $values
* @return \Pimcore\Model\Object\EamCombination
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get artikel_id - artikel_id
* @return string
*/
public function getArtikel_id () {
	$preValue = $this->preGetValue("artikel_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->artikel_id;
	return $data;
}

/**
* Set artikel_id - artikel_id
* @param string $artikel_id
* @return \Pimcore\Model\Object\EamCombination
*/
public function setArtikel_id ($artikel_id) {
	$this->artikel_id = $artikel_id;
	return $this;
}

/**
* Get preis_einmalig - preis_einmalig
* @return string
*/
public function getPreis_einmalig () {
	$preValue = $this->preGetValue("preis_einmalig"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->preis_einmalig;
	return $data;
}

/**
* Set preis_einmalig - preis_einmalig
* @param string $preis_einmalig
* @return \Pimcore\Model\Object\EamCombination
*/
public function setPreis_einmalig ($preis_einmalig) {
	$this->preis_einmalig = $preis_einmalig;
	return $this;
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
* @return \Pimcore\Model\Object\EamCombination
*/
public function setTarif_id ($tarif_id) {
	$this->tarif_id = $tarif_id;
	return $this;
}

/**
* Get wkz - wkz
* @return string
*/
public function getWkz () {
	$preValue = $this->preGetValue("wkz"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wkz;
	return $data;
}

/**
* Set wkz - wkz
* @param string $wkz
* @return \Pimcore\Model\Object\EamCombination
*/
public function setWkz ($wkz) {
	$this->wkz = $wkz;
	return $this;
}

/**
* Get article - article
* @return \Pimcore\Model\Object\eamArticle
*/
public function getArticle () {
	$preValue = $this->preGetValue("article"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("article")->preGetData($this);
	return $data;
}

/**
* Set article - article
* @param \Pimcore\Model\Object\eamArticle $article
* @return \Pimcore\Model\Object\EamCombination
*/
public function setArticle ($article) {
	$this->article = $this->getClass()->getFieldDefinition("article")->preSetData($this, $article);
	return $this;
}

/**
* Get tariff - tariff
* @return \Pimcore\Model\Object\eamTariff
*/
public function getTariff () {
	$preValue = $this->preGetValue("tariff"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("tariff")->preGetData($this);
	return $data;
}

/**
* Set tariff - tariff
* @param \Pimcore\Model\Object\eamTariff $tariff
* @return \Pimcore\Model\Object\EamCombination
*/
public function setTariff ($tariff) {
	$this->tariff = $this->getClass()->getFieldDefinition("tariff")->preSetData($this, $tariff);
	return $this;
}

protected static $_relationFields = array (
  'article' => 
  array (
    'type' => 'href',
  ),
  'tariff' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'article',
  1 => 'tariff',
);

}

