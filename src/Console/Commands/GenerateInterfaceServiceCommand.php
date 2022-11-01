<?php

namespace Morenorafael\Stubs\Console\Commands;

class GenerateInterfaceServiceCommand extends Generator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:interface-service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generar una interfaz';

    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath(): string
    {
        return 'Contracts/Service/Repository.stub';

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
            '{{ namespace }}' => 'App\\Contracts\\'.$this->getSingularClassName($name),
        ];
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath(): string
    {
        return base_path('app/Contracts').'/'.$this->getSingularClassName($this->argument('name')).'/Repository.php';
    }
}
