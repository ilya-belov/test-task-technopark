<?php

declare(strict_types=1);

namespace App\Enums;


use App\Models\Delivery\DeliveryA;
use App\Models\Delivery\DeliveryB;

class DeliveriesEnum extends AbstractEnum
{
    /**
     * @var array<string, string>
     */
    public const ENUM = [
        'deliveryA' => DeliveryA::class,
        'deliveryB' => DeliveryB::class,
    ];


}