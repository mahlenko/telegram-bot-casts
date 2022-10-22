<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\ChatPermissions;

/**
 * Use this method to set default chat permissions for all members. The
 * bot must be an administrator in the group or a supergroup for this to
 * work and must have the can_restrict_members administrator rights.
 * Returns True on success.
 */
class SetChatPermissions extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * supergroup (in the format @supergroupusername)
	 */
	public int|string $chat_id;

	/** A JSON-serialized object for new default chat permissions */
	public ChatPermissions $permissions;
}
