<?php

namespace AppBundle\Webservice\Einsamobile\Command;

/**
 * Class CombinationsCommand
 * @package AppBundle\Webservice\Einsamobile\Command
 */
class ImportCombinationsCommand extends ImportCommandAbstract
{
    protected function configure()
    {
        $this
            ->setName('import:eam:combinations')
            ->setDescription('Import tariff device combination data from eAm soap service.');
    }
}