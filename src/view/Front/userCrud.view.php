
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
        foreach ($data as $p) :
    ?> 
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <button type="button" class="btn btn-primary">Editer</button>
                <button type="button" class="btn btn-primary">Suprimmer</button>
            </td>
        </tr>
    <?php
        endforeach; 
    ?>
    </tbody>
</table>

