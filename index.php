<?php
require_once "libs/Smarty.class.php";


$smarty = new Smarty();
$smarty->setTemplateDir("Views");
//require_once "Models/UserModel.php";

$supportedClasses = [
    "Model" => "Models",
    "Helper" => "Helpers",
    "Controller" => "Controllers",
];


spl_autoload_register(function ($name) {
    global $supportedClasses;

    foreach ($supportedClasses as $suffix => $folder) {
        if (strpos($name, $suffix)) {
            $file = "$folder/$name.php";
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


$controller = ucfirst(array_shift($parts))."Controller";
$method = array_shift($parts);
$params = $parts;


$controller = new $controller();
if (!method_exists($controller, $method)) {
    throw new Exception("404 NOT FOUND");
}

$controller->$method();
