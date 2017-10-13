<?php 

/** 
* Generated at: 2017-09-12T14:33:37+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)


Fields Summary: 
- artikel_id [input]
- umts [input]
- gsm [input]
- lte [input]
- flight_mode [input]
- dual_sim [input]
- sar [input]
- height [input]
- width [input]
- depth [input]
- weight [input]
- full_keyboard [input]
- camera [input]
- digigtal_zoom [input]
- auto_focus [input]
- face_recognition [input]
- number_cameras [input]
- resulution_foto [input]
- resolution_video [input]
- flashlight [input]
- radio [input]
- handsfree_communication [input]
- vibration_alarm [input]
- mp3_player [input]
- touchscreen [input]
- display_kind [input]
- display_type [input]
- dimension [input]
- resolution [input]
- colors [input]
- intern [input]
- extension_medium [input]
- max [input]
- cpu [input]
- position_sensor [input]
- light_sensor [input]
- proximity_sensor [input]
- compass [input]
- finger_print_sensor [input]
- cpu_cores [input]
- cpu_tact [input]
- ram [input]
- iris_sensor [input]
- battery_type [input]
- max_lifetime [input]
- capacity [input]
- standby_gsm [input]
- talk_time_gsm [input]
- standby_wcdma [input]
- wlan [input]
- use_as_modem [input]
- bluetooth [input]
- wap [input]
- operating_system [input]
- voice_recognition [input]
- internet_browser [input]
- games [input]
- version [input]
- user_interface [input]
- sms [input]
- mms [input]
- email [input]
- nfc [input]
- gps [input]
- navigation [input]
- geo_tagging [input]
- hardware_branding [input]
- software_branding [input]
- simlock [input]
- netlock [input]
- micro_usb [input]
- jack_connection [input]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByArtikel_id ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByUmts ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByGsm ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByLte ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByFlight_mode ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByDual_sim ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getBySar ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByHeight ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByWidth ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByDepth ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByWeight ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByFull_keyboard ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByCamera ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByDigigtal_zoom ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByAuto_focus ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByFace_recognition ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByNumber_cameras ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByResulution_foto ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByResolution_video ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByFlashlight ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByRadio ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByHandsfree_communication ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByVibration_alarm ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByMp3_player ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByTouchscreen ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByDisplay_kind ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByDisplay_type ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByDimension ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByResolution ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByColors ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByIntern ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByExtension_medium ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByMax ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByCpu ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByPosition_sensor ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByLight_sensor ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByProximity_sensor ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByCompass ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByFinger_print_sensor ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByCpu_cores ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByCpu_tact ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByRam ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByIris_sensor ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByBattery_type ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByMax_lifetime ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByCapacity ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByStandby_gsm ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByTalk_time_gsm ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByStandby_wcdma ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByWlan ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByUse_as_modem ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByBluetooth ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByWap ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByOperating_system ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByVoice_recognition ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByInternet_browser ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByGames ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByVersion ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByUser_interface ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getBySms ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByMms ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByEmail ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByNfc ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByGps ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByNavigation ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByGeo_tagging ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByHardware_branding ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getBySoftware_branding ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getBySimlock ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByNetlock ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByMicro_usb ($value, $limit = 0) 
* @method \Pimcore\Model\Object\EamArticleDetails\Listing getByJack_connection ($value, $limit = 0) 
*/

