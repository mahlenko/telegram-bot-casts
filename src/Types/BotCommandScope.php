<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents the scope to which bot commands are applied.
 * Currently, the following 7 scopes are supported:
 *
 * BotCommandScopeDefault
 * BotCommandScopeAllPrivateChats
 * BotCommandScopeAllGroupChats
 * BotCommandScopeAllChatAdministrators
 * BotCommandScopeChat
 * BotCommandScopeChatAdministrators
 * BotCommandScopeChatMember
 */
class BotCommandScope extends BaseType implements TypesInterface
{
}
