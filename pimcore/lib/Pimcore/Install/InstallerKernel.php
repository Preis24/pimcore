<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Install;

use Pimcore\Composer\PackageInfo;
use Pimcore\Install\Command\InstallCommand;
use Pimcore\Install\Controller\InstallController;
use Pimcore\Install\Profile\ProfileLocator;
use Symfony\Bundle\DebugBundle\DebugBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Bundle\MonologBundle\MonologBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollectionBuilder;

class InstallerKernel extends Kernel
{
    use MicroKernelTrait;

    /**
     * @inheritDoc
     */
    public function getRootDir()
    {
        return $this->getProjectDir() . '/var/installer';
    }

    /**
     * @inheritDoc
     */
    public function registerBundles()
    {
        $bundles = [
            new FrameworkBundle(),
            new MonologBundle(),
            new TwigBundle()
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'])) {
            $bundles[] = new DebugBundle();
        }

        return $bundles;
    }

    /**
     * @inheritDoc
     */
    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        // configure bundles
        $c->loadFromExtension('framework', [
            'secret'     => uniqid('installer-', true),
            'profiler'   => false,
            'templating' => ['engines' => ['twig']],
            'php_errors' => [
                'log' => true
            ]
        ]);

        $c->loadFromExtension('twig', [
            'debug'            => '%kernel.debug%',
            'strict_variables' => '%kernel.debug%',
            'paths'            => [
                __DIR__ . '/../Resources/views/Install' => 'install'
            ]
        ]);

        $c->loadFromExtension('monolog', [
            'handlers' => [
                'main' => [
                    'type'     => 'stream',
                    'path'     => '%kernel.logs_dir%/%kernel.environment%.log',
                    'level'    => 'debug',
                    'channels' => ['!event']
                ],

                'console' => [
                    'type'     => 'console',
                    'channels' => ['!event']
                ]
            ]
        ]);

        // register services
        $c->autowire(Installer::class, Installer::class);
        $c->autowire(PackageInfo::class, PackageInfo::class);
        $c->autowire(ProfileLocator::class, ProfileLocator::class);

        // register command and tag it as console.command
        $c->autowire(InstallCommand::class, InstallCommand::class);
        $c->findDefinition(InstallCommand::class)->addTag('console.command');

        // register controller and tag it with service_arguments to enable action injection
        $c->autowire('pimcore.installer.controller', InstallController::class);
        $c->findDefinition('pimcore.installer.controller')->addTag('controller.service_arguments');
    }

    /**
     * @inheritDoc
     */
    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->addRoute($this->buildRoute('/', 'index', ['GET']));
        $routes->addRoute($this->buildRoute('/', 'install', ['POST']));
    }

    private function buildRoute(string $path, string $action, array $methods = []): Route
    {
        $route = new Route($path);
        $route->setDefault('_controller', sprintf('pimcore.installer.controller:%sAction', $action));

        if (!empty($methods)) {
            $route->setMethods($methods);
        }

        return $route;
    }
}
