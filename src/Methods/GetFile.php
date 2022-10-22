<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get basic information about a file and prepare it
 * for downloading. For the moment, bots can download files of up to 20MB
 * in size. On success, a File object is returned. The file can then be
 * downloaded via the link
 * https://api.telegram.org/file/bot<token>/<file_path>, where
 * <file_path> is taken from the response. It is guaranteed that the link
 * will be valid for at least 1 hour. When the link expires, a new one
 * can be requested by calling getFile again.
 */
class GetFile extends BaseMethod implements MethodsInterface
{
	/** File identifier to get information about */
	public string $file_id;
}
