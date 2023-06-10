<?php

namespace Hypervolt;

use Nullix\CryptoJsAes\CryptoJsAes;
use Composer\Script\Event;

class CryptoTest {
    public static function encrypt(Event $event): int
    {
        $args = $event->getArguments();

        if (sizeof($args) < 2) {
            echo 'usage: composer decrypt [PASSPHRASE] [VALUE]' . PHP_EOL;
            return 1;
        }

        $passPhrase = $args[0];
        $json = $args[1];

        $passPhrase = 'hunter2';
        $value = json_decode($json);
        echo CryptoJsAes::encrypt($value, $passPhrase);
        return 0;
    }

    public static function decrypt(Event $event): int
    {
        $args = $event->getArguments();

        if (sizeof($args) < 2) {
            echo 'usage: composer decrypt [PASSPHRASE] [ENCRYPTED]';
            return 1;
        }

        $passPhrase = $args[0];
        $encrypted = $args[1];

        echo json_encode(CryptoJsAes::decrypt($encrypted, $passPhrase)) . PHP_EOL;

        return 0;
    }
}
