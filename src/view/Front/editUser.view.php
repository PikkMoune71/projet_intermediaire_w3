<div class="container">
    <h3 class="m-2">Edition du profil</h3>
    <form method="POST" action="/updateUser">
        <input type="text" name="firstname" class="form-control" id="firstname" value="<?= $_SESSION['users']['firstname'] ;?>">
        <input type="text" name="lastname" class="form-control" id="lastname" value="<?= $_SESSION['users']['lastname'] ;?>">
        <input type="text" name="email" class="form-control" id="email" value="<?= $_SESSION['users']['email'] ;?>">
        <input type="password" name="password" class="form-control" id="password" value="<?= $_SESSION['users']['password'] ;?>">
        
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>