<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\PaymentsInterface;

/**
 * This object contains information about an incoming shipping query.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ShippingQuery extends BaseType implements PaymentsInterface
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
