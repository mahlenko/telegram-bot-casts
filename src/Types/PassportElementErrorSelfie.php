<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TelegramPassportInterface;

/**
 * Represents an issue with the selfie with a document. The error is
 * considered resolved when the file with the selfie changes.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportElementErrorSelfie extends BaseType implements TelegramPassportInterface
{
    /** Error source, must be selfie */
    public string $source;

    /**
     * The section of the user's Telegram Passport which has the issue, one
     * of “passport”, “driver_license”, “identity_card”,
     * “internal_passport”
     */
    public string $type;

    /** Base64-encoded hash of the file with the selfie */
    public string $file_hash;

    /** Error message */
    public string $message;
}
