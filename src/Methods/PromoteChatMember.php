<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to promote or demote a user in a supergroup or a
 * channel. The bot must be an administrator in the chat for this to work
 * and must have the appropriate administrator rights. Pass False for all
 * boolean parameters to demote a user. Returns True on success.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PromoteChatMember extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /** Pass True if the administrator's presence in the chat is hidden */
    public ?bool $is_anonymous;

    /**
     * Pass True if the administrator can access the chat event log, chat
     * statistics, message statistics in channels, see channel members, see
     * anonymous administrators in supergroups and ignore slow mode. Implied
     * by any other administrator privilege
     */
    public ?bool $can_manage_chat;

    /** Pass True if the administrator can create channel posts, channels only */
    public ?bool $can_post_messages;

    /**
     * Pass True if the administrator can edit messages of other users and
     * can pin messages, channels only
     */
    public ?bool $can_edit_messages;

    /** Pass True if the administrator can delete messages of other users */
    public ?bool $can_delete_messages;

    /** Pass True if the administrator can manage video chats */
    public ?bool $can_manage_video_chats;

    /** Pass True if the administrator can restrict, ban or unban chat members */
    public ?bool $can_restrict_members;

    /**
     * Pass True if the administrator can add new administrators with a
     * subset of their own privileges or demote administrators that he has
     * promoted, directly or indirectly (promoted by administrators that were
     * appointed by him)
     */
    public ?bool $can_promote_members;

    /**
     * Pass True if the administrator can change chat title, photo and other
     * settings
     */
    public ?bool $can_change_info;

    /** Pass True if the administrator can invite new users to the chat */
    public ?bool $can_invite_users;

    /** Pass True if the administrator can pin messages, supergroups only */
    public ?bool $can_pin_messages;

    /**
     * Pass True if the user is allowed to create, rename, close, and reopen
     * forum topics, supergroups only
     */
    public ?bool $can_manage_topics;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'user_id'];
}
