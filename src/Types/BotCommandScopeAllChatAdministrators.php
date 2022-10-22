<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents the scope of bot commands, covering all group and
 * supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators extends BaseType implements TypesInterface
{
	/** Scope type, must be all_chat_administrators */
	public string $type;
}
