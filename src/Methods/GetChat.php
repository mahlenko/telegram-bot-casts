<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get up to date information about the chat (current
 * name of the user for one-on-one conversations, current username of a
 * user, group or channel, etc.). Returns a Chat object on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetChat extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * supergroup or channel (in the format @channelusername)
	 */
	public int|string $chat_id;
}
