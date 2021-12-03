<?php

abstract class BaseController
{
    private $viewDir = "view/";
    private $template = "view/template.view.php";

    public function render(string $title, array $data, string $view){
        $view = $this->viewDir . $view . ".view.php";
        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $this->template;
    }
}