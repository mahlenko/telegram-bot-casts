<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\TelegramMethod;
use TelegramBot\Interface\StickersInterface;

/**
 * Use this method to change the list of emoji assigned to a regular or
 * custom emoji sticker. The sticker must belong to a sticker set created
 * by the bot. Returns True on success.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetStickerEmojiList extends TelegramMethod implements StickersInterface
{
    /** File identifier of the sticker */
    public string $sticker;

    /**
     * A JSON-serialized list of 1-20 emoji associated with the sticker
     *
     * @var array<string>
     */
    public array $emoji_list;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['sticker', 'emoji_list'];
}
