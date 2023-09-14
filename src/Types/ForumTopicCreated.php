<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a service message about a new forum topic
 * created in the chat.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ForumTopicCreated extends TelegramType implements TypesInterface
{
    /** Name of the topic */
    public string $name;

    /** Color of the topic icon in RGB format */
    public int $icon_color;

    /**
     * Optional. Unique identifier of the custom emoji shown as the topic
     * icon
     */
    public ?string $icon_custom_emoji_id;
}
