<?php

namespace AppBundle\Webservice\Einsamobile\Command;

/**
 * Class ImportCommand
 * @package AppBundle\Webservice\Einsamobile\Command
 */
class ImportArticleDetailsCommand extends ImportCommandAbstract
{
    protected function configure()
    {
        $this
            ->setName('import:eam:article-details')
            ->setDescription('Import article data from eAm soap service.');
    }
}
