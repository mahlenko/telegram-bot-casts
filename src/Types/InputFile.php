<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents the contents of a file to be uploaded. Must be
 * posted using multipart/form-data in the usual way that files are
 * uploaded via the browser.
 */
class InputFile extends BaseType implements TypesInterface
{
}
