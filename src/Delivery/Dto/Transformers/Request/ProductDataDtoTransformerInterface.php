<?php


namespace Delivery\Dto\Transformers\Request;


interface ProductDataDtoTransformerInterface
{
    public static function transformFromArray(array $product);
    public static function transformFromArrays(array $products): array;
}