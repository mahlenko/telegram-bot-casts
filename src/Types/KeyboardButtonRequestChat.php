<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object defines the criteria used to request a suitable chat. The
 * identifier of the selected chat will be shared with the bot when the
 * corresponding button is pressed. More about requesting chats »
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class KeyboardButtonRequestChat extends TelegramType implements TypesInterface
{
    /**
     * Signed 32-bit identifier of the request, which will be received back
     * in the ChatShared object. Must be unique within the message
     */
    public int $request_id;

    /**
     * Pass True to request a channel chat, pass False to request a group or
     * a supergroup chat.
     */
    public bool $chat_is_channel;

    /**
     * Optional. Pass True to request a forum supergroup, pass False to
     * request a non-forum chat. If not specified, no additional restrictions
     * are applied.
     */
    public ?bool $chat_is_forum;

    /**
     * Optional. Pass True to request a supergroup or a channel with a
     * username, pass False to request a chat without a username. If not
     * specified, no additional restrictions are applied.
     */
    public ?bool $chat_has_username;

    /**
     * Optional. Pass True to request a chat owned by the user. Otherwise, no
     * additional restrictions are applied.
     */
    public ?bool $chat_is_created;

    /**
     * Optional. A JSON-serialized object listing the required administrator
     * rights of the user in the chat. The rights must be a superset of
     * bot_administrator_rights. If not specified, no additional restrictions
     * are applied.
     */
    public ?ChatAdministratorRights $user_administrator_rights;

    /**
     * Optional. A JSON-serialized object listing the required administrator
     * rights of the bot in the chat. The rights must be a subset of
     * user_administrator_rights. If not specified, no additional
     * restrictions are applied.
     */
    public ?ChatAdministratorRights $bot_administrator_rights;

    /**
     * Optional. Pass True to request a chat with the bot as a member.
     * Otherwise, no additional restrictions are applied.
     */
    public ?bool $bot_is_member;
}
