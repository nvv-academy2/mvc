<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 08.08.2018
 * Time: 20:41
 */

class DBHelper
{
    /** @var mysqli */
    private static $db;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        return self::$db ?? self::$db = new mysqli("127.0.0.1", 'root', '', 'viktor');
    }
}