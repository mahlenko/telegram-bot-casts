<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object describes the bot's menu button in a private chat. It
 * should be one of
 *
 * MenuButtonCommands
 * MenuButtonWebApp
 * MenuButtonDefault
 *
 * If a menu button other than MenuButtonDefault is set for a private
 * chat, then it is applied in the chat. Otherwise the default menu
 * button is applied. By default, the menu button opens the list of bot
 * commands.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MenuButton extends BaseType implements TypesInterface
{
}
