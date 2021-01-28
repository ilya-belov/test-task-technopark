<?php


namespace Delivery\Dto\Transformers\Request;


interface RequestDtoTransformerInterface
{
    public static function transformFromArray(array $arr);
    public static function transformFromArrays(iterable $arrays): iterable;
}