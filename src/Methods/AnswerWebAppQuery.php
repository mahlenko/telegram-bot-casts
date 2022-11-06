<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\Types\InlineQueryResult;

/**
 * Use this method to set the result of an interaction with a Web App and
 * send a corresponding message on behalf of the user to the chat from
 * which the query originated. On success, a SentWebAppMessage object is
 * returned.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class AnswerWebAppQuery extends BaseMethod implements InlineModeInterface
{
    /** Unique identifier for the query to be answered */
    public string $web_app_query_id;

    /** A JSON-serialized object describing the message to be sent */
    public InlineQueryResult $result;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['web_app_query_id', 'result'];
}
