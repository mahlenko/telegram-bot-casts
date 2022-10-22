<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * This object represents the content of a message to be sent as a result
 * of an inline query. Telegram clients currently support the following 5
 * types:
 *
 * InputTextMessageContent
 * InputLocationMessageContent
 * InputVenueMessageContent
 * InputContactMessageContent
 * InputInvoiceMessageContent
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputMessageContent extends BaseType implements InlineModeInterface
{
}
