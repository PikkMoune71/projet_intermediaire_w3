<div class="allPosts">
    <?php
        foreach ($data as $p) :
    ?>
        <div class="card" style="width: 18rem;">
            <?php if( $p->getImage()){ ?><img class="card-img-top" alt="" src="<?= $p->getImage() ?>") /> <?php } ?>
            <div class="card-body">
                <h5 class="card-title"><?= $p->getTitle() ?></h5>
                <p class="card-text"><?= $p->getContent()?></p>
                <p class="card-text"><?= $p->getId() . " - " . $p->getPublishDate() ?></p>
                <a href="/post/<?= $p->getId()?>" class="btn btn-primary">Lire plus</a>
            </div>
        </div>
    <?php
        endforeach; 
    ?>
</div>