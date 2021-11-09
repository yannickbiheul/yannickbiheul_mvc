<?php
ob_start();
?>

<section id="certificats">

    <?php
        foreach ($certificats as $certificat) {
    ?>
        <div class="certificat">
            <h3><?= $certificat['nom'] ?></h3>
            <hr>
            <p><?= $certificat['etablissement'] ?></p>
            <small>
                <?php
                    $date = date_create($certificat['date_obtention']);
                    echo "Le " . date_format($date, 'd-m-Y');
                ?>
            </small>
        </div>
    <?php
        }
    ?>
    <div class="bouton">
        <a href="index.php?action=home" style="margin: 40px;">Retourner sur le site</a>
    </div>
    

</section>

<?php
$content = ob_get_clean();
require('views/template.php');
?>