<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Actions;

use oihso\CdekSDK2\Http\ApiResponse;

/**
 * Class ActionsWithDelete
 * @package oihso\CdekSDK2\Actions
 */
class ActionsWithDelete extends Action
{
    /**
     * Запрос на удаление по uuid
     * @param string $uuid
     * @return ApiResponse
     * @throws \oihso\CdekSDK2\Exceptions\RequestException
     */
    public function delete(string $uuid): ApiResponse
    {
        $response = $this->http_client->delete($this->slug($uuid));
        return $response;
    }
}
