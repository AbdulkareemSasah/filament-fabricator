<?php

namespace Sasah\FilamentFabricator\Forms\Components;

use Filament\Forms\Components\Builder;
use Sasah\FilamentFabricator\Enums\BlockPickerStyle;
use Sasah\FilamentFabricator\Facades\FilamentFabricator;
use Sasah\FilamentFabricator\FilamentFabricatorPlugin;

class PageBuilder extends Builder
{
    protected string $view = 'filament-fabricator::components.forms.components.page-builder';

    protected BlockPickerStyle $blockPickerStyle = BlockPickerStyle::Dropdown;

    protected function setUp(): void
    {
        parent::setUp();

        $this->blocks(FilamentFabricator::getPageBlocks());

        $this->mutateDehydratedStateUsing(static function (?array $state): array {
            if (!is_array($state)) {
                return array_values([]);
            }

            $registerPageBlockNames = array_keys(FilamentFabricator::getPageBlocksRaw());

            return collect($state)
                ->filter(fn (array $block) => in_array($block['type'], $registerPageBlockNames, true))
                ->values()
                ->toArray();
        });

        $blockPickerStyle = FilamentFabricatorPlugin::get()->getBlockPickerStyle();

        if (!is_null($blockPickerStyle)) {
            $this->blockPickerStyle($blockPickerStyle);
        }
    }

    public function blockPickerStyle(BlockPickerStyle $style): static
    {
        if ($style === BlockPickerStyle::Modal) {
            $this->blockPickerColumns(3);
        }

        $this->blockPickerStyle = $style;

        return $this;
    }

    public function getBlockPickerStyle(): BlockPickerStyle
    {
        return $this->blockPickerStyle;
    }
}
