<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;

/**
 * Use this method to get a sticker set. On success, a StickerSet object
 * is returned.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetStickerSet extends BaseMethod implements StickersInterface
{
    /** Name of the sticker set */
    public string $name;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['name'];
}
