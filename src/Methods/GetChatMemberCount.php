<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get the number of members in a chat. Returns Int on
 * success.
 */
class GetChatMemberCount extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * supergroup or channel (in the format @channelusername)
	 */
	public int|string $chat_id;
}
