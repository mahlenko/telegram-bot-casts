<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents one button of an inline keyboard. You must use
 * exactly one of the optional fields.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineKeyboardButton extends TelegramType implements TypesInterface
{
    /** Label text on the button */
    public string $text;

    /**
     * Optional. HTTP or tg:// URL to be opened when the button is pressed.
     * Links tg://user?id=<user_id> can be used to mention a user by their ID
     * without using a username, if this is allowed by their privacy
     * settings.
     */
    public ?string $url;

    /**
     * Optional. Data to be sent in a callback query to the bot when button
     * is pressed, 1-64 bytes
     */
    public ?string $callback_data;

    /**
     * Optional. Description of the Web App that will be launched when the
     * user presses the button. The Web App will be able to send an arbitrary
     * message on behalf of the user using the method answerWebAppQuery.
     * Available only in private chats between a user and the bot.
     */
    public ?WebAppInfo $web_app;

    /**
     * Optional. An HTTPS URL used to automatically authorize the user. Can
     * be used as a replacement for the Telegram Login Widget.
     */
    public ?LoginUrl $login_url;

    /**
     * Optional. If set, pressing the button will prompt the user to select
     * one of their chats, open that chat and insert the bot's username and
     * the specified inline query in the input field. May be empty, in which
     * case just the bot's username will be inserted.
     */
    public ?string $switch_inline_query;

    /**
     * Optional. If set, pressing the button will insert the bot's username
     * and the specified inline query in the current chat's input field. May
     * be empty, in which case only the bot's username will be inserted.This
     * offers a quick way for the user to open your bot in inline mode in the
     * same chat - good for selecting something from multiple options.
     */
    public ?string $switch_inline_query_current_chat;

    /**
     * Optional. If set, pressing the button will prompt the user to select
     * one of their chats of the specified type, open that chat and insert
     * the bot's username and the specified inline query in the input field
     */
    public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat;

    /**
     * Optional. Description of the game that will be launched when the user
     * presses the button.NOTE: This type of button must always be the first
     * button in the first row.
     */
    public ?CallbackGame $callback_game;

    /**
     * Optional. Specify True, to send a Pay button.NOTE: This type of button
     * must always be the first button in the first row and can only be used
     * in invoice messages.
     */
    public ?bool $pay;
}
