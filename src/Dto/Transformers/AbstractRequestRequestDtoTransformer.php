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
    public function transformFromObjects(iterable $objects): iterable
    {
        $dto = [];

        foreach ($objects as $object) {
            $dto[] = $this->transformFromObject($object);
        }

        return $dto;
    }

    abstract public function transformFromObject(Request $object);
}