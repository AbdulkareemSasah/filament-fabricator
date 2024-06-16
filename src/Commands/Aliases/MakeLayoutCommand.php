<?php

namespace Sasah\FilamentFabricator\Commands\Aliases;

use Sasah\FilamentFabricator\Commands;

/**
 * @deprecated
 * @see Commands\MakeLayoutCommand
 */
class MakeLayoutCommand extends Commands\MakeLayoutCommand
{
    protected $hidden = true;

    protected $signature = 'make:filament-fabricator-layout {name?} {--F|force}';
}
