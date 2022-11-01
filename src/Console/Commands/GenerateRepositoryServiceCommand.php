<?php

namespace Morenorafael\Stubs\Console\Commands;

class GenerateRepositoryServiceCommand extends Generator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository-service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generar el Repository';

    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath(): string
    {
        return 'Services/Service/Repository.stub';

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
            '{{ interface }}' => 'App\\Contracts\\'.$name.'\\Repository as '.$name.'Repository',
            '{{ alias }}' => $name.'Repository',
        ];
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath(): string
    {
        return base_path('app/Services').'/'.$this->getSingularClassName($this->argument('name')).'/Repository.php';
    }
}
