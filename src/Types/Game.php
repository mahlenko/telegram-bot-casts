<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\GamesInterface;

/**
 * This object represents a game. Use BotFather to create and edit games,
 * their short names will act as unique identifiers.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Game extends BaseType implements GamesInterface
{
	/** Title of the game */
	public string $title;

	/** Description of the game */
	public string $description;

	/** Photo that will be displayed in the game message in chats. */
	public array $photo;

	/**
	 * Optional. Brief description of the game or high scores included in the
	 * game message. Can be automatically edited to include current high
	 * scores for the game when the bot calls setGameScore, or manually
	 * edited using editMessageText. 0-4096 characters.
	 */
	public ?string $text;

	/**
	 * Optional. Special entities that appear in text, such as usernames,
	 * URLs, bot commands, etc.
	 */
	public ?array $text_entities;

	/**
	 * Optional. Animation that will be displayed in the game message in
	 * chats. Upload via BotFather
	 */
	public ?Animation $animation;
}
