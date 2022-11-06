<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Describes actions that a non-administrator user is allowed to take in
 * a chat.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatPermissions extends BaseType implements TypesInterface
{
    /**
     * Optional. True, if the user is allowed to send text messages,
     * contacts, locations and venues
     */
    public ?bool $can_send_messages;

    /**
     * Optional. True, if the user is allowed to send audios, documents,
     * photos, videos, video notes and voice notes, implies can_send_messages
     */
    public ?bool $can_send_media_messages;

    /**
     * Optional. True, if the user is allowed to send polls, implies
     * can_send_messages
     */
    public ?bool $can_send_polls;

    /**
     * Optional. True, if the user is allowed to send animations, games,
     * stickers and use inline bots, implies can_send_media_messages
     */
    public ?bool $can_send_other_messages;

    /**
     * Optional. True, if the user is allowed to add web page previews to
     * their messages, implies can_send_media_messages
     */
    public ?bool $can_add_web_page_previews;

    /**
     * Optional. True, if the user is allowed to change the chat title, photo
     * and other settings. Ignored in public supergroups
     */
    public ?bool $can_change_info;

    /** Optional. True, if the user is allowed to invite new users to the chat */
    public ?bool $can_invite_users;

    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in
     * public supergroups
     */
    public ?bool $can_pin_messages;

    /**
     * Optional. True, if the user is allowed to create forum topics. If
     * omitted defaults to the value of can_pin_messages
     */
    public ?bool $can_manage_topics;
}
