<?php

class SessionHelper
{
    public static function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public static function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function forget($key)
    {
        if(isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
}