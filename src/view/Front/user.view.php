

<div class="container">
    <h3 class="m-2"></h3>
    <form method="POST" action="/createPost">
        <input type="text" class="form-control" id="firstname" value="<?=  $u->getFirstname()?>">
        <input type="text" class="form-control" id="lastname" value="<?=  $u->getLastname() ?>">
        <input type="email" class="form-control" id="email" value="<?=  $u->getemail() ?>">
        <input type="text" class="form-control" id="password" value="<?=  $u->getFirstname() ?>">
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>