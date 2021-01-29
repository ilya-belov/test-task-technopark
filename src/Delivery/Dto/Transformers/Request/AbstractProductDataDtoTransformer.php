<?php

declare(strict_types=1);

namespace Delivery\Dto\Transformers\Request;


abstract class AbstractProductDataDtoTransformer implements ProductDataDtoTransformerInterface
{
    /**
     * @param array $products
     * @return array
     */
    public static function transformFromArrays(array $products): array
    {
        $dto = [];

        foreach ($products as $product) {
            $dto[] = static::transformFromArray($product);

        }

        return $dto;
    }

    abstract static public function transformFromArray(array $product);
}