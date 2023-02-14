<?php 
$sth = $connexion->prepare("
    SELECT * FROM pages WHERE slug = :slug
");
$sth->execute(["slug" => "presentation"]);
$presentation = $sth->fetch();
?>
<h1><?php echo $presentation["titre"] ?></h1>
<img src="<?php echo $presentation["image"] ?>" alt="">
<div>
    <?php echo $presentation["contenu"] ?>
</div>