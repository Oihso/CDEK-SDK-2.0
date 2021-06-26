<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Actions;

use oihso\CdekSDK2\BaseTypes\Order;
use oihso\CdekSDK2\Http\ApiResponse;

/**
 * Class Orders
 * @package oihso\CdekSDK2\Actions
 */
class Orders extends ActionsWithDelete
{
    /**
     * URL для запросов к API
     * @var string
     */
    public const URL = '/orders';

    /**
     * Создание заказа
     * @param Order $order
     * @return ApiResponse
     * @throws \oihso\CdekSDK2\Exceptions\RequestException
     */
    public function add(Order $order): ApiResponse
    {
        $params = $this->serializer->toArray($order);
        return $this->preparedAdd($params);
    }
}
