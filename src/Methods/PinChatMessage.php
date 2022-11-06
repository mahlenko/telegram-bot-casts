<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to add a message to the list of pinned messages in a
 * chat. If the chat is not a private chat, the bot must be an
 * administrator in the chat for this to work and must have the
 * 'can_pin_messages' administrator right in a supergroup or
 * 'can_edit_messages' administrator right in a channel. Returns True on
 * success.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PinChatMessage extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Identifier of a message to pin */
    public int $message_id;

    /**
     * Pass True if it is not necessary to send a notification to all chat
     * members about the new pinned message. Notifications are always
     * disabled in channels and private chats.
     */
    public ?bool $disable_notification;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_id'];
}
