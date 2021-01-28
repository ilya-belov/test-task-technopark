<?php

declare(strict_types=1);

namespace Delivery\Factories;


use Delivery\Services\Interfaces\CalculateDeliveryInfoInterface;

class DeliveryFactory
{
    public static function create(string $delivery): CalculateDeliveryInfoInterface
    {
        return new $delivery();
    }
}