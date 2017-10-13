<?php

namespace AppBundle\Webservice\Einsamobile\Command;

/**
 * Class ImportCommand
 * @package AppBundle\Webservice\Einsamobile\Command
 */
class ImportArticlesCommand extends ImportCommandAbstract
{
    protected function configure()
    {
        $this
            ->setName('import:eam:articles')
            ->setDescription('Import article data from eAm soap service.');
    }
}