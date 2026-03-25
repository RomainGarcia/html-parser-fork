<?php

namespace App\Utils;

class Parser
{
    public static function parse() {
        return $_POST['html'] ?? '';
    }
}