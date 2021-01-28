<?php

declare(strict_types=1);

namespace App\Factories;


use App\Models\Interfaces\DeliveryInterface;

class DeliveryFactory
{
    public static function create(string $delivery): DeliveryInterface
    {
        return new $delivery();
    }
}