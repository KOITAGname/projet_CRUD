<h1>Créer une page</h1>
<section class="row">
<div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col"> 
    <form action="lib/traitement-page.php" method="POST">
            <div class="mb-3">
                <label for="titre">titre de l'article</label>
                <input type="text" class="form-control" 
                    name="titre" placeholder="titre article" id="titre">
            </div>
            <div class="mb-3">
                <label for="slug">slug de l'article</label>
                <input type="text" class="form-control" 
                    name="slug" placeholder="slug article" id="slug">
            </div>
            <div class="mb-3">
                <label for="contenu">contenu article</label>
                <textarea name="contenu" id="contenu" class="form-control" rows="5" 
                    placeholder="contenu article"></textarea>
            </div>
            <div class="mb-3">
                <label for="image">image</label>
                <input type="url" class="form-control" 
                    name="image" placeholder="url de l'image" id="image">
            </div>
            <div class="mb-3">
                <label for="auteur">auteur</label>
                <input type="text" class="form-control" 
                    name="auteur" placeholder="auteur" id="auteur">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
        <?php require "lib/message-flash.php" ?>
    </div>
</section>

        <!-- 
            dans la page php gestion-page-form.php 
            créer un formulaire qui contient 5 champs 
            utilisez les noms des colonnes de la table pages 
            comme name="" de chaque champ 
            titre input text
            slug  => input text 
            contenu => textarea
            image => input text 
            auteur => champ de type text
            mettre en forme le formulaire via la librairie bootstrap 
            bonus (ensemble) => transformer le champ textarea rich via la librairie tinyMCE (ensemble)
        -->

<!-- ajouter un peu de js pour transformer le textarea en textarea enrichit => avec des boutons en dessus qui vont permettre de mettre du html dans le champ ! 
librairie javascript => TinyMCE (Wordpress)
https://www.tiny.cloud/docs/tinymce/6/jquery-cloud/
--> 
<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"
      referrerpolicy="origin"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>
<script>
    $('textarea#contenu').tinymce({
        height: 200,
        menubar: false,
        toolbar: 'undo redo | blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | removeformat | help'
      });
</script>
 