class EamArticleDetails extends Concrete {

public $o_classId = 13;
public $o_className = "eamArticleDetails";
public $artikel_id;
public $umts;
public $gsm;
public $lte;
public $flight_mode;
public $dual_sim;
public $sar;
public $height;
public $width;
public $depth;
public $weight;
public $full_keyboard;
public $camera;
public $digigtal_zoom;
public $auto_focus;
public $face_recognition;
public $number_cameras;
public $resulution_foto;
public $resolution_video;
public $flashlight;
public $radio;
public $handsfree_communication;
public $vibration_alarm;
public $mp3_player;
public $touchscreen;
public $display_kind;
public $display_type;
public $dimension;
public $resolution;
public $colors;
public $intern;
public $extension_medium;
public $max;
public $cpu;
public $position_sensor;
public $light_sensor;
public $proximity_sensor;
public $compass;
public $finger_print_sensor;
public $cpu_cores;
public $cpu_tact;
public $ram;
public $iris_sensor;
public $battery_type;
public $max_lifetime;
public $capacity;
public $standby_gsm;
public $talk_time_gsm;
public $standby_wcdma;
public $wlan;
public $use_as_modem;
public $bluetooth;
public $wap;
public $operating_system;
public $voice_recognition;
public $internet_browser;
public $games;
public $version;
public $user_interface;
public $sms;
public $mms;
public $email;
public $nfc;
public $gps;
public $navigation;
public $geo_tagging;
public $hardware_branding;
public $software_branding;
public $simlock;
public $netlock;
public $micro_usb;
public $jack_connection;


/**
* @param array $values
* @return \Pimcore\Model\Object\EamArticleDetails
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
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setArtikel_id ($artikel_id) {
	$this->artikel_id = $artikel_id;
	return $this;
}

/**
* Get umts - UMTS
* @return string
*/
public function getUmts () {
	$preValue = $this->preGetValue("umts"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->umts;
	return $data;
}

/**
* Set umts - UMTS
* @param string $umts
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setUmts ($umts) {
	$this->umts = $umts;
	return $this;
}

/**
* Get gsm - GSM
* @return string
*/
public function getGsm () {
	$preValue = $this->preGetValue("gsm"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->gsm;
	return $data;
}

/**
* Set gsm - GSM
* @param string $gsm
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setGsm ($gsm) {
	$this->gsm = $gsm;
	return $this;
}

/**
* Get lte - LTE
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
* Set lte - LTE
* @param string $lte
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setLte ($lte) {
	$this->lte = $lte;
	return $this;
}

/**
* Get flight_mode - Flugzeug/Offline Modus
* @return string
*/
public function getFlight_mode () {
	$preValue = $this->preGetValue("flight_mode"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->flight_mode;
	return $data;
}

/**
* Set flight_mode - Flugzeug/Offline Modus
* @param string $flight_mode
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setFlight_mode ($flight_mode) {
	$this->flight_mode = $flight_mode;
	return $this;
}

/**
* Get dual_sim - Dual-Sim
* @return string
*/
public function getDual_sim () {
	$preValue = $this->preGetValue("dual_sim"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->dual_sim;
	return $data;
}

/**
* Set dual_sim - Dual-Sim
* @param string $dual_sim
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setDual_sim ($dual_sim) {
	$this->dual_sim = $dual_sim;
	return $this;
}

/**
* Get sar - SAR Wert
* @return string
*/
public function getSar () {
	$preValue = $this->preGetValue("sar"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->sar;
	return $data;
}

/**
* Set sar - SAR Wert
* @param string $sar
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setSar ($sar) {
	$this->sar = $sar;
	return $this;
}

/**
* Get height - Höhe
* @return string
*/
public function getHeight () {
	$preValue = $this->preGetValue("height"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->height;
	return $data;
}

/**
* Set height - Höhe
* @param string $height
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setHeight ($height) {
	$this->height = $height;
	return $this;
}

/**
* Get width - Breite
* @return string
*/
public function getWidth () {
	$preValue = $this->preGetValue("width"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->width;
	return $data;
}

/**
* Set width - Breite
* @param string $width
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setWidth ($width) {
	$this->width = $width;
	return $this;
}

/**
* Get depth - Tiefe
* @return string
*/
public function getDepth () {
	$preValue = $this->preGetValue("depth"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->depth;
	return $data;
}

/**
* Set depth - Tiefe
* @param string $depth
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setDepth ($depth) {
	$this->depth = $depth;
	return $this;
}

/**
* Get weight - Gewicht
* @return string
*/
public function getWeight () {
	$preValue = $this->preGetValue("weight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->weight;
	return $data;
}

/**
* Set weight - Gewicht
* @param string $weight
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Get full_keyboard - vollständige Tastatur
* @return string
*/
public function getFull_keyboard () {
	$preValue = $this->preGetValue("full_keyboard"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->full_keyboard;
	return $data;
}

/**
* Set full_keyboard - vollständige Tastatur
* @param string $full_keyboard
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setFull_keyboard ($full_keyboard) {
	$this->full_keyboard = $full_keyboard;
	return $this;
}

/**
* Get camera - Hauptkamera
* @return string
*/
public function getCamera () {
	$preValue = $this->preGetValue("camera"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->camera;
	return $data;
}

/**
* Set camera - Hauptkamera
* @param string $camera
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setCamera ($camera) {
	$this->camera = $camera;
	return $this;
}

/**
* Get digigtal_zoom - Digitaler Zoom
* @return string
*/
public function getDigigtal_zoom () {
	$preValue = $this->preGetValue("digigtal_zoom"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->digigtal_zoom;
	return $data;
}

/**
* Set digigtal_zoom - Digitaler Zoom
* @param string $digigtal_zoom
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setDigigtal_zoom ($digigtal_zoom) {
	$this->digigtal_zoom = $digigtal_zoom;
	return $this;
}

/**
* Get auto_focus - AutoFokus
* @return string
*/
public function getAuto_focus () {
	$preValue = $this->preGetValue("auto_focus"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->auto_focus;
	return $data;
}

/**
* Set auto_focus - AutoFokus
* @param string $auto_focus
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setAuto_focus ($auto_focus) {
	$this->auto_focus = $auto_focus;
	return $this;
}

/**
* Get face_recognition - Gesichtserkennung
* @return string
*/
public function getFace_recognition () {
	$preValue = $this->preGetValue("face_recognition"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->face_recognition;
	return $data;
}

/**
* Set face_recognition - Gesichtserkennung
* @param string $face_recognition
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setFace_recognition ($face_recognition) {
	$this->face_recognition = $face_recognition;
	return $this;
}

/**
* Get number_cameras - Anzahl Kameras
* @return string
*/
public function getNumber_cameras () {
	$preValue = $this->preGetValue("number_cameras"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->number_cameras;
	return $data;
}

/**
* Set number_cameras - Anzahl Kameras
* @param string $number_cameras
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setNumber_cameras ($number_cameras) {
	$this->number_cameras = $number_cameras;
	return $this;
}

/**
* Get resulution_foto - Auflösung Hauptkamera
* @return string
*/
public function getResulution_foto () {
	$preValue = $this->preGetValue("resulution_foto"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->resulution_foto;
	return $data;
}

/**
* Set resulution_foto - Auflösung Hauptkamera
* @param string $resulution_foto
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setResulution_foto ($resulution_foto) {
	$this->resulution_foto = $resulution_foto;
	return $this;
}

/**
* Get resolution_video - Videoauflösung
* @return string
*/
public function getResolution_video () {
	$preValue = $this->preGetValue("resolution_video"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->resolution_video;
	return $data;
}

/**
* Set resolution_video - Videoauflösung
* @param string $resolution_video
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setResolution_video ($resolution_video) {
	$this->resolution_video = $resolution_video;
	return $this;
}

/**
* Get flashlight - Anzahl Blitzlicht
* @return string
*/
public function getFlashlight () {
	$preValue = $this->preGetValue("flashlight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->flashlight;
	return $data;
}

/**
* Set flashlight - Anzahl Blitzlicht
* @param string $flashlight
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setFlashlight ($flashlight) {
	$this->flashlight = $flashlight;
	return $this;
}

/**
* Get radio - Radio
* @return string
*/
public function getRadio () {
	$preValue = $this->preGetValue("radio"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->radio;
	return $data;
}

/**
* Set radio - Radio
* @param string $radio
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setRadio ($radio) {
	$this->radio = $radio;
	return $this;
}

/**
* Get handsfree_communication - Freisprechfunktion
* @return string
*/
public function getHandsfree_communication () {
	$preValue = $this->preGetValue("handsfree_communication"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->handsfree_communication;
	return $data;
}

/**
* Set handsfree_communication - Freisprechfunktion
* @param string $handsfree_communication
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setHandsfree_communication ($handsfree_communication) {
	$this->handsfree_communication = $handsfree_communication;
	return $this;
}

/**
* Get vibration_alarm - Vibrationsalarm
* @return string
*/
public function getVibration_alarm () {
	$preValue = $this->preGetValue("vibration_alarm"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->vibration_alarm;
	return $data;
}

/**
* Set vibration_alarm - Vibrationsalarm
* @param string $vibration_alarm
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setVibration_alarm ($vibration_alarm) {
	$this->vibration_alarm = $vibration_alarm;
	return $this;
}

/**
* Get mp3_player - MP3 Player
* @return string
*/
public function getMp3_player () {
	$preValue = $this->preGetValue("mp3_player"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->mp3_player;
	return $data;
}

/**
* Set mp3_player - MP3 Player
* @param string $mp3_player
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setMp3_player ($mp3_player) {
	$this->mp3_player = $mp3_player;
	return $this;
}

/**
* Get touchscreen - Touchscreen
* @return string
*/
public function getTouchscreen () {
	$preValue = $this->preGetValue("touchscreen"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->touchscreen;
	return $data;
}

/**
* Set touchscreen - Touchscreen
* @param string $touchscreen
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setTouchscreen ($touchscreen) {
	$this->touchscreen = $touchscreen;
	return $this;
}

/**
* Get display_kind - Art
* @return string
*/
public function getDisplay_kind () {
	$preValue = $this->preGetValue("display_kind"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->display_kind;
	return $data;
}

/**
* Set display_kind - Art
* @param string $display_kind
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setDisplay_kind ($display_kind) {
	$this->display_kind = $display_kind;
	return $this;
}

/**
* Get display_type - DisplayTyp
* @return string
*/
public function getDisplay_type () {
	$preValue = $this->preGetValue("display_type"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->display_type;
	return $data;
}

/**
* Set display_type - DisplayTyp
* @param string $display_type
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setDisplay_type ($display_type) {
	$this->display_type = $display_type;
	return $this;
}

/**
* Get dimension - Haupt-Displaygröße
* @return string
*/
public function getDimension () {
	$preValue = $this->preGetValue("dimension"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->dimension;
	return $data;
}

/**
* Set dimension - Haupt-Displaygröße
* @param string $dimension
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setDimension ($dimension) {
	$this->dimension = $dimension;
	return $this;
}

/**
* Get resolution - Haupt-Displayauflösung
* @return string
*/
public function getResolution () {
	$preValue = $this->preGetValue("resolution"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->resolution;
	return $data;
}

/**
* Set resolution - Haupt-Displayauflösung
* @param string $resolution
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setResolution ($resolution) {
	$this->resolution = $resolution;
	return $this;
}

/**
* Get colors - Haupt-Displayfarben
* @return string
*/
public function getColors () {
	$preValue = $this->preGetValue("colors"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->colors;
	return $data;
}

/**
* Set colors - Haupt-Displayfarben
* @param string $colors
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setColors ($colors) {
	$this->colors = $colors;
	return $this;
}

/**
* Get intern - Interner Speicher
* @return string
*/
public function getIntern () {
	$preValue = $this->preGetValue("intern"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->intern;
	return $data;
}

/**
* Set intern - Interner Speicher
* @param string $intern
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setIntern ($intern) {
	$this->intern = $intern;
	return $this;
}

/**
* Get extension_medium - Speichererweiterung durch
* @return string
*/
public function getExtension_medium () {
	$preValue = $this->preGetValue("extension_medium"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->extension_medium;
	return $data;
}

/**
* Set extension_medium - Speichererweiterung durch
* @param string $extension_medium
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setExtension_medium ($extension_medium) {
	$this->extension_medium = $extension_medium;
	return $this;
}

/**
* Get max - Speichererweiterung max.
* @return string
*/
public function getMax () {
	$preValue = $this->preGetValue("max"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->max;
	return $data;
}

/**
* Set max - Speichererweiterung max.
* @param string $max
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setMax ($max) {
	$this->max = $max;
	return $this;
}

/**
* Get cpu - Prozessor
* @return string
*/
public function getCpu () {
	$preValue = $this->preGetValue("cpu"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->cpu;
	return $data;
}

/**
* Set cpu - Prozessor
* @param string $cpu
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setCpu ($cpu) {
	$this->cpu = $cpu;
	return $this;
}

/**
* Get position_sensor - Lagesensor
* @return string
*/
public function getPosition_sensor () {
	$preValue = $this->preGetValue("position_sensor"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->position_sensor;
	return $data;
}

/**
* Set position_sensor - Lagesensor
* @param string $position_sensor
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setPosition_sensor ($position_sensor) {
	$this->position_sensor = $position_sensor;
	return $this;
}

/**
* Get light_sensor - Umgebungslichtsensor
* @return string
*/
public function getLight_sensor () {
	$preValue = $this->preGetValue("light_sensor"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->light_sensor;
	return $data;
}

/**
* Set light_sensor - Umgebungslichtsensor
* @param string $light_sensor
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setLight_sensor ($light_sensor) {
	$this->light_sensor = $light_sensor;
	return $this;
}

/**
* Get proximity_sensor - Annäherungssensor
* @return string
*/
public function getProximity_sensor () {
	$preValue = $this->preGetValue("proximity_sensor"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->proximity_sensor;
	return $data;
}

/**
* Set proximity_sensor - Annäherungssensor
* @param string $proximity_sensor
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setProximity_sensor ($proximity_sensor) {
	$this->proximity_sensor = $proximity_sensor;
	return $this;
}

/**
* Get compass - Kompass
* @return string
*/
public function getCompass () {
	$preValue = $this->preGetValue("compass"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->compass;
	return $data;
}

/**
* Set compass - Kompass
* @param string $compass
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setCompass ($compass) {
	$this->compass = $compass;
	return $this;
}

/**
* Get finger_print_sensor - Fingerabdrucksensor
* @return string
*/
public function getFinger_print_sensor () {
	$preValue = $this->preGetValue("finger_print_sensor"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->finger_print_sensor;
	return $data;
}

/**
* Set finger_print_sensor - Fingerabdrucksensor
* @param string $finger_print_sensor
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setFinger_print_sensor ($finger_print_sensor) {
	$this->finger_print_sensor = $finger_print_sensor;
	return $this;
}

/**
* Get cpu_cores - Anzahl Kerne
* @return string
*/
public function getCpu_cores () {
	$preValue = $this->preGetValue("cpu_cores"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->cpu_cores;
	return $data;
}

/**
* Set cpu_cores - Anzahl Kerne
* @param string $cpu_cores
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setCpu_cores ($cpu_cores) {
	$this->cpu_cores = $cpu_cores;
	return $this;
}

/**
* Get cpu_tact - Taktung
* @return string
*/
public function getCpu_tact () {
	$preValue = $this->preGetValue("cpu_tact"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->cpu_tact;
	return $data;
}

/**
* Set cpu_tact - Taktung
* @param string $cpu_tact
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setCpu_tact ($cpu_tact) {
	$this->cpu_tact = $cpu_tact;
	return $this;
}

/**
* Get ram - RAM
* @return string
*/
public function getRam () {
	$preValue = $this->preGetValue("ram"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ram;
	return $data;
}

/**
* Set ram - RAM
* @param string $ram
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setRam ($ram) {
	$this->ram = $ram;
	return $this;
}

/**
* Get iris_sensor - Iris-Identifikation
* @return string
*/
public function getIris_sensor () {
	$preValue = $this->preGetValue("iris_sensor"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->iris_sensor;
	return $data;
}

/**
* Set iris_sensor - Iris-Identifikation
* @param string $iris_sensor
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setIris_sensor ($iris_sensor) {
	$this->iris_sensor = $iris_sensor;
	return $this;
}

/**
* Get battery_type - Akkutyp
* @return string
*/
public function getBattery_type () {
	$preValue = $this->preGetValue("battery_type"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->battery_type;
	return $data;
}

/**
* Set battery_type - Akkutyp
* @param string $battery_type
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setBattery_type ($battery_type) {
	$this->battery_type = $battery_type;
	return $this;
}

/**
* Get max_lifetime - Maximale Nutzungsdauer
* @return string
*/
public function getMax_lifetime () {
	$preValue = $this->preGetValue("max_lifetime"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->max_lifetime;
	return $data;
}

/**
* Set max_lifetime - Maximale Nutzungsdauer
* @param string $max_lifetime
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setMax_lifetime ($max_lifetime) {
	$this->max_lifetime = $max_lifetime;
	return $this;
}

/**
* Get capacity - Kapazität
* @return string
*/
public function getCapacity () {
	$preValue = $this->preGetValue("capacity"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->capacity;
	return $data;
}

/**
* Set capacity - Kapazität
* @param string $capacity
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setCapacity ($capacity) {
	$this->capacity = $capacity;
	return $this;
}

/**
* Get standby_gsm - Standy GSM
* @return string
*/
public function getStandby_gsm () {
	$preValue = $this->preGetValue("standby_gsm"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->standby_gsm;
	return $data;
}

/**
* Set standby_gsm - Standy GSM
* @param string $standby_gsm
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setStandby_gsm ($standby_gsm) {
	$this->standby_gsm = $standby_gsm;
	return $this;
}

/**
* Get talk_time_gsm - Gesprächszeit GSM
* @return string
*/
public function getTalk_time_gsm () {
	$preValue = $this->preGetValue("talk_time_gsm"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->talk_time_gsm;
	return $data;
}

/**
* Set talk_time_gsm - Gesprächszeit GSM
* @param string $talk_time_gsm
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setTalk_time_gsm ($talk_time_gsm) {
	$this->talk_time_gsm = $talk_time_gsm;
	return $this;
}

/**
* Get standby_wcdma - Standy WCDMA
* @return string
*/
public function getStandby_wcdma () {
	$preValue = $this->preGetValue("standby_wcdma"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->standby_wcdma;
	return $data;
}

/**
* Set standby_wcdma - Standy WCDMA
* @param string $standby_wcdma
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setStandby_wcdma ($standby_wcdma) {
	$this->standby_wcdma = $standby_wcdma;
	return $this;
}

/**
* Get wlan - WLAN
* @return string
*/
public function getWlan () {
	$preValue = $this->preGetValue("wlan"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wlan;
	return $data;
}

/**
* Set wlan - WLAN
* @param string $wlan
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setWlan ($wlan) {
	$this->wlan = $wlan;
	return $this;
}

/**
* Get use_as_modem - Nutzung als Modem
* @return string
*/
public function getUse_as_modem () {
	$preValue = $this->preGetValue("use_as_modem"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->use_as_modem;
	return $data;
}

/**
* Set use_as_modem - Nutzung als Modem
* @param string $use_as_modem
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setUse_as_modem ($use_as_modem) {
	$this->use_as_modem = $use_as_modem;
	return $this;
}

/**
* Get bluetooth - Bluetooth
* @return string
*/
public function getBluetooth () {
	$preValue = $this->preGetValue("bluetooth"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->bluetooth;
	return $data;
}

/**
* Set bluetooth - Bluetooth
* @param string $bluetooth
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setBluetooth ($bluetooth) {
	$this->bluetooth = $bluetooth;
	return $this;
}

/**
* Get wap - WAP
* @return string
*/
public function getWap () {
	$preValue = $this->preGetValue("wap"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wap;
	return $data;
}

/**
* Set wap - WAP
* @param string $wap
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setWap ($wap) {
	$this->wap = $wap;
	return $this;
}

/**
* Get operating_system - Betriebssystem
* @return string
*/
public function getOperating_system () {
	$preValue = $this->preGetValue("operating_system"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->operating_system;
	return $data;
}

/**
* Set operating_system - Betriebssystem
* @param string $operating_system
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setOperating_system ($operating_system) {
	$this->operating_system = $operating_system;
	return $this;
}

/**
* Get voice_recognition - Spracherkennung
* @return string
*/
public function getVoice_recognition () {
	$preValue = $this->preGetValue("voice_recognition"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->voice_recognition;
	return $data;
}

/**
* Set voice_recognition - Spracherkennung
* @param string $voice_recognition
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setVoice_recognition ($voice_recognition) {
	$this->voice_recognition = $voice_recognition;
	return $this;
}

/**
* Get internet_browser - InternetBrowser
* @return string
*/
public function getInternet_browser () {
	$preValue = $this->preGetValue("internet_browser"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->internet_browser;
	return $data;
}

/**
* Set internet_browser - InternetBrowser
* @param string $internet_browser
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setInternet_browser ($internet_browser) {
	$this->internet_browser = $internet_browser;
	return $this;
}

/**
* Get games - Spiele
* @return string
*/
public function getGames () {
	$preValue = $this->preGetValue("games"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->games;
	return $data;
}

/**
* Set games - Spiele
* @param string $games
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setGames ($games) {
	$this->games = $games;
	return $this;
}

/**
* Get version - Version
* @return string
*/
public function getVersion () {
	$preValue = $this->preGetValue("version"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->version;
	return $data;
}

/**
* Set version - Version
* @param string $version
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setVersion ($version) {
	$this->version = $version;
	return $this;
}

/**
* Get user_interface - Benutzeroberfläche
* @return string
*/
public function getUser_interface () {
	$preValue = $this->preGetValue("user_interface"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->user_interface;
	return $data;
}

/**
* Set user_interface - Benutzeroberfläche
* @param string $user_interface
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setUser_interface ($user_interface) {
	$this->user_interface = $user_interface;
	return $this;
}

/**
* Get sms - SMS
* @return string
*/
public function getSms () {
	$preValue = $this->preGetValue("sms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->sms;
	return $data;
}

/**
* Set sms - SMS
* @param string $sms
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setSms ($sms) {
	$this->sms = $sms;
	return $this;
}

/**
* Get mms - MMS
* @return string
*/
public function getMms () {
	$preValue = $this->preGetValue("mms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->mms;
	return $data;
}

/**
* Set mms - MMS
* @param string $mms
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setMms ($mms) {
	$this->mms = $mms;
	return $this;
}

/**
* Get email - E-Mail Dienste
* @return string
*/
public function getEmail () {
	$preValue = $this->preGetValue("email"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->email;
	return $data;
}

/**
* Set email - E-Mail Dienste
* @param string $email
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setEmail ($email) {
	$this->email = $email;
	return $this;
}

/**
* Get nfc - NFC
* @return string
*/
public function getNfc () {
	$preValue = $this->preGetValue("nfc"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->nfc;
	return $data;
}

/**
* Set nfc - NFC
* @param string $nfc
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setNfc ($nfc) {
	$this->nfc = $nfc;
	return $this;
}

/**
* Get gps - GPS Empfänger
* @return string
*/
public function getGps () {
	$preValue = $this->preGetValue("gps"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->gps;
	return $data;
}

/**
* Set gps - GPS Empfänger
* @param string $gps
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setGps ($gps) {
	$this->gps = $gps;
	return $this;
}

/**
* Get navigation - Navigationssoftware
* @return string
*/
public function getNavigation () {
	$preValue = $this->preGetValue("navigation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->navigation;
	return $data;
}

/**
* Set navigation - Navigationssoftware
* @param string $navigation
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setNavigation ($navigation) {
	$this->navigation = $navigation;
	return $this;
}

/**
* Get geo_tagging - Geo Tagging
* @return string
*/
public function getGeo_tagging () {
	$preValue = $this->preGetValue("geo_tagging"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->geo_tagging;
	return $data;
}

/**
* Set geo_tagging - Geo Tagging
* @param string $geo_tagging
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setGeo_tagging ($geo_tagging) {
	$this->geo_tagging = $geo_tagging;
	return $this;
}

/**
* Get hardware_branding - Hardwarebranding
* @return string
*/
public function getHardware_branding () {
	$preValue = $this->preGetValue("hardware_branding"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->hardware_branding;
	return $data;
}

/**
* Set hardware_branding - Hardwarebranding
* @param string $hardware_branding
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setHardware_branding ($hardware_branding) {
	$this->hardware_branding = $hardware_branding;
	return $this;
}

/**
* Get software_branding - Softwarebranding
* @return string
*/
public function getSoftware_branding () {
	$preValue = $this->preGetValue("software_branding"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->software_branding;
	return $data;
}

/**
* Set software_branding - Softwarebranding
* @param string $software_branding
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setSoftware_branding ($software_branding) {
	$this->software_branding = $software_branding;
	return $this;
}

/**
* Get simlock - SimLock
* @return string
*/
public function getSimlock () {
	$preValue = $this->preGetValue("simlock"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->simlock;
	return $data;
}

/**
* Set simlock - SimLock
* @param string $simlock
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setSimlock ($simlock) {
	$this->simlock = $simlock;
	return $this;
}

/**
* Get netlock - NetLock
* @return string
*/
public function getNetlock () {
	$preValue = $this->preGetValue("netlock"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->netlock;
	return $data;
}

/**
* Set netlock - NetLock
* @param string $netlock
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setNetlock ($netlock) {
	$this->netlock = $netlock;
	return $this;
}

/**
* Get micro_usb - Micro USB
* @return string
*/
public function getMicro_usb () {
	$preValue = $this->preGetValue("micro_usb"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->micro_usb;
	return $data;
}

/**
* Set micro_usb - Micro USB
* @param string $micro_usb
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setMicro_usb ($micro_usb) {
	$this->micro_usb = $micro_usb;
	return $this;
}

/**
* Get jack_connection - 3,5 mm Stereo Anschluss
* @return string
*/
public function getJack_connection () {
	$preValue = $this->preGetValue("jack_connection"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->jack_connection;
	return $data;
}

/**
* Set jack_connection - 3,5 mm Stereo Anschluss
* @param string $jack_connection
* @return \Pimcore\Model\Object\EamArticleDetails
*/
public function setJack_connection ($jack_connection) {
	$this->jack_connection = $jack_connection;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

