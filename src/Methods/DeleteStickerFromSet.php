<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;

/**
 * Use this method to delete a sticker from a set created by the bot.
 * Returns True on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class DeleteStickerFromSet extends BaseMethod implements StickersInterface
{
    /** File identifier of the sticker */
    public string $sticker;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['sticker'];
}
