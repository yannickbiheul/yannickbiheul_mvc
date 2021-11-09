<?php

require 'models/daos/HomeDao.php';
require 'models/services/HomeService.php';

class HomeController {

    private $homeDao;
    private $homeService;

    public function __construct() {
        $this->homeDao = new HomeDao;
        $this->homeService = new HomeService;
    }

    public function home() {
        $texte = $this->homeDao->getText();
        $diplomes = $this->homeDao->getDiplomes();
        $experiences = $this->homeDao->getExp();
        $certificats = $this->homeDao->getCertifs();
        $socials = $this->homeDao->getSocials();
        $games = $this->homeDao->getGames();
        $projets = $this->homeDao->getProjets();
        $infos = $this->homeDao->getInfos();
        require('views/viewHome.php');
    }

    public function sendMessage() {
        $message = $this->homeService->checkMessage($_POST);
        header('Location: \\');
    }
}