<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\TelegramMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to clear the list of pinned messages in a chat. If the
 * chat is not a private chat, the bot must be an administrator in the
 * chat for this to work and must have the 'can_pin_messages'
 * administrator right in a supergroup or 'can_edit_messages'
 * administrator right in a channel. Returns True on success.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UnpinAllChatMessages extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id'];
}
