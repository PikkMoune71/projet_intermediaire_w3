<div class="container">
    <h3 class="m-2">Edition du profil</h3>
    <form method="POST" action="/createPost">
        <input type="text" class="form-control" id="title" value="<?= $_SESSION['users']['firsname'] ;?>">
        <input type="text" class="form-control" id="image" value="<?= $_SESSION['users']['lastname'] ;?>">
        <input type="text" class="form-control" id="content" value="<?= $_SESSION['users']['email'] ;?>">
        <input type="text" class="form-control" id="content" value="<?= $_SESSION['users']['password'] ;?>">
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>