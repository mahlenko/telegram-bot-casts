<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TelegramPassportInterface;

/**
 * Represents an issue in an unspecified place. The error is considered
 * resolved when new data is added.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportElementErrorUnspecified extends TelegramType implements TelegramPassportInterface
{
    /** Error source, must be unspecified */
    public string $source;

    /** Type of element of the user's Telegram Passport which has the issue */
    public string $type;

    /** Base64-encoded element hash */
    public string $element_hash;

    /** Error message */
    public string $message;
}
