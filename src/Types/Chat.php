<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a chat.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Chat extends TelegramType implements TypesInterface
{
    /**
     * Unique identifier for this chat. This number may have more than 32
     * significant bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it has at most 52
     * significant bits, so a signed 64-bit integer or double-precision float
     * type are safe for storing this identifier.
     */
    public int $id;

    /**
     * Type of chat, can be either “private”, “group”,
     * “supergroup” or “channel”
     */
    public string $type;

    /** Optional. Title, for supergroups, channels and group chats */
    public ?string $title;

    /**
     * Optional. Username, for private chats, supergroups and channels if
     * available
     */
    public ?string $username;

    /** Optional. First name of the other party in a private chat */
    public ?string $first_name;

    /** Optional. Last name of the other party in a private chat */
    public ?string $last_name;

    /** Optional. True, if the supergroup chat is a forum (has topics enabled) */
    public ?bool $is_forum;

    /** Optional. Chat photo. Returned only in getChat. */
    public ?ChatPhoto $photo;

    /**
     * Optional. If non-empty, the list of all active chat usernames; for
     * private chats, supergroups and channels. Returned only in getChat.
     *
     * @var array<string>
     */
    public ?array $active_usernames;

    /**
     * Optional. Custom emoji identifier of emoji status of the other party
     * in a private chat. Returned only in getChat.
     */
    public ?string $emoji_status_custom_emoji_id;

    /**
     * Optional. Expiration date of the emoji status of the other party in a
     * private chat in Unix time, if any. Returned only in getChat.
     */
    public ?int $emoji_status_expiration_date;

    /**
     * Optional. Bio of the other party in a private chat. Returned only in
     * getChat.
     */
    public ?string $bio;

    /**
     * Optional. True, if privacy settings of the other party in the private
     * chat allows to use tg://user?id=<user_id> links only in chats with the
     * user. Returned only in getChat.
     */
    public ?bool $has_private_forwards;

    /**
     * Optional. True, if the privacy settings of the other party restrict
     * sending voice and video note messages in the private chat. Returned
     * only in getChat.
     */
    public ?bool $has_restricted_voice_and_video_messages;

    /**
     * Optional. True, if users need to join the supergroup before they can
     * send messages. Returned only in getChat.
     */
    public ?bool $join_to_send_messages;

    /**
     * Optional. True, if all users directly joining the supergroup need to
     * be approved by supergroup administrators. Returned only in getChat.
     */
    public ?bool $join_by_request;

    /**
     * Optional. Description, for groups, supergroups and channel chats.
     * Returned only in getChat.
     */
    public ?string $description;

    /**
     * Optional. Primary invite link, for groups, supergroups and channel
     * chats. Returned only in getChat.
     */
    public ?string $invite_link;

    /**
     * Optional. The most recent pinned message (by sending date). Returned
     * only in getChat.
     */
    public ?Message $pinned_message;

    /**
     * Optional. Default chat member permissions, for groups and supergroups.
     * Returned only in getChat.
     */
    public ?ChatPermissions $permissions;

    /**
     * Optional. For supergroups, the minimum allowed delay between
     * consecutive messages sent by each unpriviledged user; in seconds.
     * Returned only in getChat.
     */
    public ?int $slow_mode_delay;

    /**
     * Optional. The time after which all messages sent to the chat will be
     * automatically deleted; in seconds. Returned only in getChat.
     */
    public ?int $message_auto_delete_time;

    /**
     * Optional. True, if aggressive anti-spam checks are enabled in the
     * supergroup. The field is only available to chat administrators.
     * Returned only in getChat.
     */
    public ?bool $has_aggressive_anti_spam_enabled;

    /**
     * Optional. True, if non-administrators can only get the list of bots
     * and administrators in the chat. Returned only in getChat.
     */
    public ?bool $has_hidden_members;

    /**
     * Optional. True, if messages from the chat can't be forwarded to other
     * chats. Returned only in getChat.
     */
    public ?bool $has_protected_content;

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in
     * getChat.
     */
    public ?string $sticker_set_name;

    /**
     * Optional. True, if the bot can change the group sticker set. Returned
     * only in getChat.
     */
    public ?bool $can_set_sticker_set;

    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion
     * group identifier for a channel and vice versa; for supergroups and
     * channel chats. This identifier may be greater than 32 bits and some
     * programming languages may have difficulty/silent defects in
     * interpreting it. But it is smaller than 52 bits, so a signed 64 bit
     * integer or double-precision float type are safe for storing this
     * identifier. Returned only in getChat.
     */
    public ?int $linked_chat_id;

    /**
     * Optional. For supergroups, the location to which the supergroup is
     * connected. Returned only in getChat.
     */
    public ?ChatLocation $location;
}
