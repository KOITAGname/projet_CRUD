<?php 
$sth = $connexion->prepare("
    SELECT * FROM pages WHERE slug = :slug
");
$sth->execute(["slug" => "mentions-legales"]);
$mentions = $sth->fetch();
?>
<h1><?php echo $mentions["titre"] ?></h1>
<img src="<?php echo $mentions["image"] ?>" alt="">
<div>
    <?php echo $mentions["contenu"] ?>
</div>