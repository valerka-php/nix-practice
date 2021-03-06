<?php

namespace Framework\helpers;

use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class Helper
{

    public static function dd(array $arr)
    {
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
        exit;
    }

    /**
     * @param array $array Array which you need filtered
     * @param array $params Array params for search
     * When match is found in array will be added to result array
     * @return array Result
     */

    public static function filterArray(array $array, array $params = []): array
    {
        $result = [];
        foreach ($params as $key) {
            foreach ($array as $k => $v) {
                if ($key === $k) {
                    $result[$k] = $v;
                }
            }
        }
        return $result;
    }
}
