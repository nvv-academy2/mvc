<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 11.08.2018
 * Time: 10:48
 */

class AdminMainController
{
    public function index()
    {
        global $smarty;
        $smarty->display("admin/main.tpl");
    }
}