<?php

namespace AppBundle\Webservice\Einsamobile\Import;

use AppBundle\Webservice\ImportAbstract;
use AppBundle\Webservice\ImportInterface;
use Pimcore\Model\Object;
use Pimcore\File;
use AppBundle\Webservice\Einsamobile\Soap\Client;

/**
 * Class Articles
 * @package AppBundle\Webservice
 */
class Articles extends ImportAbstract implements ImportInterface
{
    /**
     * @var Object\EamArticle
     */
    protected $builder;
    /**
     * @var Object\EamArticle\Listing
     */
    protected $listing;
    /**
     * @var $client Client
     */
    protected $client;
    /**
     * @inheritdoc
     */
    protected $conditions = [
        'artikel_id'
    ];
    /**
     * @inheritdoc
     */
    protected $data;

    /**
     * @inheritdoc
     */
    protected function fetch()
    {
        $this->data = $this->client->getArticles();

        return $this;
    }

    /**
     * @inheritdoc
     */
    protected function updateObject($item, $data)
    {
        $item->setValues($data);
        $item->setKey($this->buildItemKey($data));

        return $item;
    }

    /**
     * @inheritdoc
     */
    protected function createObject($data)
    {
        $item = $this->builder->create($data);
        $item->setParentId($this->parentId);
        $item->setKey($this->buildItemKey($data));

        return $item;
    }

    /**
     * @param $data
     * @return string
     */
    private function buildItemKey($data)
    {
        return File::getValidFilename(
            $data['bezeichnung'] . " " . $data['farbe_bezeichnung'] . " " . $data['speicher'] . "gb"
        );
    }
}
