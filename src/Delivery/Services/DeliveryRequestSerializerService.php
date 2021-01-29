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
        $arrayReq = $request->toArray();

        switch ($arrayReq['delivery']) {
            case 'deliveryA':
                return ['deliveryA' => DeliveryARequestDtoTransformer::transformFromArray($arrayReq)];
            case 'deliveryB':
                return ['deliveryB' => DeliveryBRequestDtoTransformer::transformFromArray($arrayReq)];
            case 'all':
            default:
                return [
                    'deliveryA' => DeliveryARequestDtoTransformer::transformFromArray($arrayReq),
                    'deliveryB' => DeliveryBRequestDtoTransformer::transformFromArray($arrayReq),
                ];
        }
    }
}