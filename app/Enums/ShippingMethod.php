<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ShippingMethod: string implements HasColor, HasIcon, HasLabel
{
    case JNE = 'jne';
    case JNT = 'jnt';
    case SiCepat = 'sicepat';
    case POS = 'pos';
    case Gojek = 'gojek';

    public function getLabel(): string
    {
        return match ($this) {
            self::JNE => 'JNE',
            self::JNT => 'JNT',
            self::SiCepat => 'SiCepat',
            self::POS => 'POS',
            self::Gojek => 'Gojek',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::JNE => 'info',
            self::JNT => 'info',
            self::SiCepat => 'info',
            self::POS => 'info',
            self::Gojek => 'info',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::JNE => 'heroicon-m-truck',
            self::JNT => 'heroicon-m-truck',
            self::SiCepat => 'heroicon-m-truck',
            self::POS => 'heroicon-m-truck',
            self::Gojek => 'heroicon-m-truck',
        };
    }
}
