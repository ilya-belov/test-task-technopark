<?php

declare(strict_types=1);

namespace Delivery\Dto\Transformers\Request;


use Delivery\Dto\Requests\ProductDataDeliveryADto;

class ProductDataDeliveryADtoTransformer extends AbstractProductDataDtoTransformer
{
    /**
     * @param array $product
     * @return ProductDataDeliveryADto
     */
    public static function transformFromArray(array $product): ProductDataDeliveryADto
    {
        $dto = new ProductDataDeliveryADto();
        $dto->setDepth($product['depth']);
        $dto->setHeight($product['height']);
        $dto->setWeight($product['weight']);
        $dto->setWidth($product['width']);

        return $dto;
    }
}
