<?php
session_start();

use app\engine\Render;
use app\engine\Request;
use app\engine\TwigRender;
use app\models\{Product, User};
use app\engine\Autoload;

include "../config/config.php";
include "../engine/Autoload.php";
include '../vendor/autoload.php';

spl_autoload_register([new Autoload(), 'loadClass']);

$request = new Request();


$controllerName = $request->getControllerName() ?: 'product';
$actionName = $request->getActionName();

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404";
}















die();
//INSERT
$product = new Product("Книга", "Фантастика", 23);
$product->save();



//UPDATE GET
$product = Product::getOne(1);
$product->price = 23;
$product->save();


//DELETE
$product = Product::getOne(1);
$product->delete();























