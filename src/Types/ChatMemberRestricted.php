<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a chat member that is under certain restrictions in the
 * chat. Supergroups only.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatMemberRestricted extends BaseType implements TypesInterface
{
	/** The member's status in the chat, always “restricted” */
	public string $status;

	/** Information about the user */
	public User $user;

	/** True, if the user is a member of the chat at the moment of the request */
	public bool $is_member;

	/**
	 * True, if the user is allowed to change the chat title, photo and other
	 * settings
	 */
	public bool $can_change_info;

	/** True, if the user is allowed to invite new users to the chat */
	public bool $can_invite_users;

	/** True, if the user is allowed to pin messages */
	public bool $can_pin_messages;

	/**
	 * True, if the user is allowed to send text messages, contacts,
	 * locations and venues
	 */
	public bool $can_send_messages;

	/**
	 * True, if the user is allowed to send audios, documents, photos,
	 * videos, video notes and voice notes
	 */
	public bool $can_send_media_messages;

	/** True, if the user is allowed to send polls */
	public bool $can_send_polls;

	/**
	 * True, if the user is allowed to send animations, games, stickers and
	 * use inline bots
	 */
	public bool $can_send_other_messages;

	/**
	 * True, if the user is allowed to add web page previews to their
	 * messages
	 */
	public bool $can_add_web_page_previews;

	/**
	 * Date when restrictions will be lifted for this user; unix time. If 0,
	 * then the user is restricted forever
	 */
	public int $until_date;
}
