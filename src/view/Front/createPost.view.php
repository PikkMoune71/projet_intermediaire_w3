<div class="container">
    <h3 class="m-2">Creation de posts</h3>
    <form method="POST" action="/createPost">
        <input name="title" type="text" class="form-control" id="title" placeholder="Title">
        <input name="image" type="text" class="form-control" id="image" placeholder="Image link">
        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        <button action="/createPost" type="submit" class="btn btn-primary">Create</button>
    </form>
</div>