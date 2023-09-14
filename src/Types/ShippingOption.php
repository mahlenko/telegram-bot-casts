<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\PaymentsInterface;

/**
 * This object represents one shipping option.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ShippingOption extends TelegramType implements PaymentsInterface
{
    /** Shipping option identifier */
    public string $id;

    /** Option title */
    public string $title;

    /**
     * List of price portions
     *
     * @var array<LabeledPrice>
     */
    public array $prices;
}
