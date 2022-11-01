<?php

namespace Morenorafael\Stubs\Console\Commands;

use Illuminate\Support\Str;

class GenerateFacadeServiceCommand extends Generator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:facade-service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generar un Facade';

    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath(): string
    {
        return 'Facades/Service.stub';

    }

    /**
     * Map the stub variables present in stub to its value
     *
     * @return array
     *
     */
    public function getStubVariables(): array
    {
        $name = $this->argument('name');

        return [
            '{{ class }}' => $this->getSingularClassName($name),
            '{{ key }}' => Str::kebab($name),
        ];
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath(): string
    {
        return base_path('app/Facades').'/'.$this->getSingularClassName($this->argument('name')).'.php';
    }
}
