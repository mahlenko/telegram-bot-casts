<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a service message about new members invited to
 * a video chat.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class VideoChatParticipantsInvited extends BaseType implements TypesInterface
{
    /**
     * New members that were invited to the video chat
     *
     * @var array<User>
     */
    public array $users;
}
