<?php
require_once "libs/Smarty.class.php";
session_start();
const DEFAULT_CONTROLLER = "Main";
const DEFAULT_METHOD = "index";
$isAdmin = false;
$smarty = new Smarty();
$smarty->setTemplateDir("Views");

$supportedClasses = [
    "Model" => "Models",
    "Helper" => "Helpers",
    "Controller" => "Controllers",
];


spl_autoload_register(function ($name) {
    global $isAdmin;
    global $supportedClasses;

    foreach ($supportedClasses as $suffix => $folder) {
        if (strpos($name, $suffix)) {
            $file = "$folder/$name.php";
            if(strpos($name, "Admin") === 0) {
                $file = "$folder/Admin/$name.php";
            }
            if (!file_exists($file)) {
                throw new Exception("404 NOT FOUND");
            }
            require_once $file;
            break;
        }
    }
});

$uri = ltrim($_SERVER['REQUEST_URI'], "/"); // /controller
$uri = explode("?", $uri)[0];
$parts = explode("/", $uri);

$controller = array_shift($parts);

if ($controller === 'admin') {
    $user = SessionHelper::get('user', ['admin' => false]);
    if (!$user['admin']) {
       header("Location: /");
       exit;
    }

    $isAdmin = true;
    $controller = array_shift($parts);
}

if (!$controller) {
    $controller = DEFAULT_CONTROLLER;
}

$controller = ucfirst($controller) . "Controller";

if ($isAdmin) {
    $controller = "Admin$controller";
}

$method = (array_shift($parts));

if (!$method) {
    $method = DEFAULT_METHOD;
}

$params = $parts;


$controller = new $controller();
if (!method_exists($controller, $method)) {
    throw new Exception("404 NOT FOUND");
}

$controller->$method();
