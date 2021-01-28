<?php

declare(strict_types=1);

namespace App\Dto\Transformers;


use Symfony\Component\HttpFoundation\Request;

abstract class AbstractRequestRequestDtoTransformer implements RequestDtoTransformerInterface
{
    /**
     * @param iterable $objects
     * @return iterable
     */
    public static function transformFromObjects(iterable $objects): iterable
    {
        $dto = [];

        foreach ($objects as $object) {
            $dto[] = static::transformFromObject($object);
        }

        return $dto;
    }

    abstract static public function transformFromObject(Request $object);
}