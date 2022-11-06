<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PollAnswer extends BaseType implements TypesInterface
{
    /** Unique poll identifier */
    public string $poll_id;

    /** The user, who changed the answer to the poll */
    public User $user;

    /**
     * 0-based identifiers of answer options, chosen by the user. May be
     * empty if the user retracted their vote.
     *
     * @var array<int>
     */
    public array $option_ids;
}
