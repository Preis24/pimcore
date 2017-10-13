<?php

namespace AppBundle\Webservice\Einsamobile\Command;

/**
 * Class ImportTariffsCommand
 * @package AppBundle\Webservice\Einsamobile\Command
 */
class ImportTariffsCommand extends ImportCommandAbstract
{
    protected function configure()
    {
        $this
            ->setName('import:eam:tariffs')
            ->setDescription('Import tariffs data from eAm soap service.');
    }
}