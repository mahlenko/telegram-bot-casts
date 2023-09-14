<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents an invite link for a chat.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatInviteLink extends TelegramType implements TypesInterface
{
    /**
     * The invite link. If the link was created by another chat
     * administrator, then the second part of the link will be replaced with
     * “…”.
     */
    public string $invite_link;

    /** Creator of the link */
    public User $creator;

    /**
     * True, if users joining the chat via the link need to be approved by
     * chat administrators
     */
    public bool $creates_join_request;

    /** True, if the link is primary */
    public bool $is_primary;

    /** True, if the link is revoked */
    public bool $is_revoked;

    /** Optional. Invite link name */
    public ?string $name;

    /**
     * Optional. Point in time (Unix timestamp) when the link will expire or
     * has been expired
     */
    public ?int $expire_date;

    /**
     * Optional. The maximum number of users that can be members of the chat
     * simultaneously after joining the chat via this invite link; 1-99999
     */
    public ?int $member_limit;

    /** Optional. Number of pending join requests created using this link */
    public ?int $pending_join_request_count;
}
