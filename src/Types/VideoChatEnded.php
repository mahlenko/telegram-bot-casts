<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a service message about a video chat ended in
 * the chat.
 */
class VideoChatEnded extends BaseType implements TypesInterface
{
	/** Video chat duration in seconds */
	public int $duration;
}
