<?php

declare(strict_types=1);

namespace App\Dto\Transformers;


use Symfony\Component\HttpFoundation\Request;

abstract class AbstractProductDataDtoTransformer implements ProductDataDtoTransformerInterface
{
    /**
     * @param array $products
     * @return array
     */
    public static function transformFromObjects(array $products): array
    {
        $dto = [];

        foreach ($products as $product) {
            $dto[] = static::transformFromObject($product);
        }

        return $dto;
    }

    abstract static public function transformFromObject(array $product);
}