<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents the content of a service message, sent whenever
 * a user in the chat triggers a proximity alert set by another user.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ProximityAlertTriggered extends TelegramType implements TypesInterface
{
    /** User that triggered the alert */
    public User $traveler;

    /** User that set the alert */
    public User $watcher;

    /** The distance between the users */
    public int $distance;
}
