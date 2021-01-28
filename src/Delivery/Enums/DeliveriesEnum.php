<?php

declare(strict_types=1);

namespace Delivery\Enums;


use App\Common\Enums\AbstractEnum;
use Delivery\Services\Delivery\CalculateDeliveryInfoAService;
use Delivery\Services\Delivery\CalculateDeliveryInfoBService;


class DeliveriesEnum extends AbstractEnum
{
    /**
     * @var array<string, string>
     */
    public const ENUM = [
        'deliveryA' => CalculateDeliveryInfoAService::class,
        'deliveryB' => CalculateDeliveryInfoBService::class,
    ];


}