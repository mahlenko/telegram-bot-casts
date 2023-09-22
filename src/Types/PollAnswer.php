<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PollAnswer extends TelegramType implements TypesInterface
{
    /** Unique poll identifier */
    public string $poll_id;

    /**
     * Optional. The chat that changed the answer to the poll, if the voter
     * is anonymous
     */
    public ?Chat $voter_chat;

    /**
     * Optional. The user that changed the answer to the poll, if the voter
     * isn't anonymous
     */
    public ?User $user;

    /**
     * 0-based identifiers of chosen answer options. May be empty if the vote
     * was retracted.
     *
     * @var array<int>
     */
    public array $option_ids;
}
