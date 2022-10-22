<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\GamesInterface;

/**
 * Use this method to set the score of the specified user in a game
 * message. On success, if the message is not an inline message, the
 * Message is returned, otherwise True is returned. Returns an error, if
 * the new score is not greater than the user's current score in the chat
 * and force is False.
 */
class SetGameScore extends BaseMethod implements GamesInterface
{
	/** User identifier */
	public int $user_id;

	/** New score, must be non-negative */
	public int $score;

	/**
	 * Pass True if the high score is allowed to decrease. This can be useful
	 * when fixing mistakes or banning cheaters
	 */
	public ?bool $force;

	/**
	 * Pass True if the game message should not be automatically edited to
	 * include the current scoreboard
	 */
	public ?bool $disable_edit_message;

	/**
	 * Required if inline_message_id is not specified. Unique identifier for
	 * the target chat
	 */
	public ?int $chat_id;

	/**
	 * Required if inline_message_id is not specified. Identifier of the sent
	 * message
	 */
	public ?int $message_id;

	/**
	 * Required if chat_id and message_id are not specified. Identifier of
	 * the inline message
	 */
	public ?string $inline_message_id;
}
