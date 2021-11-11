<?php

// require 'controllers/HomeController.php';
// require 'models/daos/HomeDao.php';

class HomeService {

    private $homeDao;

    public function __construct() {
        $this->homeDao = new HomeDao;
    }

    public function checkMessage($post) {

        if (isset($post['nom']) && isset($post['email']) && isset($post['texte'])) {

            $message = [];

            if (strlen($post['nom']) < 3) {
                $errors = "Il me faut plus de 3 lettres pour le nom !";
            } else {
                array_push($message, htmlspecialchars($post['nom']));
            }

            if (strlen($post['email']) < 3) {
                $errors = "Il me faut plus de 3 lettres pour l'email !";
            } else {
                array_push($message, htmlspecialchars($post['email']));
            }

            if (strlen($post['texte']) < 3) {
                $errors = "Il me faut plus de 3 lettres pour le message !";
            } else {
                array_push($message, htmlspecialchars($post['texte']));
            }

            $reponse = $this->homeDao->saveMessage($message);
            return $reponse;

        } else {
            return "Il manque des choses !";
        }
    }
}