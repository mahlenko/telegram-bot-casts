<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents the scope of bot commands, covering a specific member of a
 * group or supergroup chat.
 */
class BotCommandScopeChatMember extends BaseType implements TypesInterface
{
	/** Scope type, must be chat_member */
	public string $type;

	/**
	 * Unique identifier for the target chat or username of the target
	 * supergroup (in the format @supergroupusername)
	 */
	public int|string $chat_id;

	/** Unique identifier of the target user */
	public int $user_id;
}
