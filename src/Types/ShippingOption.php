<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\PaymentsInterface;

/**
 * This object represents one shipping option.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ShippingOption extends BaseType implements PaymentsInterface
{
	/** Shipping option identifier */
	public string $id;

	/** Option title */
	public string $title;

	/** List of price portions */
	public array $prices;
}
