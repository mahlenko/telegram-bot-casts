<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a Telegram user or bot.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class User extends TelegramType implements TypesInterface
{
    /**
     * Unique identifier for this user or bot. This number may have more than
     * 32 significant bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it has at most 52
     * significant bits, so a 64-bit integer or double-precision float type
     * are safe for storing this identifier.
     */
    public int $id;

    /** True, if this user is a bot */
    public bool $is_bot;

    /** User's or bot's first name */
    public string $first_name;

    /** Optional. User's or bot's last name */
    public ?string $last_name;

    /** Optional. User's or bot's username */
    public ?string $username;

    /** Optional. IETF language tag of the user's language */
    public ?string $language_code;

    /** Optional. True, if this user is a Telegram Premium user */
    public ?bool $is_premium;

    /** Optional. True, if this user added the bot to the attachment menu */
    public ?bool $added_to_attachment_menu;

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in
     * getMe.
     */
    public ?bool $can_join_groups;

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only
     * in getMe.
     */
    public ?bool $can_read_all_group_messages;

    /**
     * Optional. True, if the bot supports inline queries. Returned only in
     * getMe.
     */
    public ?bool $supports_inline_queries;
}
