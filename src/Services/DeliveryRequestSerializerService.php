<?php

declare(strict_types=1);

namespace App\Services;


use App\Dto\Transformers\DeliveryARequestRequestDtoTransformer;
use App\Dto\Transformers\DeliveryBRequestRequestDtoTransformer;
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
                return ['deliveryA' => DeliveryARequestRequestDtoTransformer::transformFromObject($request)];
            case 'deliveryB':
                return ['deliveryB' => DeliveryBRequestRequestDtoTransformer::transformFromObject($request)];
            default:
                return [
                    'deliveryA' => DeliveryARequestRequestDtoTransformer::transformFromObject($request),
                    'deliveryB' => DeliveryBRequestRequestDtoTransformer::transformFromObject($request),
                ];
        }
    }
}