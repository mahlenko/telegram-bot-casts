<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\StickersInterface;

/**
 * This object represents a sticker set.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class StickerSet extends BaseType implements StickersInterface
{
    /** Sticker set name */
    public string $name;

    /** Sticker set title */
    public string $title;

    /**
     * Type of stickers in the set, currently one of “regular”,
     * “mask”, “custom_emoji”
     */
    public string $sticker_type;

    /** True, if the sticker set contains animated stickers */
    public bool $is_animated;

    /** True, if the sticker set contains video stickers */
    public bool $is_video;

    /** List of all set stickers */
    public array $stickers;

    /** Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
    public ?PhotoSize $thumb;
}
