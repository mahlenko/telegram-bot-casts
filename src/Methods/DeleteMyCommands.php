<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\BotCommandScope;

/**
 * Use this method to delete the list of the bot's commands for the given
 * scope and user language. After deletion, higher level commands will be
 * shown to affected users. Returns True on success.
 */
class DeleteMyCommands extends BaseMethod implements MethodsInterface
{
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
