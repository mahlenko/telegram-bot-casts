<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to send a native poll. On success, the sent Message is
 * returned.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendPoll extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Poll question, 1-300 characters */
    public string $question;

    /**
     * A JSON-serialized list of answer options, 2-10 strings 1-100
     * characters each
     */
    public array $options;

    /** True, if the poll needs to be anonymous, defaults to True */
    public ?bool $is_anonymous;

    /** Poll type, “quiz” or “regular”, defaults to “regular” */
    public ?string $type;

    /**
     * True, if the poll allows multiple answers, ignored for polls in quiz
     * mode, defaults to False
     */
    public ?bool $allows_multiple_answers;

    /**
     * 0-based identifier of the correct answer option, required for polls in
     * quiz mode
     */
    public ?int $correct_option_id;

    /**
     * Text that is shown when a user chooses an incorrect answer or taps on
     * the lamp icon in a quiz-style poll, 0-200 characters with at most 2
     * line feeds after entities parsing
     */
    public ?string $explanation;

    /**
     * Mode for parsing entities in the explanation. See formatting options
     * for more details.
     */
    public ?string $explanation_parse_mode;

    /**
     * A JSON-serialized list of special entities that appear in the poll
     * explanation, which can be specified instead of parse_mode
     */
    public ?array $explanation_entities;

    /**
     * Amount of time in seconds the poll will be active after creation,
     * 5-600. Can't be used together with close_date.
     */
    public ?int $open_period;

    /**
     * Point in time (Unix timestamp) when the poll will be automatically
     * closed. Must be at least 5 and no more than 600 seconds in the future.
     * Can't be used together with open_period.
     */
    public ?int $close_date;

    /**
     * Pass True if the poll needs to be immediately closed. This can be
     * useful for poll preview.
     */
    public ?bool $is_closed;

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

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'question', 'options'];
}
