<?php

declare(strict_types=1);

namespace App\Common\Enums;


use Exception;

abstract class AbstractEnum
{
    public const ENUM = [];

    /**
     * @param mixed $key
     * @return string
     * @throws Exception
     */
    public static function getByKey($key): string
    {
        if (!isset(static::ENUM[$key])) {
            throw new Exception('Key not specified');
        }

        return static::ENUM[$key];
    }
}