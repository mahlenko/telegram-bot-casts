<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to delete a message, including service messages, with
 * the following limitations:- A message can only be deleted if it was
 * sent less than 48 hours ago.- Service messages about a supergroup,
 * channel, or forum topic creation can't be deleted.- A dice message in
 * a private chat can only be deleted if it was sent more than 24 hours
 * ago.- Bots can delete outgoing messages in private chats, groups, and
 * supergroups.- Bots can delete incoming messages in private chats.-
 * Bots granted can_post_messages permissions can delete outgoing
 * messages in channels.- If the bot is an administrator of a group, it
 * can delete any message there.- If the bot has can_delete_messages
 * permission in a supergroup or a channel, it can delete any message
 * there.Returns True on success.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class DeleteMessage extends TelegramMethod implements UpdatingMessagesInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Identifier of the message to delete */
    public int $message_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_id'];
}
