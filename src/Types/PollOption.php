<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption extends BaseType implements TypesInterface
{
	/** Option text, 1-100 characters */
	public string $text;

	/** Number of users that voted for this option */
	public int $voter_count;
}
