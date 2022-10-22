<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a service message about a change in auto-delete
 * timer settings.
 */
class MessageAutoDeleteTimerChanged extends BaseType implements TypesInterface
{
	/** New auto-delete time for messages in the chat; in seconds */
	public int $message_auto_delete_time;
}
