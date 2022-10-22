<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\GamesInterface;

/**
 * This object represents one row of the high scores table for a game.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GameHighScore extends BaseType implements GamesInterface
{
    /** Position in high score table for the game */
    public int $position;

    /** User */
    public User $user;

    /** Score */
    public int $score;
}
