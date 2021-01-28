<?php

declare(strict_types=1);

namespace Delivery\Services;


use Delivery\Dto\Transformers\Request\DeliveryARequestDtoTransformer;
use Delivery\Dto\Transformers\Request\DeliveryBRequestDtoTransformer;
use Symfony\Component\HttpFoundation\Request;

class DeliveryRequestSerializerService
{
    /**
     * @param Request $request
     * @return array
     */
    public function serialize(Request $request): array
    {
        switch ($request->get('delivery')) {
            case 'deliveryA':
                return ['deliveryA' => DeliveryARequestDtoTransformer::transformFromArray($request->toArray())];
            case 'deliveryB':
                return ['deliveryB' => DeliveryBRequestDtoTransformer::transformFromArray($request->toArray())];
            default:
                return [
                    'deliveryA' => DeliveryARequestDtoTransformer::transformFromArray($request->toArray()),
                    'deliveryB' => DeliveryBRequestDtoTransformer::transformFromArray($request->toArray()),
                ];
        }
    }
}