<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\PaymentsInterface;

/**
 * This object represents information about an order.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class OrderInfo extends TelegramType implements PaymentsInterface
{
    /** Optional. User name */
    public ?string $name;

    /** Optional. User's phone number */
    public ?string $phone_number;

    /** Optional. User email */
    public ?string $email;

    /** Optional. User shipping address */
    public ?ShippingAddress $shipping_address;
}
