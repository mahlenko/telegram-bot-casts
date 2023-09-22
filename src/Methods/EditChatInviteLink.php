<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to edit a non-primary invite link created by the bot.
 * The bot must be an administrator in the chat for this to work and must
 * have the appropriate administrator rights. Returns the edited invite
 * link as a ChatInviteLink object.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class EditChatInviteLink extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** The invite link to edit */
    public string $invite_link;

    /** Invite link name; 0-32 characters */
    public ?string $name;

    /** Point in time (Unix timestamp) when the link will expire */
    public ?int $expire_date;

    /**
     * The maximum number of users that can be members of the chat
     * simultaneously after joining the chat via this invite link; 1-99999
     */
    public ?int $member_limit;

    /**
     * True, if users joining the chat via the link need to be approved by
     * chat administrators. If True, member_limit can't be specified
     */
    public ?bool $creates_join_request;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'invite_link'];
}
