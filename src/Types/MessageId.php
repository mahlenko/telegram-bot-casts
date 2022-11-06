<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a unique message identifier.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageId extends BaseType implements TypesInterface
{
    /** Unique message identifier */
    public int $message_id;
}
