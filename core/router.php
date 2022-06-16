<?php

namespace Core;

class Router
{


    public static function start()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        if ($url) {
            $url = explode('/', $url);
        }

        if (isset($url[0])) {
            $path = 'controller/' . $url[0] . '.php';
        }


        if ($url === null) {
            $controller = new \Controller\Main();
            $controller->main();
        } elseif (isset($url[0]) && !isset($url[1])) {
            if (file_exists($path)) {
                $className = '\Controller\\' . ucfirst($url[0]);
                $controller = new $className;
                $controller->{$url[0]}();
            } else {
                echo "<h1> FILE NOT FOUND</h1>";
            }
        } elseif (isset($url[0]) && isset($url[1]) && !empty($url[1])) {
            if (file_exists($path)) {
                $className = '\Controller\\' . ucfirst($url[0]);
                $controller = new $className;
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    echo "<h1> METHOD 1 $url[1] NOT FOUND</h1>";
                }
            } else {
                echo "<h1> FILE NOT FOUND</h1>";
            }

        } else {
            echo "<h1> FILE NOT FOUND</h1>";
        }

        /**  if ($url === null) {
         * $controller = new \Controller\Main();
         * $controller->main();
         * } elseif ($url[0] === 'task1') {
         * $name = ucfirst($url);
         *
         * $controller = new \Controller\Task1();
         * $controller->main();
         *
         * } elseif ($url[0] === 'task2') {
         * $controller = new \Controller\Task2();
         * $controller->main();
         * } elseif ($url[0] === 'task3') {
         * $controller = new \Controller\Task3();
         * $controller->main();
         * } elseif ($url[0] === 'addform') {
         * $controller = new \Controller\AddForm();
         * $controller->main();
         * } elseif ($url[0] === 'requests') {
         * $controller = new \Controller\Requests();
         * if (isset($url[1])) {
         * $controller->saveRating();
         * } else {
         * $controller->save();
         * }
         * }**/
    }
}
