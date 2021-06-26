<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Actions;

use oihso\CdekSDK2\BaseTypes\Intake;
use oihso\CdekSDK2\Http\ApiResponse;

/**
 * Class Intakes
 * @package oihso\CdekSDK2\Actions
 */
class Intakes extends ActionsWithDelete
{
    /**
     * URL для запросов к API
     * @var string
     */
    public const URL = '/intakes';

    /**
     * Создание вызова курьера
     * @param Intake $intake
     * @return ApiResponse
     * @throws \oihso\CdekSDK2\Exceptions\RequestException
     */
    public function add(Intake $intake): ApiResponse
    {
        $params = $this->serializer->toArray($intake);
        return $this->preparedAdd($params);
    }
}
