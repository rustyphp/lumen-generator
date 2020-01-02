<?php

namespace rusty\lumenGenerator\Provider;

use Illuminate\Support\ServiceProvider;
use rusty\lumenGenerator\Command\GenerateLumenModelCommand;
use rusty\lumenGenerator\Command\GenerateLumenModelsCommand;
use rusty\lumenGenerator\Command\GenerateLumenControllerCommand;
use rusty\lumenGenerator\Command\GenerateLumenControllersCommand;
use rusty\lumenGenerator\Command\GenerateLumenBulkControllerCommand;
use rusty\lumenGenerator\Command\GenerateLumenRoutesCommand;
use rusty\lumenGenerator\Command\GenerateAngularModelCommand;
use rusty\lumenGenerator\Command\GenerateAngularModelsCommand;
use rusty\lumenGenerator\Command\GenerateLumenSwaggerInfoCommand;

/**
 * Class GeneratorServiceProvider
 * @package rusty\lumenGenerator\Provider
 */
class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->commands([
            GenerateLumenModelCommand::class,
            GenerateLumenModelsCommand::class,
            GenerateLumenControllerCommand::class,
            GenerateLumenControllersCommand::class,
            GenerateLumenBulkControllerCommand::class,
            GenerateLumenRoutesCommand::class,
            GenerateAngularModelCommand::class,
            GenerateAngularModelsCommand::class,
            GenerateLumenSwaggerInfoCommand::class,
            
        ]);

    }
}