<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get the current default administrator rights of the
 * bot. Returns ChatAdministratorRights on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetMyDefaultAdministratorRights extends BaseMethod implements MethodsInterface
{
    /**
     * Pass True to get default administrator rights of the bot in channels.
     * Otherwise, default administrator rights of the bot for groups and
     * supergroups will be returned.
     */
    public ?bool $for_channels;
}
