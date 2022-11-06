<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to edit name and icon of a topic in a forum supergroup
 * chat. The bot must be an administrator in the chat for this to work
 * and must have can_manage_topics administrator rights, unless it is the
 * creator of the topic. Returns True on success.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class EditForumTopic extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Unique identifier for the target message thread of the forum topic */
    public int $message_thread_id;

    /** New topic name, 1-128 characters */
    public string $name;

    /**
     * New unique identifier of the custom emoji shown as the topic icon. Use
     * getForumTopicIconStickers to get all allowed custom emoji identifiers
     */
    public string $icon_custom_emoji_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_thread_id', 'name', 'icon_custom_emoji_id'];
}
