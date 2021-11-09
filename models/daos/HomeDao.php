<?php

require 'models/daos/BaseDao.php';

class HomeDao extends BaseDao {

    // Récupérer le texte de présentation
    public function getText() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT texte_presentation FROM infos");
        $result = $req->fetch();
        return $result[0];
    }

    // Récupérer les diplômes
    public function getDiplomes() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM diplomes ORDER BY date_obtention DESC");
        $result = $req->fetchAll();
        return $result;
    }

    // Récupérer les expériences
    public function getExp() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM experiences ORDER BY date_debut DESC");
        $result = $req->fetchAll();
        return $result;
    }

    // Récupérer les certificats
    public function getCertifs() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM certificats ORDER BY date_obtention DESC");
        $result = $req->fetchAll();
        return $result;
    }

    // Récupérer les réseaux
    public function getSocials() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM reseaux");
        $result = $req->fetchAll();
        return $result;
    }

    // Récupérer les jeux
    public function getGames() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM games");
        $result = $req->fetchAll();
        return $result;
    }

    // Récupérer les projets
    public function getProjets() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM portfolio");
        $result = $req->fetchAll();
        return $result;
    }

    // Récupérer mes infos
    public function getInfos() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM infos");
        $result = $req->fetchAll();
        return $result;
    }

    // Enregistrer message
    public function saveMessage($message) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO messages (nom, email, texte) VALUES (:nom, :email, :message)');
        $req->bindParam(':nom', $message[0]);
        $req->bindParam(':email', $message[1]);
        $req->bindParam(':message', $message[2]);
        $req->execute();
        return "Message enregistré !";
    }
}