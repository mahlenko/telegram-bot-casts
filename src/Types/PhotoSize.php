<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents one size of a photo or a file / sticker
 * thumbnail.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PhotoSize extends BaseType implements TypesInterface
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

    /** Photo width */
    public int $width;

    /** Photo height */
    public int $height;

    /** Optional. File size in bytes */
    public ?int $file_size;
}
