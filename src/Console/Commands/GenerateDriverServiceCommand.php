<?php

namespace Morenorafael\Stubs\Console\Commands;

class GenerateDriverServiceCommand extends Generator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:driver-service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generar el Driver';

    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath(): string
    {
        return 'Services/Service/Driver.stub';

    }

    /**
     * Map the stub variables present in stub to its value
     *
     * @return array
     *
     */
    public function getStubVariables(): array
    {
        $name = $this->getSingularClassName($this->argument('name'));

        return [
            '{{ namespace }}' => 'App\\Services\\'.$name,
            '{{ class }}' => $name,
        ];
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath(): string
    {
        $name = $this->getSingularClassName($this->argument('name'));

        return base_path('app/Services').'/'.$name.'/'.$name.'.php';
    }
}
