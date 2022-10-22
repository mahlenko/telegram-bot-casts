<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated extends BaseType implements TypesInterface
{
	/** Chat the user belongs to */
	public Chat $chat;

	/** Performer of the action, which resulted in the change */
	public User $from;

	/** Date the change was done in Unix time */
	public int $date;

	/** Previous information about the chat member */
	public ChatMember $old_chat_member;

	/** New information about the chat member */
	public ChatMember $new_chat_member;

	/**
	 * Optional. Chat invite link, which was used by the user to join the
	 * chat; for joining by invite link events only.
	 */
	public ?ChatInviteLink $invite_link;
}
