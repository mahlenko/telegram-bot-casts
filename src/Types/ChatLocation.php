<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a location to which a chat is connected.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatLocation extends TelegramType implements TypesInterface
{
    /**
     * The location to which the supergroup is connected. Can't be a live
     * location.
     */
    public Location $location;

    /** Location address; 1-64 characters, as defined by the chat owner */
    public string $address;
}
