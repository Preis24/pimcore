<?php

namespace AppBundle\Webservice\Einsamobile\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Webservice\ImportInterface as Client;

/**
 * Class ImportCommandAbstract
 * @package AppBundle\Webservice\Einsamobile\Command
 */
abstract class ImportCommandAbstract extends AbstractCommand
{
    protected $client;

    public function __construct(Client $client)
    {
        parent::__construct();

        $this->client = $client;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->client->import();
    }
}