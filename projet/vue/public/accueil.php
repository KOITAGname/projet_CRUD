<?php 
$sth = $connexion->prepare("
    SELECT * FROM pages WHERE slug = :slug
");
$sth->execute(["slug" => "accueil"]);
$accueil = $sth->fetch();
?>
<h1><?php echo $accueil["titre"] ?></h1>
<div>
    <?php echo $accueil["contenu"] ?>
</div>