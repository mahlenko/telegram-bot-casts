<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TelegramPassportInterface;

/**
 * This object represents a file uploaded to Telegram Passport. Currently
 * all Telegram Passport files are in JPEG format when decrypted and
 * don't exceed 10MB.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportFile extends BaseType implements TelegramPassportInterface
{
    /**
     * Identifier for this file, which can be used to download or reuse the
     * file
     */
    public string $file_id;

    /**
     * Unique identifier for this file, which is supposed to be the same over
     * time and for different bots. Can't be used to download or reuse the
     * file.
     */
    public string $file_unique_id;

    /** File size in bytes */
    public int $file_size;

    /** Unix time when the file was uploaded */
    public int $file_date;
}
