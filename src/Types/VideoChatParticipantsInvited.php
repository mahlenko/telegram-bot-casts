<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a service message about new members invited to
 * a video chat.
 */
class VideoChatParticipantsInvited extends BaseType implements TypesInterface
{
	/** New members that were invited to the video chat */
	public array $users;
}
