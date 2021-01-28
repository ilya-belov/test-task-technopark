<?php

declare(strict_types=1);

namespace App\Services;


use App\Factories\DeliveryFactory;
use App\Models\Delivery\DeliveryA;
use App\Models\Delivery\DeliveryB;

class DeliveryService
{
    /**
     * @var array<int, string>
     */
    private array $deliveries = [
        1 => DeliveryA::class,
        2 => DeliveryB::class,
    ];

    public function getAll($data): array
    {
        $response = [];

        foreach ($this->deliveries as $delivery) {

            $response[] = DeliveryFactory::create($delivery)->getDeliveryInfo();
        }
    }
}