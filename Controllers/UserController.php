<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 08.08.2018
 * Time: 20:32
 */

class UserController
{
    public function find()
    {
        $q = $_REQUEST['q'];
        $res = UserModel::findByLogin($q);
        print_r($res->toArray());
    }

    public function delete()
    {
        global $params;
        $id = (int) array_shift($params);
        $user = UserModel::findById($id);
        var_dump($user->delete());
    }
}