<?php

namespace Z3d0X\FilamentFabricator\Resources\PageResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Pboivin\FilamentPeek\Pages\Actions\PreviewAction;
use Z3d0X\FilamentFabricator\Resources\PageResource;
use Filament\Actions\LocaleSwitcher;

class CreatePage extends CreateRecord
{
    use Concerns\HasPreviewModal;
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageResource::class;

    public static function getResource(): string
    {
        return config('filament-fabricator.page-resource') ?? static::$resource;
    }

    protected function getActions(): array
    {
        return [
            LocaleSwitcher::make(),
            PreviewAction::make(),
        ];
    }
}
