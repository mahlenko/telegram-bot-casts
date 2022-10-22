<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a chat member that isn't currently a member of the chat,
 * but may join it themselves.
 */
class ChatMemberLeft extends BaseType implements TypesInterface
{
	/** The member's status in the chat, always “left” */
	public string $status;

	/** Information about the user */
	public User $user;
}
