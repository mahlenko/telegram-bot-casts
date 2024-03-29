<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputMedia;

/**
 * Use this method to send a group of photos, videos, documents or audios
 * as an album. Documents and audio files can be only grouped in an album
 * with messages of the same type. On success, an array of Messages that
 * were sent is returned.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendMediaGroup extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Unique identifier for the target message thread (topic) of the forum;
     * for forum supergroups only
     */
    public ?int $message_thread_id;

    /**
     * A JSON-serialized array describing messages to be sent, must include
     * 2-10 items
     *
     * @var array<InputMedia>
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

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'media'];
}
