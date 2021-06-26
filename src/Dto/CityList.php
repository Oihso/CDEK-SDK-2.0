<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class CityList
{
    /**
     * Список городов
     * @Type("array<oihso\CdekSDK2\Dto\City>")
     * @var City[]
     */
    public $items;
}
