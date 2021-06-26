<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class RegionList
{
    /**
     * Список регионов
     * @Type("array<oihso\CdekSDK2\Dto\Region>")
     * @var Region[]
     */
    public $items;
}
