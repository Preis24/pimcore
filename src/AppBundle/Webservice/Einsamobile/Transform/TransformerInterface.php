<?php

namespace AppBundle\Webservice\Einsamobile\Transform;

/**
 * Class TransformerInterface
 * @package AppBundle\Webservice\Einsamobile
 */
interface TransformerInterface
{
    public function transform(array $data);
}
