<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about an incoming shipping query.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ShippingQuery extends TelegramType implements PaymentsInterface
{
    /** Unique query identifier */
    public string $id;

    /** User who sent the query */
    public User $from;

    /** Bot specified invoice payload */
    public string $invoice_payload;

    /** User specified shipping address */
    public ShippingAddress $shipping_address;
}
