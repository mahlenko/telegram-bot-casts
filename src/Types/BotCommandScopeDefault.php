<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents the default scope of bot commands. Default commands are
 * used if no commands with a narrower scope are specified for the user.
 */
class BotCommandScopeDefault extends BaseType implements TypesInterface
{
	/** Scope type, must be default */
	public string $type;
}
