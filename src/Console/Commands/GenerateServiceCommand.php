<?php

namespace Morenorafael\Stubs\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Pluralizer;

class GenerateServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generamos la estructura de un servicio.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $this->call('make:interface-service', ['name' => $name]);

        $this->call('make:driver-service', ['name' => $name]);

        $this->call('make:repository-service', ['name' => $name]);

        $this->call('make:manager-service', ['name' => $name]);

        $this->call('make:provider-service', ['name' => $name]);

        $this->call('make:facade-service', ['name' => $name]);

        $this->call('make:config-service', ['name' => $name]);
    }

    /**
     * Return the Singular Capitalize Name
     *
     * @param $name
     *
     * @return string
     */
    public function getSingularClassName($name)
    {
        return ucwords(Pluralizer::singular($name));
    }
}
