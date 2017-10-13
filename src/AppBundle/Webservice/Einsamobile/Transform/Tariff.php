<?php

namespace AppBundle\Webservice\Einsamobile\Transform;

/**
 * Class Tariff
 * @package AppBundle\Webservice\Einsamobile
 */
class Tariff implements TransformerInterface
{
    private $subsets = [
        'tarifdetails',
    ];

    private $fieldMapping = [
        "Flatrate in alle dt. Netze" => "flatrate_in_alle_netze",
        "SMS Flatrate in alle dt. Netze" => "sms_flatrate",
        "Mtl. Grundpreis in den ersten 12 Monaten" => 'grundpreis_erste_12_Monate',
        "Mtl. Grundpreis ab dem 13 Monat" => "grundpreis_ab_monat_13",
        "Mtl. Grundpreis in den ersten 24 Monaten" => "grundpreis_erste_24_monate",
        "Mtl. Grundpreis ab dem 25 Monat" => "grundpreis_ab_monat_25",
    ];

    private $attributeNameRegEx = [
        '/\s|-/' => '_',
        '/(ins_dt\._|_je|mtl\._|_\(voip\)|_auf)|\.|vodafone_/' => '',
    ];

    private $attributeValueRegEx = [
        '/\s{1,2}<sup>.*<\/sup>/' => '',
        '/ &euro;/' => '',
        '/\\r\\n/' => '; ',
        '/inklusive/' => 1,
    ];

    public function transform(array $data)
    {
        foreach ($this->subsets as $subsets) {
            $data = $this->transformSubset($data, $subsets);
        }

        return $data;
    }

    private function transformSubset($data, $subsets)
    {
        foreach ($data[$subsets] as $subset) {
            foreach ($subset->aVal as $attribute) {
                $data[$this->getAttributeName($attribute->name)] = $this->getAttributeValue($attribute->sVal);
            }
        }

        return $data;
    }

    private function getAttributeName($name)
    {
        if (array_key_exists($name, $this->fieldMapping)) {
            return $this->fieldMapping[$name];
        } else {
            $newName = strtolower($name);

            foreach ($this->attributeNameRegEx as $regEx => $replace) {
                $newName = preg_replace($regEx, $replace, $newName);
            }

            return $newName;
        }
    }

    private function getAttributeValue($value)
    {
        foreach ($this->attributeValueRegEx as $regEx => $replace) {
            $value = preg_replace($regEx, $replace, $value);
        }

        return $value;
    }
}
