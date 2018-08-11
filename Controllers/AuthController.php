<?php

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            global $smarty;
            $smarty->display('login.tpl');
            return;
        }

        if (!isset($_POST['login']) || !isset($_POST['pass']))
        {
            header("Location: /auth/login?error=User not found or credentials are invalid");
            exit;
        }

        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $user = UserModel::findByLogin($login);
        if (!$user || !$user->checkPassword($pass)) {
            header("Location: /auth/login?error=User not found or credentials are invalid");
            exit;
        }

        SessionHelper::set('user', $user->toArray());
        header("Location: /");
    }

    public function register()
    {
        global $smarty;
        $smarty->display('register.tpl');
    }

    public function logout()
    {
        SessionHelper::forget('user');
        header("Location: /");
    }
}