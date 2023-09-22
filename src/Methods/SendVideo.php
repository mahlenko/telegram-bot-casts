<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ForceReply;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\InputFile;
use TelegramBot\Types\MessageEntity;
use TelegramBot\Types\ReplyKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardRemove;

/**
 * Use this method to send video files, Telegram clients support MPEG4
 * videos (other formats may be sent as Document). On success, the sent
 * Message is returned. Bots can currently send video files of up to 50
 * MB in size, this limit may be changed in the future.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendVideo extends TelegramMethod implements MethodsInterface
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
     * Video to send. Pass a file_id as String to send a video that exists on
     * the Telegram servers (recommended), pass an HTTP URL as a String for
     * Telegram to get a video from the Internet, or upload a new video using
     * multipart/form-data. More information on Sending Files »
     */
    public InputFile|string $video;

    /** Duration of sent video in seconds */
    public ?int $duration;

    /** Video width */
    public ?int $width;

    /** Video height */
    public ?int $height;

    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for
     * the file is supported server-side. The thumbnail should be in JPEG
     * format and less than 200 kB in size. A thumbnail's width and height
     * should not exceed 320. Ignored if the file is not uploaded using
     * multipart/form-data. Thumbnails can't be reused and can be only
     * uploaded as a new file, so you can pass
     * “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More information on
     * Sending Files »
     */
    public InputFile|string|null $thumbnail;

    /**
     * Video caption (may also be used when resending videos by file_id),
     * 0-1024 characters after entities parsing
     */
    public ?string $caption;

    /**
     * Mode for parsing entities in the video caption. See formatting options
     * for more details.
     */
    public ?string $parse_mode;

    /**
     * A JSON-serialized list of special entities that appear in the caption,
     * which can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $caption_entities;

    /** Pass True if the video needs to be covered with a spoiler animation */
    public ?bool $has_spoiler;

    /** Pass True if the uploaded video is suitable for streaming */
    public ?bool $supports_streaming;

    /**
     * Sends the message silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /** Protects the contents of the sent message from forwarding and saving */
    public ?bool $protect_content;

    /** If the message is a reply, ID of the original message */
    public ?int $reply_to_message_id;

    /**
     * Pass True if the message should be sent even if the specified
     * replied-to message is not found
     */
    public ?bool $allow_sending_without_reply;

    /**
     * Additional interface options. A JSON-serialized object for an inline
     * keyboard, custom reply keyboard, instructions to remove reply keyboard
     * or to force a reply from the user.
     */
    public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'video'];
}
