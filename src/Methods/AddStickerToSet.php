<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputSticker;

/**
 * Use this method to add a new sticker to a set created by the bot. The
 * format of the added sticker must match the format of the other
 * stickers in the set. Emoji sticker sets can have up to 200 stickers.
 * Animated and video sticker sets can have up to 50 stickers. Static
 * sticker sets can have up to 120 stickers. Returns True on success.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class AddStickerToSet extends TelegramMethod implements StickersInterface
{
    /** User identifier of sticker set owner */
    public int $user_id;

    /** Sticker set name */
    public string $name;

    /**
     * A JSON-serialized object with information about the added sticker. If
     * exactly the same sticker had already been added to the set, then the
     * set isn't changed.
     */
    public InputSticker $sticker;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['user_id', 'name', 'sticker'];
}
