<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\ChatAdministratorRights;

/**
 * Use this method to change the default administrator rights requested
 * by the bot when it's added as an administrator to groups or channels.
 * These rights will be suggested to users, but they are are free to
 * modify the list before adding the bot. Returns True on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetMyDefaultAdministratorRights extends BaseMethod implements MethodsInterface
{
    /**
     * A JSON-serialized object describing new default administrator rights.
     * If not specified, the default administrator rights will be cleared.
     */
    public ?ChatAdministratorRights $rights;

    /**
     * Pass True to change the default administrator rights of the bot in
     * channels. Otherwise, the default administrator rights of the bot for
     * groups and supergroups will be changed.
     */
    public ?bool $for_channels;
}
