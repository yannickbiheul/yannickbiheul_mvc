<?php
ob_start();
?>

<div class="bouton-burger" href="#">
    <i class="fas fa-bars"></i>
</div>

<div class="menu-burger">
    <ul>
        <li><a href="#banniere" data-text="Accueil" class="item">Accueil</a></li>
        <li><a href="#diplomes" data-text="Diplômes" class="item">Diplômes</a></li>
        <li><a href="#experiences" data-text="Expériences" class="item">Expériences</a></li>
        <li><a href="#reseaux" data-text="Réseaux" class="item">Réseaux</a></li>
        <li><a href="#portfolio" data-text="Portfolio" class="item">Portfolio</a></li>
        <li><a href="#video-games" data-text="Jeux Vidéo" class="item">Jeux Vidéo</a></li>
        <li><a href="#contact" data-text="Contact" class="item">Contact</a></li>
    </ul>
</div>


                                        <!-- BANNIERE -->

<header id="banniere">
    <div class="header1">
        <div class="titre" data-aos="fade-down" data-aos-duration="2000">
            <?php
                foreach ($infos as $info) {
            ?>
                <h1><?= $info['prenom'] ?> <?= $info['nom'] ?></h1>
                <p><?= $info['metier'] ?></p>
                <br>
                <div class="accroche">
                    <p><?= $info['accroche'] ?></p>
                </div>
            <?php
                }
            ?>
            <div class="boutons">
                <a class="bouton" href="https://deskad.fr/" target="_blank">Mon Blog</a>
                <a class="bouton" href="assets/images/CV.pdf" download>Mon CV</a>
            </div>
        </div>
    </div>
    <div class="header2">
        <img src="assets/images/pc.png" alt="PC" data-aos="fade-down" data-aos-duration="2000">
    </div>
</header>


                                        <!-- PRESENTATION -->

<section id="presentation">
    <div class="presentation1">
        <img src="assets/images/moi.jpg" alt="Moi" data-aos="flip-up" data-aos-duration="2000">
    </div>
    <div class="presentation2" data-aos="fade-up" data-aos-duration="2000">
        <?= $texte ?>
    </div>
</section>


                                        <!-- DIPLOMES -->

<section id="diplomes">
    <h1>Diplômes</h1>
    <?php
        foreach ($diplomes as $diplome) {
    ?>

        <div class="diplome" data-aos="fade-down" data-aos-duration="2000">
            <h3><?= $diplome['nom'] ?></h3>
            <p><?= $diplome['definition'] ?></p>
            <hr>
            <p><?= $diplome['etablissement'] ?></p>
            <small>
                <?php
                    $date = date_create($diplome['date_obtention']);
                    echo "Le " . date_format($date, 'd-m-Y');
                ?>
            </small>
        </div>

    <?php
        }
    ?>

    <!-- <a class="bouton" href="#modal_certificats">Certificats</a> -->
    
</section>


                                        <!-- MODAL CERTIFICATS -->

<div id="modal_certificats" class="modal">
    <div class="modal_content">
        
        <?php
            foreach ($certificats as $certificat) {
        ?>
            <div class="carte_certificats">
                <h3><?= $certificat['nom'] ?></h3>
                <small>
                    <?php
                        $date = date_create($certificat['date_obtention']);
                        echo "Le " . date_format($date, 'd-m-Y');
                    ?>
                </small>
                <p><?= $certificat['etablissement'] ?></p>
            </div>
        <?php
            }
        ?>
        
        <a href="#diplomes" class="modal_close">&times;</a>
    </div>
</div>


                                        <!-- EXPERIENCES -->

<section id="experiences">
    <h1>Expériences</h1>
    <?php
        foreach ($experiences as $experience) {
    ?>

        <div class="experience" data-aos="fade-up" data-aos-duration="2000">
            <h3><?= $experience['titre'] ?></h3>
            <h4><strong><?= $experience['etablissement'] ?></strong></h4>
            <small>Du 
                <?php 
                    $date = date_create($experience['date_debut']);
                    echo date_format($date, 'd-m-Y');
                ?> 
                au 
                <?php 
                    $date = date_create($experience['date_fin']);
                    echo date_format($date, 'd-m-Y'); 
                ?>
            </small>
            <hr>
            <p class="roles"><?= $experience['roles'] ?></p>
            <?php
                if (isset($experience['lien'])) {
                    ?>
                    <a class="bouton" href="<?= $experience['lien'] ?>" target="_blank">Voir</a>
                    <?php
                }
                ?>
        </div>

    <?php
        }
    ?>

</section>

                                        <!-- RÉSEAUX -->

<section id="reseaux">
    <h1>Réseaux</h1>
        <div class="socials" data-aos="fade-down" data-aos-duration="2000">
            <?php
                foreach ($socials as $social) {
            ?>
                <a href="<?= $social['url'] ?>" target="_blank"><?= $social['logo'] ?></a>
            <?php
                }
            ?>
        </div>
</section>

                                        <!-- PORTFOLIO -->

<section id="portfolio">
    <h1>Portfolio</h1>
    <?php
        foreach ($projets as $projet) {
    ?>
    <div class="carte-projet" data-aos="fade-up" data-aos-duration="2000">
        <div class="projet-titre">
            <h3><?= $projet['nom'] ?></h3>
        </div>
        <div class="projet-image" style="
        background: linear-gradient(45deg, rgba(0,0,0,0.3)50%, rgba(0,0,0,0.3)50%), url('assets/images/<?= $projet['image']?>');
        background-size:cover;
        background-position: center;">
        </div>
        <div class="projet-bouton">
            <a class="bouton" href="<?= $projet['url']?>" target="_blank">VOIR</a>
        </div>
    </div>
    <?php
        }
    ?>
</section>

                                        <!-- GAMES -->

<section id="video-games">
    <h1>Jeux Vidéo</h1>
    <div class="games" data-aos="fade-down" data-aos-duration="2000">
        <?php
            foreach ($games as $game) {
        ?>
            <div class="game">
                <h3><?= $game['nom'] ?></h3>
                <?= $game['logo'] ?>
                <p><?= $game['pseudo'] ?></p>
            </div>
        <?php
            }
        ?>
    </div>
</section>

                                        <!-- CONTACT -->

<section id="contact">
    <h1>Contact</h1>
    <div class="contact1" data-aos="fade-up" data-aos-duration="2000">
        <?php
            foreach ($infos as $info) {
        ?>
        <h3><?= $info['prenom'] ?> <?= $info['nom'] ?></h3>
        <p><?= $info['mail'] ?></p>
        <p><?= $info['adresse'] ?></p>
        <p><?= $info['tel_portable'] ?></p>
        <?php
            }
        ?>
    </div>
    <div class="contact2" data-aos="fade-up" data-aos-duration="2000">
        <form action="index.php?action=sendMessage" method="POST">
            <div class="form-group">
                <label for="prenom">Prénom / Nom</label>
                <input type="text" id="prenom" name="nom">
            </div>
            <div class="form-group">
                <label for="email">Adresse mail</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="texte">Message</label>
                <textarea type="text" id="texte" name="texte" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</section>


<?php
$content = ob_get_clean();
require('views/template.php');
?>