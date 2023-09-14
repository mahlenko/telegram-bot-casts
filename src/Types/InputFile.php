<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents the contents of a file to be uploaded. Must be
 * posted using multipart/form-data in the usual way that files are
 * uploaded via the browser.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputFile extends TelegramType implements TypesInterface
{
}
