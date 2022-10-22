<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\MenuButton;

/**
 * Use this method to change the bot's menu button in a private chat, or
 * the default menu button. Returns True on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetChatMenuButton extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target private chat. If not specified,
     * default bot's menu button will be changed
     */
    public ?int $chat_id;

    /**
     * A JSON-serialized object for the bot's new menu button. Defaults to
     * MenuButtonDefault
     */
    public ?MenuButton $menu_button;
}
