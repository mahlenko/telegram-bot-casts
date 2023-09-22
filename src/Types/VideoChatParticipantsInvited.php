<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about new members invited to
 * a video chat.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class VideoChatParticipantsInvited extends TelegramType implements TypesInterface
{
    /**
     * New members that were invited to the video chat
     *
     * @var array<User>
     */
    public array $users;
}
