<?php
class Controller
{
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }
    public function accueil()
    {
        //ici du code spécifique à la page d'acceul : par ex récuperer la bdd
        $titre="ACCUEIL";
        $this->render($titre);
    }

    public function services()
    {
        $titre="SERVICES";
        $this->render($titre);
    }
    public function about()
    {
        $titre="A PROPOS";
        $this->render($titre);
    }
    public function contact()
    {
        $titre="CONTACT";
        $this->render($titre);
    }
    public function autrePage(){
        $titre = 'autre page';
        $this->render($titre);
    }
    public function notFound(){
        $titre = "404";
        $this->render($titre);
    }
    public function render($titre = null)
    {

        $pageLink = CSS . "/" . $this->router->getPage() . ".css";
        if (file_exists((PAGES . $this->router->getPage() . '.php'))) {
            $template = PAGES . $this->router->getPage() . '.php';
            // include PAGES . $this->router->getPage() . '.php';
        } else {
            $template = PAGES . 'page404.php';
            // include PAGES . 'page404.php';
        }
        include TEMPLATE . '/base.php';
    }
}