<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\GamesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents one row of the high scores table for a game.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GameHighScore extends TelegramType implements GamesInterface
{
    /** Position in high score table for the game */
    public int $position;

    /** User */
    public User $user;

    /** Score */
    public int $score;
}
