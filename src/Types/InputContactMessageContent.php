<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Represents the content of a contact message to be sent as the result
 * of an inline query.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputContactMessageContent extends BaseType implements InlineModeInterface
{
	/** Contact's phone number */
	public string $phone_number;

	/** Contact's first name */
	public string $first_name;

	/** Optional. Contact's last name */
	public ?string $last_name;

	/**
	 * Optional. Additional data about the contact in the form of a vCard,
	 * 0-2048 bytes
	 */
	public ?string $vcard;
}
