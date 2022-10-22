<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TelegramPassportInterface;

/**
 * Represents an issue with a document scan. The error is considered
 * resolved when the file with the document scan changes.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportElementErrorFile extends BaseType implements TelegramPassportInterface
{
	/** Error source, must be file */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the issue, one
	 * of “utility_bill”, “bank_statement”, “rental_agreement”,
	 * “passport_registration”, “temporary_registration”
	 */
	public string $type;

	/** Base64-encoded file hash */
	public string $file_hash;

	/** Error message */
	public string $message;
}
