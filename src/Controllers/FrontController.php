<?php

class FrontController
{
    public function home(int $number = 5) {
        $manager = new PostManager(PDOFactory::getMySqlConnection());
        var_dump($manager->getAllPosts());
    }

    public function show() 
    {
        $managerPost = new PostManager(PDOFactory::getMySqlConnection());
        $managerComment = new CommentManager(PDOFactory::getMySqlConnection());

        var_dump($managerPost->getPostbyId($_GET['id']),$managerComment->getCommentByPostID($_GET['id']));
    }
}