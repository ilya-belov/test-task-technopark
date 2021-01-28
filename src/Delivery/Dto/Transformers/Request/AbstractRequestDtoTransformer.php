<?php

declare(strict_types=1);

namespace Delivery\Dto\Transformers\Request;


abstract class AbstractRequestDtoTransformer implements RequestDtoTransformerInterface
{
    /**
     * @param iterable $arrays
     * @return iterable
     */
    public static function transformFromArrays(iterable $arrays): iterable
    {
        $dto = [];

        foreach ($arrays as $arr) {
            $dto[] = static::transformFromArray($arr);
        }

        return $dto;
    }

    abstract static public function transformFromArray(array $arr);
}