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

    public function userList() {
        $manager = new UserManager(PDOFactory::getMySqlConnection());
        $arrayAllUser = $manager->getAllUser();
        return $this->render("User List",$arrayAllUser,"Front/userList");
    }

    public function userDelete($id) {
        $manager = new UserManager(PDOFactory::getMySqlConnection());
        $manager->deleteUser($id);
        Header('Location: /userList');
        exit;
    }

    public function userCrud() {
        $manager = new UserManager(PDOFactory::getMySqlConnection());
        $arrayAllUser = $manager->getAllUser();
        return $this->render("User Crud",$arrayAllUser,"Front/userCrud");
    }

    public function createPost() {
        $manager = new PostManager(PDOFactory::getMySqlConnection());
        $arrayAllPosts = $manager->createPost();
        return $this->render("User Crud",$arrayAllPosts,"Front/createPost");
    }

    public function postCrud() {
        $manager = new PostManager(PDOFactory::getMySqlConnection());
        $arrayAllPosts = $manager->getAllPosts();
        return $this->render("Post Crud",$arrayAllPosts,"Front/postCrud");
    }

    public function user() {
        $manager = new PostManager(PDOFactory::getMySqlConnection());
        $arrayAllPosts = $manager->getAllPosts();
        return $this->render("User",$arrayAllPosts,"Front/user");
    }

    public function editUser() {
        $manager = new UserManager(PDOFactory::getMySqlConnection());
        $arrayAllUser = $manager->getAllUser();
        return $this->render("User Crud",$arrayAllUser,"Front/editUser");
    }

}