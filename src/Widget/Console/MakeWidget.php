<?php

declare(strict_types=1);

namespace Orchid\Widget\Console\Commands;

use Illuminate\Console\GeneratorCommand;

/**
 * Class MakeWidget.
 */
class MakeWidget extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'orchid:widget';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new widget class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Widget';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return PLATFORM_PATH.'/resources/stubs/widget.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Widgets';
    }
}
