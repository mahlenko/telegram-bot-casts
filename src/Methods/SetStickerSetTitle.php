<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\TelegramMethod;
use TelegramBot\Interface\StickersInterface;

/**
 * Use this method to set the title of a created sticker set. Returns
 * True on success.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetStickerSetTitle extends TelegramMethod implements StickersInterface
{
    /** Sticker set name */
    public string $name;

    /** Sticker set title, 1-64 characters */
    public string $title;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['name', 'title'];
}
