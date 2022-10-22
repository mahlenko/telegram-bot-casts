<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents the scope of bot commands, covering all administrators of a
 * specific group or supergroup chat.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeChatAdministrators extends BaseType implements TypesInterface
{
	/** Scope type, must be chat_administrators */
	public string $type;

	/**
	 * Unique identifier for the target chat or username of the target
	 * supergroup (in the format @supergroupusername)
	 */
	public int|string $chat_id;
}
