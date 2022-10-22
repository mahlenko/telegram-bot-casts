<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to approve a chat join request. The bot must be an
 * administrator in the chat for this to work and must have the
 * can_invite_users administrator right. Returns True on success.
 */
class ApproveChatJoinRequest extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * channel (in the format @channelusername)
	 */
	public int|string $chat_id;

	/** Unique identifier of the target user */
	public int $user_id;
}
