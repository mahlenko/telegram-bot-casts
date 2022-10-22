<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TelegramPassportInterface;

/**
 * Describes data required for decrypting and authenticating
 * EncryptedPassportElement. See the Telegram Passport Documentation for
 * a complete description of the data decryption and authentication
 * processes.
 */
class EncryptedCredentials extends BaseType implements TelegramPassportInterface
{
	/**
	 * Base64-encoded encrypted JSON-serialized data with unique user's
	 * payload, data hashes and secrets required for EncryptedPassportElement
	 * decryption and authentication
	 */
	public string $data;

	/** Base64-encoded data hash for data authentication */
	public string $hash;

	/**
	 * Base64-encoded secret, encrypted with the bot's public RSA key,
	 * required for data decryption
	 */
	public string $secret;
}
