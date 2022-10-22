<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to revoke an invite link created by the bot. If the
 * primary link is revoked, a new link is automatically generated. The
 * bot must be an administrator in the chat for this to work and must
 * have the appropriate administrator rights. Returns the revoked invite
 * link as ChatInviteLink object.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class RevokeChatInviteLink extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier of the target chat or username of the target channel
     * (in the format @channelusername)
     */
    public int|string $chat_id;

    /** The invite link to revoke */
    public string $invite_link;
}
