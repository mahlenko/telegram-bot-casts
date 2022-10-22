<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a menu button, which launches a Web App.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MenuButtonWebApp extends BaseType implements TypesInterface
{
	/** Type of the button, must be web_app */
	public string $type;

	/** Text on the button */
	public string $text;

	/**
	 * Description of the Web App that will be launched when the user presses
	 * the button. The Web App will be able to send an arbitrary message on
	 * behalf of the user using the method answerWebAppQuery.
	 */
	public WebAppInfo $web_app;
}
