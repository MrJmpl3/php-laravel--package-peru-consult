<?php
namespace MrJmpl3\LaravelPeruConsult\Tests;

use MrJmpl3\LaravelPeruConsult\LaravelPeruConsultServiceProvider;

/**
 * @internal
 *
 * @small
 * @coversNothing
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config(['app.debug' => true]);
    }

    protected function getPackageProviders($app): array
    {
        return [LaravelPeruConsultServiceProvider::class];
    }
}
