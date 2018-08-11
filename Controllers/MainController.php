<?php

class MainController
{
    public function index()
    {
        global $smarty;
        $smarty->assign('categories', CategoryModel::getAll());
        $smarty->display('main.tpl');
    }
}