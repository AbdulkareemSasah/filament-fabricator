<?php

namespace Sasah\FilamentFabricator\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Sasah\FilamentFabricator\Resources\PageResource;

class ListPages extends ListRecords
{

    use ListRecords\Concerns\Translatable;
    protected static string $resource = PageResource::class;

    public static function getResource(): string
    {
        return config('filament-fabricator.page-resource') ?? static::$resource;
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
