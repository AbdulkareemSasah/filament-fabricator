<?php

namespace Sasah\FilamentFabricator\Http\Controllers;

use Illuminate\Support\Facades\Blade;
use Sasah\FilamentFabricator\Facades\FilamentFabricator;
use Sasah\FilamentFabricator\Layouts\Layout;
use Sasah\FilamentFabricator\Models\Contracts\Page;

class PageController
{
    public function __invoke(?Page $filamentFabricatorPage = null): string
    {
        // Handle root (home) page
        if (blank($filamentFabricatorPage)) {
            $pageUrls = FilamentFabricator::getPageUrls();

            $pageId = array_search('/', $pageUrls);

            /** @var Page $filamentFabricatorPage */
            $filamentFabricatorPage = FilamentFabricator::getPageModel()::query()
                ->where('id', $pageId)
                ->firstOrFail();
        }

        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($filamentFabricatorPage?->layout);

        if (!isset($layout)) {
            throw new \Exception("Filament Fabricator: Layout \"{$filamentFabricatorPage->layout}\" not found");
        }

        /** @var string $component */
        $component = $layout::getComponent();

        return Blade::render(
            <<<'BLADE'
            <x-dynamic-component
                :component="$component"
                :page="$page"
            />
            BLADE,
            ['component' => $component, 'page' => $filamentFabricatorPage]
        );
    }
}
