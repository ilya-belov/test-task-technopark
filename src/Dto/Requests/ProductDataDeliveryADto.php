<?php

declare(strict_types=1);

namespace App\Dto\Requests;


use JMS\Serializer\Annotation as Serialization;

class ProductDataDeliveryADto
{
    /**
     * @Serialization\Type("float")
     * @var float
     */
    public float $weight;

    /**
     * @Serialization\Type("float")
     * @var float
     */
    public float $width;

    /**
     * @Serialization\Type("float")
     * @var float
     */
    public float $depth;

    /**
     * @Serialization\Type("float")
     * @var float
     */
    public float $height;

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getDepth(): float
    {
        return $this->depth;
    }

    /**
     * @param float $depth
     */
    public function setDepth(float $depth): void
    {
        $this->depth = $depth;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }
}
