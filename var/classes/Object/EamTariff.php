<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- anschlusspreis [input]
- art [input]
- dauer_grundpreis [input]
- erstattung_anschlusspreis [input]
- kategorie [input]
- kein_firmenkunde [input]
- laufzeit [input]
- monatlich_gesamt [input]
- monatlich_rechtliches_flag [input]
- netz [input]
- netz_id [input]
- portierung [input]
- provider [input]
- provider_id [input]
- sonderoptionen [input]
- spaeterer_grundpreis [input]
- tarif_id [input]
- tarifdetails [input]
- tarifname [input]
- transparenzverordnung_pdf_datetime [input]
- transparenzverordnung_pdf_url [input]
- tariff_type [input]
- mindestvertragslaufzeit [input]
- rechnung_online [input]
- taktung [input]
- eu_vorteil [input]
- flatrate_festnetz [input]
- flatrate_allnet [input]
- flatrate_sms [input]
- flatrate_mms [input]
- internet [input]
- inklusivdatenvolumen [input]
- geschwindigkeit_max [input]
- geschwindigkeit_reduziert [input]
- internet_telefonie [input]
- hot_spot_flat [input]
- lte [input]
- bonus [input]
- daten_automatik [input]
- festnetzrufnummer [input]
- preis_mms [input]
- preis_sms [input]
- grundpreis_erste_12_monate [input]
- grundpreis_ab_monat_13 [input]
- grundpreis_erste_24_monate [input]
- grundpreis_ab_monat_25 [input]
- monatlicher_grundpreis [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\EamTariff\Listing getByAnschlusspreis ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByArt ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByDauer_grundpreis ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByErstattung_anschlusspreis ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByKategorie ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByKein_firmenkunde ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByLaufzeit ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByMonatlich_gesamt ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByMonatlich_rechtliches_flag ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByNetz ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByNetz_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByPortierung ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByProvider ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByProvider_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getBySonderoptionen ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getBySpaeterer_grundpreis ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByTarif_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByTarifdetails ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByTarifname ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByTransparenzverordnung_pdf_datetime ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByTransparenzverordnung_pdf_url ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByTariff_type ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByMindestvertragslaufzeit ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByRechnung_online ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByTaktung ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByEu_vorteil ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByFlatrate_festnetz ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByFlatrate_allnet ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByFlatrate_sms ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByFlatrate_mms ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByInternet ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByInklusivdatenvolumen ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByGeschwindigkeit_max ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByGeschwindigkeit_reduziert ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByInternet_telefonie ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByHot_spot_flat ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByLte ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByBonus ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByDaten_automatik ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByFestnetzrufnummer ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByPreis_mms ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByPreis_sms ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByGrundpreis_erste_12_monate ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByGrundpreis_ab_monat_13 ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByGrundpreis_erste_24_monate ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByGrundpreis_ab_monat_25 ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamTariff\Listing getByMonatlicher_grundpreis ($value, $limit = 0) 
*/

class EamTariff extends Concrete {

public $o_classId = 14;
public $o_className = "eamTariff";
public $anschlusspreis;
public $art;
public $dauer_grundpreis;
public $erstattung_anschlusspreis;
public $kategorie;
public $kein_firmenkunde;
public $laufzeit;
public $monatlich_gesamt;
public $monatlich_rechtliches_flag;
public $netz;
public $netz_id;
public $portierung;
public $provider;
public $provider_id;
public $sonderoptionen;
public $spaeterer_grundpreis;
public $tarif_id;
public $tarifdetails;
public $tarifname;
public $transparenzverordnung_pdf_datetime;
public $transparenzverordnung_pdf_url;
public $tariff_type;
public $mindestvertragslaufzeit;
public $rechnung_online;
public $taktung;
public $eu_vorteil;
public $flatrate_festnetz;
public $flatrate_allnet;
public $flatrate_sms;
public $flatrate_mms;
public $internet;
public $inklusivdatenvolumen;
public $geschwindigkeit_max;
public $geschwindigkeit_reduziert;
public $internet_telefonie;
public $hot_spot_flat;
public $lte;
public $bonus;
public $daten_automatik;
public $festnetzrufnummer;
public $preis_mms;
public $preis_sms;
public $grundpreis_erste_12_monate;
public $grundpreis_ab_monat_13;
public $grundpreis_erste_24_monate;
public $grundpreis_ab_monat_25;
public $monatlicher_grundpreis;


/**
* @param array $values
* @return \Pimcore\Model\Object\EamTariff
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
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
* @return \Pimcore\Model\Object\EamTariff
*/
public function setAnschlusspreis ($anschlusspreis) {
	$this->anschlusspreis = $anschlusspreis;
	return $this;
}

/**
* Get art - art
* @return string
*/
public function getArt () {
	$preValue = $this->preGetValue("art"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->art;
	return $data;
}

/**
* Set art - art
* @param string $art
* @return \Pimcore\Model\Object\EamTariff
*/
public function setArt ($art) {
	$this->art = $art;
	return $this;
}

/**
* Get dauer_grundpreis - dauer_grundpreis
* @return string
*/
public function getDauer_grundpreis () {
	$preValue = $this->preGetValue("dauer_grundpreis"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->dauer_grundpreis;
	return $data;
}

/**
* Set dauer_grundpreis - dauer_grundpreis
* @param string $dauer_grundpreis
* @return \Pimcore\Model\Object\EamTariff
*/
public function setDauer_grundpreis ($dauer_grundpreis) {
	$this->dauer_grundpreis = $dauer_grundpreis;
	return $this;
}

/**
* Get erstattung_anschlusspreis - erstattung_anschlusspreis
* @return string
*/
public function getErstattung_anschlusspreis () {
	$preValue = $this->preGetValue("erstattung_anschlusspreis"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->erstattung_anschlusspreis;
	return $data;
}

/**
* Set erstattung_anschlusspreis - erstattung_anschlusspreis
* @param string $erstattung_anschlusspreis
* @return \Pimcore\Model\Object\EamTariff
*/
public function setErstattung_anschlusspreis ($erstattung_anschlusspreis) {
	$this->erstattung_anschlusspreis = $erstattung_anschlusspreis;
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
* @return \Pimcore\Model\Object\EamTariff
*/
public function setKategorie ($kategorie) {
	$this->kategorie = $kategorie;
	return $this;
}

/**
* Get kein_firmenkunde - kein_firmenkunde
* @return string
*/
public function getKein_firmenkunde () {
	$preValue = $this->preGetValue("kein_firmenkunde"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->kein_firmenkunde;
	return $data;
}

/**
* Set kein_firmenkunde - kein_firmenkunde
* @param string $kein_firmenkunde
* @return \Pimcore\Model\Object\EamTariff
*/
public function setKein_firmenkunde ($kein_firmenkunde) {
	$this->kein_firmenkunde = $kein_firmenkunde;
	return $this;
}

/**
* Get laufzeit - laufzeit
* @return string
*/
public function getLaufzeit () {
	$preValue = $this->preGetValue("laufzeit"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->laufzeit;
	return $data;
}

/**
* Set laufzeit - laufzeit
* @param string $laufzeit
* @return \Pimcore\Model\Object\EamTariff
*/
public function setLaufzeit ($laufzeit) {
	$this->laufzeit = $laufzeit;
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
* @return \Pimcore\Model\Object\EamTariff
*/
public function setMonatlich_gesamt ($monatlich_gesamt) {
	$this->monatlich_gesamt = $monatlich_gesamt;
	return $this;
}

/**
* Get monatlich_rechtliches_flag - monatlich_rechtliches_flag
* @return string
*/
public function getMonatlich_rechtliches_flag () {
	$preValue = $this->preGetValue("monatlich_rechtliches_flag"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->monatlich_rechtliches_flag;
	return $data;
}

/**
* Set monatlich_rechtliches_flag - monatlich_rechtliches_flag
* @param string $monatlich_rechtliches_flag
* @return \Pimcore\Model\Object\EamTariff
*/
public function setMonatlich_rechtliches_flag ($monatlich_rechtliches_flag) {
	$this->monatlich_rechtliches_flag = $monatlich_rechtliches_flag;
	return $this;
}

/**
* Get netz - netz
* @return string
*/
public function getNetz () {
	$preValue = $this->preGetValue("netz"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->netz;
	return $data;
}

/**
* Set netz - netz
* @param string $netz
* @return \Pimcore\Model\Object\EamTariff
*/
public function setNetz ($netz) {
	$this->netz = $netz;
	return $this;
}

/**
* Get netz_id - netz_id
* @return string
*/
public function getNetz_id () {
	$preValue = $this->preGetValue("netz_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->netz_id;
	return $data;
}

/**
* Set netz_id - netz_id
* @param string $netz_id
* @return \Pimcore\Model\Object\EamTariff
*/
public function setNetz_id ($netz_id) {
	$this->netz_id = $netz_id;
	return $this;
}

/**
* Get portierung - portierung
* @return string
*/
public function getPortierung () {
	$preValue = $this->preGetValue("portierung"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->portierung;
	return $data;
}

/**
* Set portierung - portierung
* @param string $portierung
* @return \Pimcore\Model\Object\EamTariff
*/
public function setPortierung ($portierung) {
	$this->portierung = $portierung;
	return $this;
}

/**
* Get provider - provider
* @return string
*/
public function getProvider () {
	$preValue = $this->preGetValue("provider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->provider;
	return $data;
}

/**
* Set provider - provider
* @param string $provider
* @return \Pimcore\Model\Object\EamTariff
*/
public function setProvider ($provider) {
	$this->provider = $provider;
	return $this;
}

/**
* Get provider_id - provider_id
* @return string
*/
public function getProvider_id () {
	$preValue = $this->preGetValue("provider_id"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->provider_id;
	return $data;
}

/**
* Set provider_id - provider_id
* @param string $provider_id
* @return \Pimcore\Model\Object\EamTariff
*/
public function setProvider_id ($provider_id) {
	$this->provider_id = $provider_id;
	return $this;
}

/**
* Get sonderoptionen - sonderoptionen
* @return string
*/
public function getSonderoptionen () {
	$preValue = $this->preGetValue("sonderoptionen"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->sonderoptionen;
	return $data;
}

/**
* Set sonderoptionen - sonderoptionen
* @param string $sonderoptionen
* @return \Pimcore\Model\Object\EamTariff
*/
public function setSonderoptionen ($sonderoptionen) {
	$this->sonderoptionen = $sonderoptionen;
	return $this;
}

/**
* Get spaeterer_grundpreis - spaeterer_grundpreis
* @return string
*/
public function getSpaeterer_grundpreis () {
	$preValue = $this->preGetValue("spaeterer_grundpreis"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->spaeterer_grundpreis;
	return $data;
}

/**
* Set spaeterer_grundpreis - spaeterer_grundpreis
* @param string $spaeterer_grundpreis
* @return \Pimcore\Model\Object\EamTariff
*/
public function setSpaeterer_grundpreis ($spaeterer_grundpreis) {
	$this->spaeterer_grundpreis = $spaeterer_grundpreis;
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
* @return \Pimcore\Model\Object\EamTariff
*/
public function setTarif_id ($tarif_id) {
	$this->tarif_id = $tarif_id;
	return $this;
}

/**
* Get tarifdetails - tarifdetails
* @return string
*/
public function getTarifdetails () {
	$preValue = $this->preGetValue("tarifdetails"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tarifdetails;
	return $data;
}

/**
* Set tarifdetails - tarifdetails
* @param string $tarifdetails
* @return \Pimcore\Model\Object\EamTariff
*/
public function setTarifdetails ($tarifdetails) {
	$this->tarifdetails = $tarifdetails;
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
* @return \Pimcore\Model\Object\EamTariff
*/
public function setTarifname ($tarifname) {
	$this->tarifname = $tarifname;
	return $this;
}

/**
* Get transparenzverordnung_pdf_datetime - transparenzverordnung_pdf_datetime
* @return string
*/
public function getTransparenzverordnung_pdf_datetime () {
	$preValue = $this->preGetValue("transparenzverordnung_pdf_datetime"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->transparenzverordnung_pdf_datetime;
	return $data;
}

/**
* Set transparenzverordnung_pdf_datetime - transparenzverordnung_pdf_datetime
* @param string $transparenzverordnung_pdf_datetime
* @return \Pimcore\Model\Object\EamTariff
*/
public function setTransparenzverordnung_pdf_datetime ($transparenzverordnung_pdf_datetime) {
	$this->transparenzverordnung_pdf_datetime = $transparenzverordnung_pdf_datetime;
	return $this;
}

/**
* Get transparenzverordnung_pdf_url - transparenzverordnung_pdf_url
* @return string
*/
public function getTransparenzverordnung_pdf_url () {
	$preValue = $this->preGetValue("transparenzverordnung_pdf_url"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->transparenzverordnung_pdf_url;
	return $data;
}

/**
* Set transparenzverordnung_pdf_url - transparenzverordnung_pdf_url
* @param string $transparenzverordnung_pdf_url
* @return \Pimcore\Model\Object\EamTariff
*/
public function setTransparenzverordnung_pdf_url ($transparenzverordnung_pdf_url) {
	$this->transparenzverordnung_pdf_url = $transparenzverordnung_pdf_url;
	return $this;
}

/**
* Get tariff_type - type
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
* Set tariff_type - type
* @param string $tariff_type
* @return \Pimcore\Model\Object\EamTariff
*/
public function setTariff_type ($tariff_type) {
	$this->tariff_type = $tariff_type;
	return $this;
}

/**
* Get mindestvertragslaufzeit - Mindestvertragslaufzeit
* @return string
*/
public function getMindestvertragslaufzeit () {
	$preValue = $this->preGetValue("mindestvertragslaufzeit"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->mindestvertragslaufzeit;
	return $data;
}

/**
* Set mindestvertragslaufzeit - Mindestvertragslaufzeit
* @param string $mindestvertragslaufzeit
* @return \Pimcore\Model\Object\EamTariff
*/
public function setMindestvertragslaufzeit ($mindestvertragslaufzeit) {
	$this->mindestvertragslaufzeit = $mindestvertragslaufzeit;
	return $this;
}

/**
* Get rechnung_online - Rechnung Online
* @return string
*/
public function getRechnung_online () {
	$preValue = $this->preGetValue("rechnung_online"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->rechnung_online;
	return $data;
}

/**
* Set rechnung_online - Rechnung Online
* @param string $rechnung_online
* @return \Pimcore\Model\Object\EamTariff
*/
public function setRechnung_online ($rechnung_online) {
	$this->rechnung_online = $rechnung_online;
	return $this;
}

/**
* Get taktung - taktung
* @return string
*/
public function getTaktung () {
	$preValue = $this->preGetValue("taktung"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->taktung;
	return $data;
}

/**
* Set taktung - taktung
* @param string $taktung
* @return \Pimcore\Model\Object\EamTariff
*/
public function setTaktung ($taktung) {
	$this->taktung = $taktung;
	return $this;
}

/**
* Get eu_vorteil - EU-Vorteil
* @return string
*/
public function getEu_vorteil () {
	$preValue = $this->preGetValue("eu_vorteil"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->eu_vorteil;
	return $data;
}

/**
* Set eu_vorteil - EU-Vorteil
* @param string $eu_vorteil
* @return \Pimcore\Model\Object\EamTariff
*/
public function setEu_vorteil ($eu_vorteil) {
	$this->eu_vorteil = $eu_vorteil;
	return $this;
}

/**
* Get flatrate_festnetz - flatrate_festnetz
* @return string
*/
public function getFlatrate_festnetz () {
	$preValue = $this->preGetValue("flatrate_festnetz"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->flatrate_festnetz;
	return $data;
}

/**
* Set flatrate_festnetz - flatrate_festnetz
* @param string $flatrate_festnetz
* @return \Pimcore\Model\Object\EamTariff
*/
public function setFlatrate_festnetz ($flatrate_festnetz) {
	$this->flatrate_festnetz = $flatrate_festnetz;
	return $this;
}

/**
* Get flatrate_allnet - flatrate_allnet
* @return string
*/
public function getFlatrate_allnet () {
	$preValue = $this->preGetValue("flatrate_allnet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->flatrate_allnet;
	return $data;
}

/**
* Set flatrate_allnet - flatrate_allnet
* @param string $flatrate_allnet
* @return \Pimcore\Model\Object\EamTariff
*/
public function setFlatrate_allnet ($flatrate_allnet) {
	$this->flatrate_allnet = $flatrate_allnet;
	return $this;
}

/**
* Get flatrate_sms - flatrate_sms
* @return string
*/
public function getFlatrate_sms () {
	$preValue = $this->preGetValue("flatrate_sms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->flatrate_sms;
	return $data;
}

/**
* Set flatrate_sms - flatrate_sms
* @param string $flatrate_sms
* @return \Pimcore\Model\Object\EamTariff
*/
public function setFlatrate_sms ($flatrate_sms) {
	$this->flatrate_sms = $flatrate_sms;
	return $this;
}

/**
* Get flatrate_mms - flatrate_mms
* @return string
*/
public function getFlatrate_mms () {
	$preValue = $this->preGetValue("flatrate_mms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->flatrate_mms;
	return $data;
}

/**
* Set flatrate_mms - flatrate_mms
* @param string $flatrate_mms
* @return \Pimcore\Model\Object\EamTariff
*/
public function setFlatrate_mms ($flatrate_mms) {
	$this->flatrate_mms = $flatrate_mms;
	return $this;
}

/**
* Get internet - internet
* @return string
*/
public function getInternet () {
	$preValue = $this->preGetValue("internet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->internet;
	return $data;
}

/**
* Set internet - internet
* @param string $internet
* @return \Pimcore\Model\Object\EamTariff
*/
public function setInternet ($internet) {
	$this->internet = $internet;
	return $this;
}

/**
* Get inklusivdatenvolumen - inklusivdatenvolumen
* @return string
*/
public function getInklusivdatenvolumen () {
	$preValue = $this->preGetValue("inklusivdatenvolumen"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->inklusivdatenvolumen;
	return $data;
}

/**
* Set inklusivdatenvolumen - inklusivdatenvolumen
* @param string $inklusivdatenvolumen
* @return \Pimcore\Model\Object\EamTariff
*/
public function setInklusivdatenvolumen ($inklusivdatenvolumen) {
	$this->inklusivdatenvolumen = $inklusivdatenvolumen;
	return $this;
}

/**
* Get geschwindigkeit_max - geschwindigkeit_max
* @return string
*/
public function getGeschwindigkeit_max () {
	$preValue = $this->preGetValue("geschwindigkeit_max"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->geschwindigkeit_max;
	return $data;
}

/**
* Set geschwindigkeit_max - geschwindigkeit_max
* @param string $geschwindigkeit_max
* @return \Pimcore\Model\Object\EamTariff
*/
public function setGeschwindigkeit_max ($geschwindigkeit_max) {
	$this->geschwindigkeit_max = $geschwindigkeit_max;
	return $this;
}

/**
* Get geschwindigkeit_reduziert - geschwindigkeit_reduziert
* @return string
*/
public function getGeschwindigkeit_reduziert () {
	$preValue = $this->preGetValue("geschwindigkeit_reduziert"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->geschwindigkeit_reduziert;
	return $data;
}

/**
* Set geschwindigkeit_reduziert - geschwindigkeit_reduziert
* @param string $geschwindigkeit_reduziert
* @return \Pimcore\Model\Object\EamTariff
*/
public function setGeschwindigkeit_reduziert ($geschwindigkeit_reduziert) {
	$this->geschwindigkeit_reduziert = $geschwindigkeit_reduziert;
	return $this;
}

/**
* Get internet_telefonie - internet_telefonie
* @return string
*/
public function getInternet_telefonie () {
	$preValue = $this->preGetValue("internet_telefonie"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->internet_telefonie;
	return $data;
}

/**
* Set internet_telefonie - internet_telefonie
* @param string $internet_telefonie
* @return \Pimcore\Model\Object\EamTariff
*/
public function setInternet_telefonie ($internet_telefonie) {
	$this->internet_telefonie = $internet_telefonie;
	return $this;
}

/**
* Get hot_spot_flat - hot_spot_flat
* @return string
*/
public function getHot_spot_flat () {
	$preValue = $this->preGetValue("hot_spot_flat"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->hot_spot_flat;
	return $data;
}

/**
* Set hot_spot_flat - hot_spot_flat
* @param string $hot_spot_flat
* @return \Pimcore\Model\Object\EamTariff
*/
public function setHot_spot_flat ($hot_spot_flat) {
	$this->hot_spot_flat = $hot_spot_flat;
	return $this;
}

/**
* Get lte - lte
* @return string
*/
public function getLte () {
	$preValue = $this->preGetValue("lte"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lte;
	return $data;
}

/**
* Set lte - lte
* @param string $lte
* @return \Pimcore\Model\Object\EamTariff
*/
public function setLte ($lte) {
	$this->lte = $lte;
	return $this;
}

/**
* Get bonus - bonus
* @return string
*/
public function getBonus () {
	$preValue = $this->preGetValue("bonus"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->bonus;
	return $data;
}

/**
* Set bonus - bonus
* @param string $bonus
* @return \Pimcore\Model\Object\EamTariff
*/
public function setBonus ($bonus) {
	$this->bonus = $bonus;
	return $this;
}

/**
* Get daten_automatik - daten_automatik
* @return string
*/
public function getDaten_automatik () {
	$preValue = $this->preGetValue("daten_automatik"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->daten_automatik;
	return $data;
}

/**
* Set daten_automatik - daten_automatik
* @param string $daten_automatik
* @return \Pimcore\Model\Object\EamTariff
*/
public function setDaten_automatik ($daten_automatik) {
	$this->daten_automatik = $daten_automatik;
	return $this;
}

/**
* Get festnetzrufnummer - festnetzrufnummer
* @return string
*/
public function getFestnetzrufnummer () {
	$preValue = $this->preGetValue("festnetzrufnummer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->festnetzrufnummer;
	return $data;
}

/**
* Set festnetzrufnummer - festnetzrufnummer
* @param string $festnetzrufnummer
* @return \Pimcore\Model\Object\EamTariff
*/
public function setFestnetzrufnummer ($festnetzrufnummer) {
	$this->festnetzrufnummer = $festnetzrufnummer;
	return $this;
}

/**
* Get preis_mms - preis_MMS
* @return string
*/
public function getPreis_mms () {
	$preValue = $this->preGetValue("preis_mms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->preis_mms;
	return $data;
}

/**
* Set preis_mms - preis_MMS
* @param string $preis_mms
* @return \Pimcore\Model\Object\EamTariff
*/
public function setPreis_mms ($preis_mms) {
	$this->preis_mms = $preis_mms;
	return $this;
}

/**
* Get preis_sms - preis_sms
* @return string
*/
public function getPreis_sms () {
	$preValue = $this->preGetValue("preis_sms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->preis_sms;
	return $data;
}

/**
* Set preis_sms - preis_sms
* @param string $preis_sms
* @return \Pimcore\Model\Object\EamTariff
*/
public function setPreis_sms ($preis_sms) {
	$this->preis_sms = $preis_sms;
	return $this;
}

/**
* Get grundpreis_erste_12_monate - grundpreis_erste_12_monate
* @return string
*/
public function getGrundpreis_erste_12_monate () {
	$preValue = $this->preGetValue("grundpreis_erste_12_monate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->grundpreis_erste_12_monate;
	return $data;
}

/**
* Set grundpreis_erste_12_monate - grundpreis_erste_12_monate
* @param string $grundpreis_erste_12_monate
* @return \Pimcore\Model\Object\EamTariff
*/
public function setGrundpreis_erste_12_monate ($grundpreis_erste_12_monate) {
	$this->grundpreis_erste_12_monate = $grundpreis_erste_12_monate;
	return $this;
}

/**
* Get grundpreis_ab_monat_13 - grundpreis_ab_monat_13
* @return string
*/
public function getGrundpreis_ab_monat_13 () {
	$preValue = $this->preGetValue("grundpreis_ab_monat_13"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->grundpreis_ab_monat_13;
	return $data;
}

/**
* Set grundpreis_ab_monat_13 - grundpreis_ab_monat_13
* @param string $grundpreis_ab_monat_13
* @return \Pimcore\Model\Object\EamTariff
*/
public function setGrundpreis_ab_monat_13 ($grundpreis_ab_monat_13) {
	$this->grundpreis_ab_monat_13 = $grundpreis_ab_monat_13;
	return $this;
}

/**
* Get grundpreis_erste_24_monate - grundpreis_erste_24_monate
* @return string
*/
public function getGrundpreis_erste_24_monate () {
	$preValue = $this->preGetValue("grundpreis_erste_24_monate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->grundpreis_erste_24_monate;
	return $data;
}

/**
* Set grundpreis_erste_24_monate - grundpreis_erste_24_monate
* @param string $grundpreis_erste_24_monate
* @return \Pimcore\Model\Object\EamTariff
*/
public function setGrundpreis_erste_24_monate ($grundpreis_erste_24_monate) {
	$this->grundpreis_erste_24_monate = $grundpreis_erste_24_monate;
	return $this;
}

/**
* Get grundpreis_ab_monat_25 - grundpreis_ab_monat_25
* @return string
*/
public function getGrundpreis_ab_monat_25 () {
	$preValue = $this->preGetValue("grundpreis_ab_monat_25"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->grundpreis_ab_monat_25;
	return $data;
}

/**
* Set grundpreis_ab_monat_25 - grundpreis_ab_monat_25
* @param string $grundpreis_ab_monat_25
* @return \Pimcore\Model\Object\EamTariff
*/
public function setGrundpreis_ab_monat_25 ($grundpreis_ab_monat_25) {
	$this->grundpreis_ab_monat_25 = $grundpreis_ab_monat_25;
	return $this;
}

/**
* Get monatlicher_grundpreis - monatlicher_grundpreis
* @return string
*/
public function getMonatlicher_grundpreis () {
	$preValue = $this->preGetValue("monatlicher_grundpreis"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->monatlicher_grundpreis;
	return $data;
}

/**
* Set monatlicher_grundpreis - monatlicher_grundpreis
* @param string $monatlicher_grundpreis
* @return \Pimcore\Model\Object\EamTariff
*/
public function setMonatlicher_grundpreis ($monatlicher_grundpreis) {
	$this->monatlicher_grundpreis = $monatlicher_grundpreis;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

