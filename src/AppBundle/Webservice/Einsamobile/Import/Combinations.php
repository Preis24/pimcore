<?php

namespace AppBundle\Webservice\Einsamobile\Import;

use AppBundle\Webservice\ImportAbstract;
use AppBundle\Webservice\ImportInterface;
use Pimcore\Model\Object;
use Pimcore\File;
use AppBundle\Webservice\Einsamobile\Soap\Client;

/**
 * Class ArticleTariffCombinations
 * @package AppBundle\Webservice\Einsamobile
 */
class Combinations extends ImportAbstract implements ImportInterface
{
    /**
     * @var Object\EamCombination
     */
    protected $builder;
    /**
     * @var Object\EamCombination\Listing
     */
    protected $listing;
    /**
     * @var $client Client
     */
    protected $client;

    protected $conditions = [
        'tarif_id',
        'artikel_id',
    ];

    protected $data;
    /**
     * @var Object\EamTariff\Listing
     */
    private $tariffListing;
    /**
     * @var Object\EamArticle\Listing
     */
    private $articleListing;

    protected function init()
    {
        $this->tariffListing = new Object\EamTariff\Listing();
        $this->articleListing = new Object\EamArticle\Listing();
    }

    protected function fetch()
    {
        $this->data = $this->client->getCombinations();

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
        if ($data['article'] instanceof Object\Concrete) {
            $article = $data['article']->getKey();
        } else  {
            $article = $data['artikel_id'];
        }

        if ($data['tariff'] instanceof Object\Concrete) {
            $tariff = $data['tariff']->getKey();
        } else {
            $tariff = $data['tarif_id'];
        }

        return File::getValidFilename(
            $tariff . "_" . $article
        );
    }

    protected function preImport($data)
    {
        $data['article'] = $this->findItemByCondition(
            ['artikel_id'],
            ['artikel_id' => $data['artikel_id']],
            $this->articleListing
        );

        $data['tariff'] = $this->findItemByCondition(
            ['tarif_id'],
            ['tarif_id' => $data['tarif_id']],
            $this->tariffListing
        );

        return $data;
    }
}
