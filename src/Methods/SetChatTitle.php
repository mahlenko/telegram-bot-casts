<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to change the title of a chat. Titles can't be changed
 * for private chats. The bot must be an administrator in the chat for
 * this to work and must have the appropriate administrator rights.
 * Returns True on success.
 */
class SetChatTitle extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * channel (in the format @channelusername)
	 */
	public int|string $chat_id;

	/** New chat title, 1-255 characters */
	public string $title;
}
