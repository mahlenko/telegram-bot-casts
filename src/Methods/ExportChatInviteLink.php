<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to generate a new primary invite link for a chat; any
 * previously generated primary link is revoked. The bot must be an
 * administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns the new invite link as
 * String on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ExportChatInviteLink extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;
}
