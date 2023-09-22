<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to revoke an invite link created by the bot. If the
 * primary link is revoked, a new link is automatically generated. The
 * bot must be an administrator in the chat for this to work and must
 * have the appropriate administrator rights. Returns the revoked invite
 * link as ChatInviteLink object.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class RevokeChatInviteLink extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier of the target chat or username of the target channel
     * (in the format @channelusername)
     */
    public int|string $chat_id;

    /** The invite link to revoke */
    public string $invite_link;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'invite_link'];
}
