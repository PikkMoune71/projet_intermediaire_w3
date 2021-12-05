<div class="container">
    <h3 class="m-2">Liste des utilisateurs</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Admin</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $u) :
                $id = $u->getId();
                $firstname = $u->getFirstname();
                $lastname = $u->getLastname();
                $email = $u->getEmail();
                ?> 
            <tr>
                <th scope="row"><?= $id ?></th>
                <td><?= $firstname?></td>
                <td><?= $lastname?></td>
                <td><?= $email?></td>
                <td>
                    <input type="checkbox" <?= $u->getIsAdmin() ? "checked" : "" ?> disabled/>
                </td>
                <th scope="row"><?= $id ?></th>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">Edit</button>
                    <button id="<?= $u->getId() ?>" type="button" class="btn btn-danger">Delete</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edition du profil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="container">
                            <form method="POST" action="/createPost">
                                <input type="text" class="form-control" id="firstname" value="<?= $id[1] ?>">
                                <input type="text" class="form-control" id="lastname" value=""> 
                                <input type="text" class="form-control" id="email" value="">
                                <input type="text" class="form-control" id="password" value="">
                                <input type="text" class="form-control" id="id_admin" value="">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </td>
            </tr>
        <?php
            endforeach; 
        ?>
        </tbody>
    </table>    
</div>

