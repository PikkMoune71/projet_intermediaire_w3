<div class="container">
    <h3 class="m-2">Edition du post </h3>
    <form method="POST" action="/createPost">
        <input type="text" class="form-control" id="title" value="<?= $_SESSION['post']['title'] ;?>">
        <input type="text" class="form-control" id="image" value="<?= $_SESSION['post']['image'] ;?>">
        <input type="text" class="form-control" id="content" value="<?= $_SESSION['post']['content'] ;?>">
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>