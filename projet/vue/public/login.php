<h1 class="text-center">Connexion</h1>
<form action="lib/traitement-login.php" method="POST" class="row my-5">
    <div class="col-3 offset-3">

        <input type="text" name="login" id="name" placeholder="votre login" class="form-control">
    </div>

    <div class="col-3 ">
        <input type="text" placeholder="votre mot de passe" class="form-control" name="password">
    </div>

    <div class="col-12 d-flex justify-content-center mt-4">
        <input type="submit" name="" id="" class="btn btn-primary">
    </div>

</form>
<?php require "lib/message-flash.php" ?>