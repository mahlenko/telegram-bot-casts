<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a chat member that has no additional privileges or
 * restrictions.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatMemberMember extends TelegramType implements TypesInterface
{
    /** The member's status in the chat, always “member” */
    public string $status;

    /** Information about the user */
    public User $user;
}
