<div class='postGlobalContainer'>
    <div class='postContainer'>
        <h3 class='postTitle'><?= $data[0]->getTitle() ?></h3>
        <p class='postDate'><?= $data[0]->getUsername() . " - " . $data[0]->getPublishDate() ?></p>
        <?php if( $data[0]->getImage()){ ?><img src="<?= $data[0]->getImage() ?>") class="postImage" /> <?php } ?>
       <img src="/public/img/tree.png") class="postImage" /> 
        <p><?= $data[0]->getContent() ?></p>
    </div>
    <div class='commentGlobalContainer'>
        <?php
            foreach ($data[1] as $c) :
        ?>
            <div class='commentContainer'>
                <h4 class='commentAuthor'><?= $c->getUsername() ?></h4>
                <p class='commentContent'><?= $c->getContent()?></p>
                <p class='commentDate'><?= $c->getPublishDate()?></p>
            </div>
        <?php
            endforeach; 
        ?>
    </div>
</div>