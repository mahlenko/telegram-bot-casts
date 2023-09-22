<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get information about custom emoji stickers by
 * their identifiers. Returns an Array of Sticker objects.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetCustomEmojiStickers extends TelegramMethod implements StickersInterface
{
    /**
     * List of custom emoji identifiers. At most 200 custom emoji identifiers
     * can be specified.
     *
     * @var array<string>
     */
    public array $custom_emoji_ids;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['custom_emoji_ids'];
}
