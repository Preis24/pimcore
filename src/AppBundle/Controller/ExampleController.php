<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;


use Pimcore\Model\Object;

class ExampleController extends FrontendController
{
    /**
     * @param Request $request
     */
    public function defaultAction(Request $request)
    {
    }

    /**
     * @param Request $request
     */
    public function offerAction(Request $request)
    {
        $element  = $this->document->getElement('offer');

        if ($element) {
            $offer = Object::getById($element->id);

            $products = [];

            foreach ($offer->getProducts() as $metaData) {
                $products[] = Object::getById($metaData->getElementId());
            }

            dump($products);
        }
    }

    /**
     * @param Request $request
     */
    public function deviceAction(Request $request)
    {
        $element  = $this->document->getElement('device');

        if ($element) {
            $device = Object::getById($element->id);

            $this->view->foo = $device->getChildren([
                Object\AbstractObject::OBJECT_TYPE_VARIANT,
            ]);
        }
    }
}
