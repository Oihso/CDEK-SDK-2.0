<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class PickupPointList
 * @package oihso\CdekSDK2\Dto
 */
class PickupPointList
{
    /**
     * Список ПВЗ
     * @Type("array<oihso\CdekSDK2\Dto\PickupPoint>")
     * @var PickupPoint[]
     */
    public $items = [];

    /**
     * @return int
     */
    public function getCount(): int
    {
        return count($this->items);
    }

    /**
     * @param array $filter
     * @return array
     */
    public function filter(array $filter = []): array
    {
        $filtered = [];
        foreach ($this->items as $pvz) {
            foreach ($filter as $k => $v) {
                if (property_exists(PickupPoint::class, $k) && mb_strtolower($pvz->$k) === mb_strtolower($v)) {
                    $filtered[] = $pvz;
                    break;
                }
            }
        }
        return $filtered;
    }
}
