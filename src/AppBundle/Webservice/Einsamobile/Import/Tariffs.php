<?php

namespace AppBundle\Webservice\Einsamobile\Import;

use AppBundle\Webservice\ImportAbstract;
use AppBundle\Webservice\ImportInterface;
use Pimcore\Model\Object;
use Pimcore\File;
use AppBundle\Webservice\Einsamobile\Soap\Client;
use AppBundle\Webservice\Einsamobile\Transform;

/**
 * Class Import
 * @package AppBundle\Webservice\Einsamobile
 *
 * @property client Client
 */
class Tariffs extends ImportAbstract implements ImportInterface
{
    /**
     * @var Object\EamTariff
     */
    protected $builder;
    /**
     * @var Object\EamTariff\Listing
     */
    protected $listing;
    /**
     * @var $client Client
     */
    protected $client;

    protected $conditions = [
        'tarif_id',
    ];

    protected $data;

    /**
     * @var Transform\Tariff
     */
    private $transformer;

    protected function init()
    {
        $this->transformer = new Transform\Tariff();
    }

    protected function fetch()
    {
        $this->data = $this->client->getTariffs();

        return $this;
    }

    protected function updateObject($item, $data)
    {
        $item->setValues($data);
        $item->setKey($this->buildItemKey($data));

        return $item;
    }

    protected function createObject($data)
    {
        $item = $this->builder->create($data);
        $item->setParentId($this->parentId);
        $item->setKey($this->buildItemKey($data));

        return $item;
    }

    private function buildItemKey($data)
    {
        return File::getValidFilename(
            $data['tarifname']
        );
    }

    protected function preImport($data)
    {
        $data = $this->transformer->transform($data);

        $data['tariff_type'] = $data['type'];

        unset($data['type']);
        unset($data['tarifdetails']);
        unset($data['sonderoptionen']);

        return $data;
    }
}
