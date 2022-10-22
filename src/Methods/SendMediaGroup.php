<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to send a group of photos, videos, documents or audios
 * as an album. Documents and audio files can be only grouped in an album
 * with messages of the same type. On success, an array of Messages that
 * were sent is returned.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendMediaGroup extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * A JSON-serialized array describing messages to be sent, must include
     * 2-10 items
     */
    public array $media;

    /**
     * Sends messages silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /** Protects the contents of the sent messages from forwarding and saving */
    public ?bool $protect_content;

    /** If the messages are a reply, ID of the original message */
    public ?int $reply_to_message_id;

    /**
     * Pass True if the message should be sent even if the specified
     * replied-to message is not found
     */
    public ?bool $allow_sending_without_reply;
}
