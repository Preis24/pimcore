<?php

namespace AppBundle\Webservice;

use AppBundle\Webservice\ClientInterface;
use Pimcore\Model\Object;
use Pimcore\Model\Object\Listing;
use Pimcore\Model\Object\Concrete;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * Class ImportAbstract
 * @package AppBundle\Webservice
 */
abstract class ImportAbstract
{
    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var Object
     */
    protected $builder;
    /**
     * @var Listing
     */
    protected $listing;
    /**
     * @var integer
     */
    protected $parentId;
    /**
     * @var array
     */
    protected $conditions;
    /**
     * @var array
     */
    protected $data;

    public function __construct(ClientInterface $client, string $builder, string $listing, int $parentId = null) {
        $this->client = $client;
        $this->parentId = $parentId;
        $this->builder = new $builder();
        $this->listing = new $listing();

        $this->init();
    }

    public function import()
    {
        $this
            ->fetch() // call the concrete webservice ressource
            ->importObjects();
    }

    /**
     * @return mixed
     */
    protected function init()
    {
        return;
    }

    /**
     * @param $data
     * @return mixed
     */
    protected function preImport($data)
    {
        return $data;
    }

    /**
     * @return $this
     */
    abstract protected function fetch();

    /**
     * @param Object\Concrete $item
     * @param $data
     * @return mixed
     */
    abstract protected function updateObject($item, $data);

    /**
     * @param $data
     * @return mixed
     */
    abstract protected function createObject($data);

    /**
     * @return $this
     */
    protected function importObjects()
    {
        foreach ($this->data as $data) {
            $this->importObject(
                is_array($data) ? $data : $this->toArray($data)
            );
        }

        return $this;
    }

    /**
     * @param $data
     * @internal $item Object\Concrete
     */
    protected function importObject($data)
    {
        $data = $this->preImport($data);

        /**
         * @var $item Object\Concrete
         */
        $item = $this->findItemByCondition($this->conditions, $data);

        if (null !== $item) {
            $item = $this->updateObject($item, $data);
        } else {
            $item = $this->createObject($data);
        }

        try {
            $item->save();
        } catch (Exception $e) {}
    }

    /**
     * @param array $conditions
     * @param array $data
     * @param Listing|null $listing
     * @return Concrete
     */
    protected function findItemByCondition($conditions, $data, Listing $listing = null)
    {
        $listing = $listing ? $listing : $this->listing;

        $listing->setCondition(
            $this->getConditionStatement($conditions),
            $this->getConditionData($conditions, $data)
        );

        $listing->setUnpublished(true);
        $listing->load();

        return count($listing->objects) ?
            $listing->objects[0] :
            null
        ;
    }

    /**
     * @param array $conditions
     * @return string
     */
    protected function getConditionStatement($conditions)
    {
        $comparator = ' = ?';
        $compat = ' AND ';
        $length = count($conditions) -1;
        $statement = '';

        foreach ($conditions as $key => $condition) {
            $statement .= $condition.$comparator;

            if ($key !== $length) {
                $statement .= $compat;
            }
        }

        return $statement;
    }

    /**
     * @param array $conditions
     * @param array $data
     * @return array
     */
    protected function getConditionData($conditions, $data)
    {
        $value = [];

        foreach ($conditions as $condition) {
            $value[] = $data[$condition];
        }

        return $value;
    }

    /**
     * @param \stdClass $data
     * @return array
     */
    protected function toArray(\stdClass $data)
    {
        $dataArr = new \ArrayObject($data);

        return $dataArr->getArrayCopy();
    }
}
