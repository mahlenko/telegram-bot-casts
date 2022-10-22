<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Describes a Web App.
 */
class WebAppInfo extends BaseType implements TypesInterface
{
	/**
	 * An HTTPS URL of a Web App to be opened with additional data as
	 * specified in Initializing Web Apps
	 */
	public string $url;
}
