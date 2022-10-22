<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends BaseType implements TypesInterface
{
	/**
	 * The location to which the supergroup is connected. Can't be a live
	 * location.
	 */
	public Location $location;

	/** Location address; 1-64 characters, as defined by the chat owner */
	public string $address;
}
