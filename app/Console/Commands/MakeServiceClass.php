<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeServiceClass extends GeneratorCommand
{
    protected $signature = 'make:service {name}  {--request={requestName}}';

    protected $type = 'Service';

    protected $description = 'create a new service class';

    protected function getStub(): string
    {
        return __DIR__.'/../../../stubs/service.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Services';
    }
}
