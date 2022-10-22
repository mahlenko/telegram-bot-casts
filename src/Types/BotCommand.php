<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a bot command.
 */
class BotCommand extends BaseType implements TypesInterface
{
	/**
	 * Text of the command; 1-32 characters. Can contain only lowercase
	 * English letters, digits and underscores.
	 */
	public string $command;

	/** Description of the command; 1-256 characters. */
	public string $description;
}
