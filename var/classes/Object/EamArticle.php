<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- artikel_id [numeric]
- artikel_id_EAN [input]
- anzeigefarbe_id [numeric]
- archivartikel [numeric]
- betriebssystem [numeric]
- bezeichnung [input]
- ek_preis [input]
- vk_preis [input]
- farbe_bezeichnung [input]
- farbe_hexcode [input]
- friendsurance_mtl [input]
- hersteller [input]
- kategorie [input]
- kurzform [input]
- lagerbestand [input]
- lieferumfang [input]
- lieferzeit_id [input]
- mpn [input]
- speicher [input]
- starttarif_id [input]
- tablet [input]
- top_variation [input]
- variation [input]
- vormerken [input]
- zubehoer [input]
- test [fieldcollections]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\EamArticle\Listing getByArtikel_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByArtikel_id_EAN ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByAnzeigefarbe_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByArchivartikel ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByBetriebssystem ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByBezeichnung ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByEk_preis ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByVk_preis ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByFarbe_bezeichnung ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByFarbe_hexcode ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByFriendsurance_mtl ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByHersteller ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByKategorie ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByKurzform ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByLagerbestand ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByLieferumfang ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByLieferzeit_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByMpn ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getBySpeicher ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByStarttarif_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByTablet ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByTop_variation ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByVariation ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByVormerken ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByZubehoer ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticle\Listing getByTest ($value, $limit = 0) 
*/

