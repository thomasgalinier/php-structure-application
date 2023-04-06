<?php
class Router {
    private $page;

    public function __construct(){
        $this->page = isset($_GET["page"]) ? $_GET["page"] : "accueil";
    }
    public function getPage():string{
        return $this->page;
    }
function includeTemplate($page):void {
    if (file_exists(PAGES . $this->page . ".php")) {
        include PAGES . $this->page . ".php";
    } else {
        include PAGES . "page404.php";
    }
    }
}