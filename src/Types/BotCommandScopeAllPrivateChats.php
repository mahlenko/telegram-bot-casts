<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents the scope of bot commands, covering all private chats.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeAllPrivateChats extends BaseType implements TypesInterface
{
	/** Scope type, must be all_private_chats */
	public string $type;
}
