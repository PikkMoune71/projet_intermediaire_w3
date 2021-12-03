<?php

class FrontController extends BaseController
{

    public function home(int $number = 5) {
        $manager = new PostManager(PDOFactory::getMySqlConnection());
        $arrayAllPost = $manager->getAllPosts();
        return $this->render("Home",$arrayAllPost,"Front/home");
        
    }

    public function show($id) 
    {
        $managerPost = new PostManager(PDOFactory::getMySqlConnection());
        $managerComment = new CommentManager(PDOFactory::getMySqlConnection());
        $array = [$managerPost->getPostByID($id),$managerComment->getCommentByPostID($id)];

        return $this->render("Article",$array,"Front/show");

    }
}