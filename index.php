<?php

// Démarrer session
session_start();

// Importer controller et instancier objet
require('controllers/HomeController.php');
$homeController = new HomeController;

// Si présence d'une action et d'un paramètre
if (isset($_GET['action']) && isset($_GET['params'])) {

    $action = $_GET['action'];
    $params = $_GET['params'];

    // Si la méthode existe, l'exécuter.
    if (method_exists($homeController, $action)) {
        $homeController->$action($params);
    } else {
        $homeController->home();
    }

// Si présence d'une action sans paramètres
} else if (isset($_GET['action']) && !isset($_GET['params'])) {

    $action = $_GET['action'];

    if (method_exists($homeController, $action)) {
        $homeController->$action();
    } else {
        $homeController->home();
    }

// Sinon affichage de la page d'accueil
} else {

    $homeController->home();

}
