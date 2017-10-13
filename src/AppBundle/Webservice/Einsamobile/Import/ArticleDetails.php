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
class ArticleDetails extends ImportAbstract implements ImportInterface
{
    /**
     * @var Object\EamArticleDetails
     */
    protected $builder;
    /**
     * @var Object\EamArticleDetails\Listing
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
     * @var array
     */
    private $relations;
    /**
     * @var array
     */
    private $fieldMap;
    /**
     * @var array
     */
    private $valueMap = [
        'yes' => 1,
        'no' => 0,
    ];
    /**
     * @inheritdoc
     */
    protected function fetch()
    {
        $this->relations = $this->getRelationData();
        $this->data = $this->getDataByArticle($this->relations);
        $this->fieldMap = $this->getFieldMap();

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
     * @inheritdoc
     */
    protected function preImport($data)
    {
        list(
            $article,
            $relation
        ) = $data;

        $this->parentId = $relation['parent_id'];

        $import = $relation;

        foreach ($article as $section) {
            foreach ($section->aVal as $field) {
                $import[
                    $this->fieldMap[
                        str_replace('®', '', $field->name) // this should be corrected by eAm or another cleanUp method is necessary
                    ]
                ] = $this->cleanValue($field->sVal);
            }
        }

        return $import;
    }

    /**
     * @inheritdoc
     */
    private function buildItemKey($data)
    {
        return File::getValidFilename(
            "Produkteigenschaften_".$data['name']
        );
    }

    private function getRelationData()
    {
        $articleListing = new Object\EamArticle\Listing();

        $articleListing->setUnpublished(true);
        $articleListing->load();

        $articles = $articleListing->objects;
        $relations = [];

        foreach ($articles as $article) {
            $relations[] = [
                'parent_id' => $article->o_id,
                'artikel_id' => $article->artikel_id,
                'name'  => File::getValidFilename(
                    $article->bezeichnung . " " . $article->variation
                )
            ];
        }

        return $relations;
    }

    private function getDataByArticle($relations)
    {
        $data = [];

        foreach ($relations as $relation) {
            $data[] = [
                $this->client->getArticleDetails($relation['artikel_id']),
                $relation
            ];
        }

        return $data;
    }

    private function getFieldMap()
    {
        $fields = $this->listing->getClass()->getFieldDefinitions();
        $map = [];

        foreach ($fields as $field) {
            $map[$field->title] = $field->name;
        }

        return $map;
    }

    private function cleanValue($data)
    {
        return $this->valueMap[trim($data)] ?? $data;
    }
}
