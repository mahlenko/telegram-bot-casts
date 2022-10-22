<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\InputFile;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to send audio files, if you want Telegram clients to
 * display them in the music player. Your audio must be in the .MP3 or
 * .M4A format. On success, the sent Message is returned. Bots can
 * currently send audio files of up to 50 MB in size, this limit may be
 * changed in the future.
 * For sending voice messages, use the sendVoice method instead.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendAudio extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Audio file to send. Pass a file_id as String to send an audio file
     * that exists on the Telegram servers (recommended), pass an HTTP URL as
     * a String for Telegram to get an audio file from the Internet, or
     * upload a new one using multipart/form-data. More information on
     * Sending Files »
     */
    public InputFile|string $audio;

    /** Audio caption, 0-1024 characters after entities parsing */
    public ?string $caption;

    /**
     * Mode for parsing entities in the audio caption. See formatting options
     * for more details.
     */
    public ?string $parse_mode;

    /**
     * A JSON-serialized list of special entities that appear in the caption,
     * which can be specified instead of parse_mode
     */
    public ?array $caption_entities;

    /** Duration of the audio in seconds */
    public ?int $duration;

    /** Performer */
    public ?string $performer;

    /** Track name */
    public ?string $title;

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
    public InputFile|string|null $thumb;

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
    public InlineKeyboardMarkup|ReplyKeyboardMarkup|null $reply_markup;
}
