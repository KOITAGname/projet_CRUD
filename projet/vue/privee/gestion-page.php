<?php 
    $sth = $connexion->prepare("
    SELECT id, titre , contenu,slug, image, auteur, DATE_FORMAT(dt_creation , '%d/%m/%Y') AS `dt_creation`  FROM pages ;
    ");
    $sth->execute();
    $pages = $sth->fetchAll();
?>
<h1>Gestion des pages du site</h1>
<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col">
        <div class="text-end mb-3">
            <a href=" http://localhost/php-initiation/projet/index.php?page=page&partie=privee&action=add" class="btn btn-primary">ajouter une nouvelle page</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>slug</th>
                    <th>image</th>
                    <th>auteur</th>
                    <th>date création</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($pages as $p) : ?>
                    <tr>
                        <td><?php echo htmlentities($p["id"]) ?></td>
                        <td><?php echo htmlentities($p["titre"]) ?></td>
                        <td><?php echo htmlentities($p["slug"]) ?></td>
                        <td><img src="<?php echo htmlentities($p["image"]) ?>" alt="" width="100"></td>
                        <td><?php echo htmlentities($p["auteur"]) ?></td>
                        <td><?php echo htmlentities($p["dt_creation"]) ?></td>
                        <td>
                        <a href="" class="btn btn-warning me-2">modifier</a>
                        <a href="" class="btn btn-danger" onclick="return confirm('voulez vous vraiment supprimer cette page ??')">supprimer</a>
                        </td>
                    </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
</section>
<!-- cas pratique dans la base "projet" 
    créer une nouvelle table articles 
    contient 7 colonnes 
    id clé primaire auto incrément
    titre maximum de 255 lettres
    slug maximum de 255 lettres
    contenu maximum de 65 mille lettres
    image maximum de 255 lettres
    auteur maximum de 255 lettres
    dt_creation date et heure 
-->