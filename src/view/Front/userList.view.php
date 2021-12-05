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
        ?> 
            <tr>
                <th scope="row"><?= $u->getId() ?></th>
                <td><?= $u->getFirstname() ?></td>
                <td><?= $u->getLastname()?></td>
                <td><?= $u->getemail()?></td>
                <td>
                    <input type="checkbox" <?= $u->getIsAdmin() ? "checked" : "" ?> disabled/>
                </td>
                <td>
                    <button type="button" class="btn btn-primary">Editer</button>
                    <button type="button" class="btn btn-danger">Suprimmer</button>
                </td>
            </tr>
        <?php
            endforeach; 
        ?>
        </tbody>
    </table>    
</div>
