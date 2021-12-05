<div class="container">
    <h3 class="m-2">Liste des posts</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Contenu</th>
                <th scope="col">Image</th>
                <th scope="col">Date de publication</th>
                <th scope="col">Autheur</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $p) :
        ?> 
            <tr>
                <th scope="row"><?= $p->getId() ?></th>
                <td><?= $p->getTitle() ?></td>
                <td><?= $p->getContent()?></td>
                <td><?= $p->getImage()?></td>
                <td><?= $p->getPublishDate()?></td>
                <td><?= $p->getIdAuthor()?></td>
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