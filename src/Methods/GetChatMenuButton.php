<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get the current value of the bot's menu button in a
 * private chat, or the default menu button. Returns MenuButton on
 * success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetChatMenuButton extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target private chat. If not specified,
     * default bot's menu button will be returned
     */
    public ?int $chat_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}
