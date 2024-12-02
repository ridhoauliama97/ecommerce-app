<?php

namespace App\Filament\Resources\OrderResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\OrderResource;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            // Add your widget here...
            OrderStats::class
        ];
    }

    public function getTabs(): array
    {
        return [
            // Add your tabs here...

            //Dynamic tabs
            null => Tab::make('All'),
            'new' => Tab::make()->query(fn($query) => $query->where('status', 'new')),
            'processing' => Tab::make()->query(fn($query) => $query->where('status', 'processing')),
            'shipped' => Tab::make()->query(fn($query) => $query->where('status', 'shipped')),
            'delivered' => Tab::make()->query(fn($query) => $query->where('status', 'delivered')),
            'canceled' => Tab::make()->query(fn($query) => $query->where('status', 'canceled')),

            //Static tabs
            // 'Orders' => static::route('index'),
            // 'Shipped' => static::route('shipped'),
            // 'Cancelled' => static::route('cancelled'),
        ];
    }
}
