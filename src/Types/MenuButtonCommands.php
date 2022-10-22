<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
class MenuButtonCommands extends BaseType implements TypesInterface
{
	/** Type of the button, must be commands */
	public string $type;
}
