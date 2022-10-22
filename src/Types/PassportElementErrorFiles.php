<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TelegramPassportInterface;

/**
 * Represents an issue with a list of scans. The error is considered
 * resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles extends BaseType implements TelegramPassportInterface
{
	/** Error source, must be files */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the issue, one
	 * of “utility_bill”, “bank_statement”, “rental_agreement”,
	 * “passport_registration”, “temporary_registration”
	 */
	public string $type;

	/** List of base64-encoded file hashes */
	public array $file_hashes;

	/** Error message */
	public string $message;
}
