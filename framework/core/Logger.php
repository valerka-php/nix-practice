<?php

namespace App\Core;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    private static string $path = '../src/logs/log.txt';

    public static function log($level, string|\Stringable $message, array $context = []): void
    {
        $data = date('H:m:s ') . '/' . $level . '/' . $message ;
        file_put_contents(self::$path, $data, FILE_APPEND);
    }
}
