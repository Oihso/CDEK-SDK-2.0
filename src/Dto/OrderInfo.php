<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Dto;

use oihso\CdekSDK2\BaseTypes\Contact;
use oihso\CdekSDK2\BaseTypes\Location;
use oihso\CdekSDK2\BaseTypes\Money;
use oihso\CdekSDK2\BaseTypes\Package;
use oihso\CdekSDK2\BaseTypes\Seller;
use oihso\CdekSDK2\BaseTypes\Services;
use oihso\CdekSDK2\BaseTypes\Threshold;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * Class Order
 * @package oihso\CdekSDK2\Dto
 */
class OrderInfo
{
    /**
     * Идентификатор заказа
     * @Type("string")
     * @var string
     */
    public $uuid;

    /**
     * Тип заказа
     * @Type("int")
     * @var int
     */
    public $type;

    /**
     * Признак возвратного заказа
     * @Type("bool")
     * @var bool
     */
    public $is_return;

    /**
     * Номер заказа в системе СДЭК
     * @Type("int")
     * @var int
     */
    public $cdek_number;

    /**
     * Номер заказа в ИС Клиента
     * @Type("string")
     * @var string
     */
    public $number;

    /**
     * Код тарифа
     * @Type("int")
     * @var int
     */
    public $tariff_code;

    /**
     * Комментарий к заказу
     * @Type("string")
     * @var string
     */
    public $comment;

    /**
     * Ключ разработчика
     * @Type("string")
     * @var string
     */
    public $developer_key;

    /**
     * Код ПВЗ для забора
     * @Type("string")
     * @var string
     */
    public $shipment_point;

    /**
     * Код ПВЗ СДЭК для доставки
     * @Type("string")
     * @var string
     */
    public $delivery_point;

    /**
     * Код валюты объявленной стоимости заказа
     * @Type("string")
     * @var string
     */
    public $items_cost_currency;

    /**
     * Код валюты наложенного платежа
     * @Type("string")
     * @var string
     */
    public $recipient_currency;

    /**
     * Дата инвойса
     * @Type("string")
     * @var string
     */
    public $date_invoice;

    /**
     * Грузоотправитель
     * @Type("string")
     * @var string
     */
    public $shipper_name;

    /**
     * Адрес грузоотправителя
     * @Type("string")
     * @var string
     */
    public $shipper_address;

    /**
     * Стоимость доставки, которую ИМ берет с получателя
     * @Type("oihso\CdekSDK2\BaseTypes\Money")
     * @var Money
     */
    public $delivery_recipient_cost;

    /**
     * Доп. сбор за доставку (которую ИМ берет с получателя) в зависимости от суммы заказа
     * @Type("array<oihso\CdekSDK2\BaseTypes\Threshold>")
     * @var Threshold[]
     */
    public $delivery_recipient_cost_adv;

    /**
     * Отправитель
     * @Type("oihso\CdekSDK2\BaseTypes\Contact")
     * @var Contact
     */
    public $sender;

    /**
     * Реквизиты реального продавца
     * @Type("oihso\CdekSDK2\BaseTypes\Seller")
     * @var Seller
     */
    public $seller;

    /**
     * Получатель
     * @Type("oihso\CdekSDK2\BaseTypes\Contact")
     * @var Contact
     */
    public $recipient;

    /**
     * Адрес отправления
     * @Type("oihso\CdekSDK2\BaseTypes\Location")
     * @var Location
     */
    public $from_location;

    /**
     * Адрес получения
     * @Type("oihso\CdekSDK2\BaseTypes\Location")
     * @var Location
     */
    public $to_location;

    /**
     * Дополнительные услуги
     * @Type("array<oihso\CdekSDK2\BaseTypes\Services>")
     * @var Services[]
     */
    public $services;

    /**
     * Список информации по местам
     * @Type("array<oihso\CdekSDK2\BaseTypes\Package>")
     * @var Package[]
     */
    public $packages;

    /**
     * Список статусов по заказу, отсортированных по дате и времени
     * @Type("array<oihso\CdekSDK2\Dto\Statuses>")
     * @var Statuses[]
     */
    public $statuses;

    /**
     * Информация о вручении
     * @Type("oihso\CdekSDK2\Dto\DeliveryDetail")
     * @var DeliveryDetail
     */
    public $delivery_detail;
}
