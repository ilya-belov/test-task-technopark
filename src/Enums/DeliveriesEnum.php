<?php

declare(strict_types=1);

namespace App\Enums;


use App\Models\Delivery\DeliveryA;
use App\Models\Delivery\DeliveryB;
use Exception;

class DeliveriesEnum
{
    /**
     * @var array<string, string>
     */
    public const ENUM = [
        'delivery_a' => DeliveryA::class,
        'delivery_b' => DeliveryB::class,
    ];

    /**
     * @param string $key
     * @return string
     * @throws Exception
     */
    public static function getByKey(string $key): string
    {
        if (!isset(self::ENUM[$key])) {
            throw new Exception('Key not specified');
        }

        return self::ENUM[$key];
    }
}