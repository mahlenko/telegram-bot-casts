<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a chat member that has no additional privileges or
 * restrictions.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatMemberMember extends BaseType implements TypesInterface
{
	/** The member's status in the chat, always “member” */
	public string $status;

	/** Information about the user */
	public User $user;
}
