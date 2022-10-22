<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\BotCommandScope;

/**
 * Use this method to get the current list of the bot's commands for the
 * given scope and user language. Returns an Array of BotCommand objects.
 * If commands aren't set, an empty list is returned.
 */
class GetMyCommands extends BaseMethod implements MethodsInterface
{
	/**
	 * A JSON-serialized object, describing scope of users. Defaults to
	 * BotCommandScopeDefault.
	 */
	public ?BotCommandScope $scope;

	/** A two-letter ISO 639-1 language code or an empty string */
	public ?string $language_code;
}
