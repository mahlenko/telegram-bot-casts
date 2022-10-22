<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\PaymentsInterface;

/**
 * This object represents a shipping address.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ShippingAddress extends BaseType implements PaymentsInterface
{
	/** Two-letter ISO 3166-1 alpha-2 country code */
	public string $country_code;

	/** State, if applicable */
	public string $state;

	/** City */
	public string $city;

	/** First line for the address */
	public string $street_line1;

	/** Second line for the address */
	public string $street_line2;

	/** Address post code */
	public string $post_code;
}
