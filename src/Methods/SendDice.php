<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\ForceReply;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardRemove;

/**
 * Use this method to send an animated emoji that will display a random
 * value. On success, the sent Message is returned.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendDice extends BaseMethod implements MethodsInterface
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
     * Emoji on which the dice throw animation is based. Currently, must be
     * one of “”, “”, “”, “”, “”, or “”. Dice can
     * have values 1-6 for “”, “” and “”, values 1-5 for “”
     * and “”, and values 1-64 for “”. Defaults to “”
     */
    public ?string $emoji;

    /**
     * Sends the message silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /** Protects the contents of the sent message from forwarding */
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
    public array $required_properties = ['chat_id'];
}
