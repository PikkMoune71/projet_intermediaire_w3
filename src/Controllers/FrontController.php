<?php

class FrontController
{
    private $viewDir;
    private $template;

    public function __construct(){
        $this->viewDir = "view/";
        $this->template  = "view/template.php";
    }

    public function render(string $title, array $data, string $view){
        $view = $this->viewDir . $view . ".php";
        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $this->template;
    }

    public function home(int $number = 5) {
        $manager = new PostManager(PDOFactory::getMySqlConnection());
        $arrayAllPost = $manager->getAllPosts();
        return $this->render("Home",$arrayAllPost,"Front/home");
        
    }

    public function show($id) 
    {
        $managerPost = new PostManager(PDOFactory::getMySqlConnection());
        $managerComment = new CommentManager(PDOFactory::getMySqlConnection());
        $array = [$managerPost->getPostbyId($id),$managerComment->getCommentByPostID($id)];

        return $this->render("Article",$array,"Front/show");

    }
}