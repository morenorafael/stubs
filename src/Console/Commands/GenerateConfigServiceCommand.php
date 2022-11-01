<?php

namespace Morenorafael\Stubs\Console\Commands;

use Illuminate\Support\Str;

class GenerateConfigServiceCommand extends Generator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:config-service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generar el archivo de configuracion';

    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath(): string
    {
        return 'service.stub';

    }

    /**
     * Map the stub variables present in stub to its value
     *
     * @return array
     *
     */
    public function getStubVariables(): array
    {
        return [];
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath(): string
    {
        return base_path('config').'/'.Str::kebab($this->argument('name')).'.php';
    }
}
