<?php

namespace Core;

class Validator {
    public static function string($value, $min = 1, $max = INF) {
        $s = strlen(trim($value));

        return $s >= $min && $s <= $max;
    }

    public static function email(string $value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}