class EamArticle extends Concrete {

public $o_classId = 12;
public $o_className = "eamArticle";
public $artikel_id;
public $artikel_id_EAN;
public $anzeigefarbe_id;
public $archivartikel;
public $betriebssystem;
public $bezeichnung;
public $ek_preis;
public $vk_preis;
public $farbe_bezeichnung;
public $farbe_hexcode;
public $friendsurance_mtl;
public $hersteller;
public $kategorie;
public $kurzform;
public $lagerbestand;
public $lieferumfang;
public $lieferzeit_id;
public $mpn;
public $speicher;
public $starttarif_id;
public $tablet;
public $top_variation;
public $variation;
public $vormerken;
public $zubehoer;
public $test;


/**
* @param array $values
* @return \Pimcore\Model\Object\EamArticle
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get artikel_id - artikel_id
* @return int
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
* @param int $artikel_id
* @return \Pimcore\Model\Object\EamArticle
*/
public function setArtikel_id ($artikel_id) {
	$this->artikel_id = $artikel_id;
	return $this;
}

/**
* Get artikel_id_EAN - artikel_id_EAN
* @return string
*/
public function getArtikel_id_EAN () {
	$preValue = $this->preGetValue("artikel_id_EAN"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->artikel_id_EAN;
	return $data;
}

/**
* Set artikel_id_EAN - artikel_id_EAN
* @param string $artikel_id_EAN
* @return \Pimcore\Model\Object\EamArticle
*/
public function setArtikel_id_EAN ($artikel_id_EAN) {
	$this->artikel_id_EAN = $artikel_id_EAN;
	return $this;
}

/**
* Get anzeigefarbe_id - anzeigefarbe_id
* @return int
*/
public function getAnzeigefarbe_id () {
	$preValue = $this->preGetValue("anzeigefarbe_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->anzeigefarbe_id;
	return $data;
}

/**
* Set anzeigefarbe_id - anzeigefarbe_id
* @param int $anzeigefarbe_id
* @return \Pimcore\Model\Object\EamArticle
*/
public function setAnzeigefarbe_id ($anzeigefarbe_id) {
	$this->anzeigefarbe_id = $anzeigefarbe_id;
	return $this;
}

/**
* Get archivartikel - archivartikel
* @return int
*/
public function getArchivartikel () {
	$preValue = $this->preGetValue("archivartikel"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->archivartikel;
	return $data;
}

/**
* Set archivartikel - archivartikel
* @param int $archivartikel
* @return \Pimcore\Model\Object\EamArticle
*/
public function setArchivartikel ($archivartikel) {
	$this->archivartikel = $archivartikel;
	return $this;
}

/**
* Get betriebssystem - betriebssystem
* @return int
*/
public function getBetriebssystem () {
	$preValue = $this->preGetValue("betriebssystem"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->betriebssystem;
	return $data;
}

/**
* Set betriebssystem - betriebssystem
* @param int $betriebssystem
* @return \Pimcore\Model\Object\EamArticle
*/
public function setBetriebssystem ($betriebssystem) {
	$this->betriebssystem = $betriebssystem;
	return $this;
}

/**
* Get bezeichnung - bezeichnung
* @return string
*/
public function getBezeichnung () {
	$preValue = $this->preGetValue("bezeichnung"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->bezeichnung;
	return $data;
}

/**
* Set bezeichnung - bezeichnung
* @param string $bezeichnung
* @return \Pimcore\Model\Object\EamArticle
*/
public function setBezeichnung ($bezeichnung) {
	$this->bezeichnung = $bezeichnung;
	return $this;
}

/**
* Get ek_preis - ek_preis
* @return string
*/
public function getEk_preis () {
	$preValue = $this->preGetValue("ek_preis"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ek_preis;
	return $data;
}

/**
* Set ek_preis - ek_preis
* @param string $ek_preis
* @return \Pimcore\Model\Object\EamArticle
*/
public function setEk_preis ($ek_preis) {
	$this->ek_preis = $ek_preis;
	return $this;
}

/**
* Get vk_preis - vk_preis
* @return string
*/
public function getVk_preis () {
	$preValue = $this->preGetValue("vk_preis"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->vk_preis;
	return $data;
}

/**
* Set vk_preis - vk_preis
* @param string $vk_preis
* @return \Pimcore\Model\Object\EamArticle
*/
public function setVk_preis ($vk_preis) {
	$this->vk_preis = $vk_preis;
	return $this;
}

/**
* Get farbe_bezeichnung - farbe_bezeichnung
* @return string
*/
public function getFarbe_bezeichnung () {
	$preValue = $this->preGetValue("farbe_bezeichnung"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->farbe_bezeichnung;
	return $data;
}

/**
* Set farbe_bezeichnung - farbe_bezeichnung
* @param string $farbe_bezeichnung
* @return \Pimcore\Model\Object\EamArticle
*/
public function setFarbe_bezeichnung ($farbe_bezeichnung) {
	$this->farbe_bezeichnung = $farbe_bezeichnung;
	return $this;
}

/**
* Get farbe_hexcode - farbe_hexcode
* @return string
*/
public function getFarbe_hexcode () {
	$preValue = $this->preGetValue("farbe_hexcode"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->farbe_hexcode;
	return $data;
}

/**
* Set farbe_hexcode - farbe_hexcode
* @param string $farbe_hexcode
* @return \Pimcore\Model\Object\EamArticle
*/
public function setFarbe_hexcode ($farbe_hexcode) {
	$this->farbe_hexcode = $farbe_hexcode;
	return $this;
}

/**
* Get friendsurance_mtl - friendsurance_mtl
* @return string
*/
public function getFriendsurance_mtl () {
	$preValue = $this->preGetValue("friendsurance_mtl"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->friendsurance_mtl;
	return $data;
}

/**
* Set friendsurance_mtl - friendsurance_mtl
* @param string $friendsurance_mtl
* @return \Pimcore\Model\Object\EamArticle
*/
public function setFriendsurance_mtl ($friendsurance_mtl) {
	$this->friendsurance_mtl = $friendsurance_mtl;
	return $this;
}

/**
* Get hersteller - hersteller
* @return string
*/
public function getHersteller () {
	$preValue = $this->preGetValue("hersteller"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->hersteller;
	return $data;
}

/**
* Set hersteller - hersteller
* @param string $hersteller
* @return \Pimcore\Model\Object\EamArticle
*/
public function setHersteller ($hersteller) {
	$this->hersteller = $hersteller;
	return $this;
}

/**
* Get kategorie - kategorie
* @return string
*/
public function getKategorie () {
	$preValue = $this->preGetValue("kategorie"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->kategorie;
	return $data;
}

/**
* Set kategorie - kategorie
* @param string $kategorie
* @return \Pimcore\Model\Object\EamArticle
*/
public function setKategorie ($kategorie) {
	$this->kategorie = $kategorie;
	return $this;
}

/**
* Get kurzform - kurzform
* @return string
*/
public function getKurzform () {
	$preValue = $this->preGetValue("kurzform"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->kurzform;
	return $data;
}

/**
* Set kurzform - kurzform
* @param string $kurzform
* @return \Pimcore\Model\Object\EamArticle
*/
public function setKurzform ($kurzform) {
	$this->kurzform = $kurzform;
	return $this;
}

/**
* Get lagerbestand - lagerbestand
* @return string
*/
public function getLagerbestand () {
	$preValue = $this->preGetValue("lagerbestand"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lagerbestand;
	return $data;
}

/**
* Set lagerbestand - lagerbestand
* @param string $lagerbestand
* @return \Pimcore\Model\Object\EamArticle
*/
public function setLagerbestand ($lagerbestand) {
	$this->lagerbestand = $lagerbestand;
	return $this;
}

/**
* Get lieferumfang - lieferumfang
* @return string
*/
public function getLieferumfang () {
	$preValue = $this->preGetValue("lieferumfang"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lieferumfang;
	return $data;
}

/**
* Set lieferumfang - lieferumfang
* @param string $lieferumfang
* @return \Pimcore\Model\Object\EamArticle
*/
public function setLieferumfang ($lieferumfang) {
	$this->lieferumfang = $lieferumfang;
	return $this;
}

/**
* Get lieferzeit_id - lieferzeit_id
* @return string
*/
public function getLieferzeit_id () {
	$preValue = $this->preGetValue("lieferzeit_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lieferzeit_id;
	return $data;
}

/**
* Set lieferzeit_id - lieferzeit_id
* @param string $lieferzeit_id
* @return \Pimcore\Model\Object\EamArticle
*/
public function setLieferzeit_id ($lieferzeit_id) {
	$this->lieferzeit_id = $lieferzeit_id;
	return $this;
}

/**
* Get mpn - mpn
* @return string
*/
public function getMpn () {
	$preValue = $this->preGetValue("mpn"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->mpn;
	return $data;
}

/**
* Set mpn - mpn
* @param string $mpn
* @return \Pimcore\Model\Object\EamArticle
*/
public function setMpn ($mpn) {
	$this->mpn = $mpn;
	return $this;
}

/**
* Get speicher - speicher
* @return string
*/
public function getSpeicher () {
	$preValue = $this->preGetValue("speicher"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->speicher;
	return $data;
}

/**
* Set speicher - speicher
* @param string $speicher
* @return \Pimcore\Model\Object\EamArticle
*/
public function setSpeicher ($speicher) {
	$this->speicher = $speicher;
	return $this;
}

/**
* Get starttarif_id - starttarif_id
* @return string
*/
public function getStarttarif_id () {
	$preValue = $this->preGetValue("starttarif_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->starttarif_id;
	return $data;
}

/**
* Set starttarif_id - starttarif_id
* @param string $starttarif_id
* @return \Pimcore\Model\Object\EamArticle
*/
public function setStarttarif_id ($starttarif_id) {
	$this->starttarif_id = $starttarif_id;
	return $this;
}

/**
* Get tablet - tablet
* @return string
*/
public function getTablet () {
	$preValue = $this->preGetValue("tablet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tablet;
	return $data;
}

/**
* Set tablet - tablet
* @param string $tablet
* @return \Pimcore\Model\Object\EamArticle
*/
public function setTablet ($tablet) {
	$this->tablet = $tablet;
	return $this;
}

/**
* Get top_variation - top_variation
* @return string
*/
public function getTop_variation () {
	$preValue = $this->preGetValue("top_variation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->top_variation;
	return $data;
}

/**
* Set top_variation - top_variation
* @param string $top_variation
* @return \Pimcore\Model\Object\EamArticle
*/
public function setTop_variation ($top_variation) {
	$this->top_variation = $top_variation;
	return $this;
}

/**
* Get variation - variation
* @return string
*/
public function getVariation () {
	$preValue = $this->preGetValue("variation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->variation;
	return $data;
}

/**
* Set variation - variation
* @param string $variation
* @return \Pimcore\Model\Object\EamArticle
*/
public function setVariation ($variation) {
	$this->variation = $variation;
	return $this;
}

/**
* Get vormerken - vormerken
* @return string
*/
public function getVormerken () {
	$preValue = $this->preGetValue("vormerken"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->vormerken;
	return $data;
}

/**
* Set vormerken - vormerken
* @param string $vormerken
* @return \Pimcore\Model\Object\EamArticle
*/
public function setVormerken ($vormerken) {
	$this->vormerken = $vormerken;
	return $this;
}

/**
* Get zubehoer - zubehoer
* @return string
*/
public function getZubehoer () {
	$preValue = $this->preGetValue("zubehoer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->zubehoer;
	return $data;
}

/**
* Set zubehoer - zubehoer
* @param string $zubehoer
* @return \Pimcore\Model\Object\EamArticle
*/
public function setZubehoer ($zubehoer) {
	$this->zubehoer = $zubehoer;
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getTest () {
	$preValue = $this->preGetValue("test"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("test")->preGetData($this);
	 return $data;
}

/**
* Set test - test
* @param \Pimcore\Model\Object\Fieldcollection $test
* @return \Pimcore\Model\Object\EamArticle
*/
public function setTest ($test) {
	$this->test = $this->getClass()->getFieldDefinition("test")->preSetData($this, $test);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
  0 => 'test',
);

}

