<?php

use Illuminate\Support\Facades\Route;
use Sasah\FilamentFabricator\Facades\FilamentFabricator;
use Sasah\FilamentFabricator\Http\Controllers\PageController;

if (config('filament-fabricator.routing.enabled')) {
    Route::middleware(config('filament-fabricator.middleware') ?? [])
        ->prefix(FilamentFabricator::getRoutingPrefix())
        ->group(function () {
            Route::get('/{filamentFabricatorPage?}', PageController::class)
                ->where('filamentFabricatorPage', '.*')
                ->fallback();
        });
}
