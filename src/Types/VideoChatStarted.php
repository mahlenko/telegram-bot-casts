<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about a video chat started in
 * the chat. Currently holds no information.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class VideoChatStarted extends TelegramType implements TypesInterface
{
}
