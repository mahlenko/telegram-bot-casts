<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object contains information about one member of a chat.
 * Currently, the following 6 types of chat members are supported:
 *
 * ChatMemberOwner
 * ChatMemberAdministrator
 * ChatMemberMember
 * ChatMemberRestricted
 * ChatMemberLeft
 * ChatMemberBanned
 */
class ChatMember extends BaseType implements TypesInterface
{
}
