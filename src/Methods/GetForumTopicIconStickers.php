<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get custom emoji stickers, which can be used as a
 * forum topic icon by any user. Requires no parameters. Returns an Array
 * of Sticker objects.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetForumTopicIconStickers extends BaseMethod implements MethodsInterface
{
    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}
