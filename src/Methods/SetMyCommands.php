<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\BotCommandScope;

/**
 * Use this method to change the list of the bot's commands. See this
 * manual for more details about bot commands. Returns True on success.
 */
class SetMyCommands extends BaseMethod implements MethodsInterface
{
	/**
	 * A JSON-serialized list of bot commands to be set as the list of the
	 * bot's commands. At most 100 commands can be specified.
	 */
	public array $commands;

	/**
	 * A JSON-serialized object, describing scope of users for which the
	 * commands are relevant. Defaults to BotCommandScopeDefault.
	 */
	public ?BotCommandScope $scope;

	/**
	 * A two-letter ISO 639-1 language code. If empty, commands will be
	 * applied to all users from the given scope, for whose language there
	 * are no dedicated commands
	 */
	public ?string $language_code;
}
