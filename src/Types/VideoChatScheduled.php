<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a service message about a video chat scheduled
 * in the chat.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class VideoChatScheduled extends TelegramType implements TypesInterface
{
    /**
     * Point in time (Unix timestamp) when the video chat is supposed to be
     * started by a chat administrator
     */
    public int $start_date;
}
