<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Dto;

use oihso\CdekSDK2\BaseTypes\WebHook;
use JMS\Serializer\Annotation\Type;

class WebHookList
{
    /**
     * Список ПВЗ
     * @Type("array<oihso\CdekSDK2\BaseTypes\WebHook>")
     * @var WebHook[]
     */
    public $items = [];
}
