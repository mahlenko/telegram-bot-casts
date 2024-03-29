<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object contains basic information about a successful payment.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SuccessfulPayment extends TelegramType implements PaymentsInterface
{
    /** Three-letter ISO 4217 currency code */
    public string $currency;

    /**
     * Total price in the smallest units of the currency (integer, not
     * float/double). For example, for a price of US$ 1.45 pass amount = 145.
     * See the exp parameter in currencies.json, it shows the number of
     * digits past the decimal point for each currency (2 for the majority of
     * currencies).
     */
    public int $total_amount;

    /** Bot specified invoice payload */
    public string $invoice_payload;

    /** Optional. Identifier of the shipping option chosen by the user */
    public ?string $shipping_option_id;

    /** Optional. Order information provided by the user */
    public ?OrderInfo $order_info;

    /** Telegram payment identifier */
    public string $telegram_payment_charge_id;

    /** Provider payment identifier */
    public string $provider_payment_charge_id;
}
