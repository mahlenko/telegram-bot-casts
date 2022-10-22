<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 */
class SentWebAppMessage extends BaseType implements InlineModeInterface
{
	/**
	 * Optional. Identifier of the sent inline message. Available only if
	 * there is an inline keyboard attached to the message.
	 */
	public ?string $inline_message_id;
}
