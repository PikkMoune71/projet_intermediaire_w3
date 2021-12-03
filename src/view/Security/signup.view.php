<div class="container">
    <h1 class="mt-4">Inscription</h1>
    <form method="POST" action="/inscription">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <input type="checkbox" class="form-check-input" id="is_admin" name="is_admin">
            <label class="form-check-label" for="exampleCheck1">Admin ?</label>
        </div>
        <button type="submit" class="btn btn-primary">Inscription</button>
    </form>
</div>