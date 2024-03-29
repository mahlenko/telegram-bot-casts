<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents the content of a text message to be sent as the result of
 * an inline query.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputTextMessageContent extends TelegramType implements InlineModeInterface
{
    /** Text of the message to be sent, 1-4096 characters */
    public string $message_text;

    /**
     * Optional. Mode for parsing entities in the message text. See
     * formatting options for more details.
     */
    public ?string $parse_mode;

    /**
     * Optional. List of special entities that appear in message text, which
     * can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $entities;

    /** Optional. Disables link previews for links in the sent message */
    public ?bool $disable_web_page_preview;
}
