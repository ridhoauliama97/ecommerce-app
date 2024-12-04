<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PaymentMethod: string implements HasColor, HasIcon, HasLabel
{
    case COD = 'cod';
    case Bank = 'bank';

    public function getLabel(): string
    {
        return match ($this) {
            self::COD => 'Cash On Delivery',
            self::Bank => 'Bank Transfer',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::COD => 'info',
            self::Bank => 'primary',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::COD => 'heroicon-m-banknotes',
            self::Bank => 'heroicon-m-credit-card',
        };
    }
}
