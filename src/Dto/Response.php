<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Dto;

use oihso\CdekSDK2\BaseTypes\Barcode;
use oihso\CdekSDK2\BaseTypes\Intake;
use oihso\CdekSDK2\BaseTypes\Invoice;
use oihso\CdekSDK2\BaseTypes\Order;
use oihso\CdekSDK2\BaseTypes\WebHook;
use JMS\Serializer\Annotation\Type;

/**
 * Class Response
 * @package oihso\CdekSDK2\Dto
 */
class Response
{
    /**
     * Информация о сущности, над которой выполняется запрос
     * (заказ, заявка, печатная форма, договоренность о доставке, подписка)
     * @Type("oihso\CdekSDK2\BaseTypes\WebHook")
     * @var Barcode | Intake | Invoice | Order | WebHook | OrderInfo
     */
    public $entity;

    /**
     * Информация о запросах над сущностью
     * @Type("array<oihso\CdekSDK2\Dto\Request>")
     * @var Request[]
     */
    public $requests;

    /**
     * Связанные с заказом сущности
     * @Type("array<oihso\CdekSDK2\Dto\Relations>")
     * @var  Relations[]
     */
    public $related_entities;
}
