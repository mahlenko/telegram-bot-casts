<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object contains information about one answer option in a poll.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PollOption extends TelegramType implements TypesInterface
{
    /** Option text, 1-100 characters */
    public string $text;

    /** Number of users that voted for this option */
    public int $voter_count;
}
