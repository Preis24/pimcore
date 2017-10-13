<?php

namespace AppBundle\Model\Webservice;

use Pimcore\Model\Webservice\Service as DefaultService;

use Pimcore\Logger;
use Pimcore\Model\Asset;
use Pimcore\Model\Document;
use Pimcore\Model\Object;
use Pimcore\Model\User;
use Pimcore\Model\Webservice;

class Service extends DefaultService
{
    public function getObjectList($condition = null, $order = null, $orderKey = null, $offset = null, $limit = null, $groupBy = null, $objectClass = null)
    {
        try {
            $params = ['objectTypes' => [Object\AbstractObject::OBJECT_TYPE_FOLDER, Object\AbstractObject::OBJECT_TYPE_OBJECT, Object\AbstractObject::OBJECT_TYPE_VARIANT]];

            if (!empty($condition)) {
                $params['condition'] = $condition;
            }
            if (!empty($order)) {
                $params['order'] = $order;
            }
            if (!empty($orderKey)) {
                $params['orderKey'] = $orderKey;
            }
            if (!empty($offset)) {
                $params['offset'] = $offset;
            }
            if (!empty($limit)) {
                $params['limit'] = $limit;
            }
            if (!empty($groupBy)) {
                $params['groupBy'] = $groupBy;
            }

            $listClassName = '\\Pimcore\\Model\\Object';
            if (!empty($objectClass)) {
                $listClassName = '\\Pimcore\\Model\\Object\\' . ucfirst($objectClass);
                if (!\Pimcore\Tool::classExists($listClassName)) {
                    $listClassName = '\\Pimcore\\Model\\Object';
                }
            }

            $list = $listClassName::getList($params);
            $list->setUnpublished(1);
            $list->load();

            $items = [];
            foreach ($list as $object) {
                $item = new Webservice\Data\Object\Listing\Item();
                $item->id = $object->getId();
                $item->type = $object->getType();

                if ($object->getKey()) {
                    $item->key = $object->getKey();
                }
                if (method_exists($object, 'getClass')) {
                    $item->class = $object->getClass()->getName();
                }
                if (method_exists($object, 'getPublished')) {
                    $item->published = $object->getPublished();
                }

                $items[] = $item;
            }

            return $items;
        } catch (\Exception $e) {
            Logger::error($e);
            throw $e;
        }
    }
}
