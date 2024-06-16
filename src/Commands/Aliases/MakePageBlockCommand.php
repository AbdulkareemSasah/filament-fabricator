<?php

namespace Sasah\FilamentFabricator\Commands\Aliases;

use Sasah\FilamentFabricator\Commands;

/**
 * @deprecated
 * @see Commands\MakePageBlockCommand
 */
class MakePageBlockCommand extends Commands\MakePageBlockCommand
{
    protected $hidden = true;

    protected $signature = 'make:filament-fabricator-page-block {name?} {--F|force}';
}
