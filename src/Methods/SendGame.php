<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\GamesInterface;
use TelegramBot\Types\InlineKeyboardMarkup;

/**
 * Use this method to send a game. On success, the sent Message is
 * returned.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendGame extends BaseMethod implements GamesInterface
{
    /** Unique identifier for the target chat */
    public int $chat_id;

    /**
     * Unique identifier for the target message thread (topic) of the forum;
     * for forum supergroups only
     */
    public ?int $message_thread_id;

    /**
     * Short name of the game, serves as the unique identifier for the game.
     * Set up your games via @BotFather.
     */
    public string $game_short_name;

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
     * A JSON-serialized object for an inline keyboard. If empty, one 'Play
     * game_title' button will be shown. If not empty, the first button must
     * launch the game.
     */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'game_short_name'];
}
