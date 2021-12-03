<?php
namespace App\Controllers;

use App\Framework\PDOFactory;
use App\Manager\PostManager;
use App\Manager\CommentManager;

class FrontController
{
    public function home(int $number = 5) {
        $manager = new PostManager(PDOFactory::getMySqlConnection());
        var_dump($manager->getAllPosts());
    }

    public function show($id) 
    {
        $managerPost = new PostManager(PDOFactory::getMySqlConnection());
        $managerComment = new CommentManager(PDOFactory::getMySqlConnection());

        var_dump($managerPost->getPostbyId($id),$managerComment->getCommentByPostID($id));
    }
}