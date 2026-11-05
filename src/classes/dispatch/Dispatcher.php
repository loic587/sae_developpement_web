<?php

namespace iutnc\touiteur\dispatch;

use iutnc\touiteur\action\DefaultAction;
use iutnc\touiteur\action\DisplayTouiteAction;
use iutnc\touiteur\action\DisplayTouitesAction;

class Dispatcher {

    private ?string $action = null;
    protected array $actions = [];

    public function __construct() {
        $this->action = $_GET['action'] ?? 'default';
    }

    public function run() : void {
        if (array_key_exists($this->action, $this->actions)) {
            switch ($this->action) {
            case "default" : 
                $act = new DefaultAction();
                break;
            case "display-touite" : 
                $act = new DisplayTouiteAction();
                break;
            }
            $this->renderPage($act->execute());
        } else {
            throw new \Exception("Action '{$this->action}' not found");
        }
    }

    public function addRoute(string $action, string $class): self {
        $this->actions[$action] = $class;
        return $this;
    }

    private function renderPage(string $html): void {
        echo <<<HTML
        <h1> Touiteur </h1>
        $html
        <br><a href='?action=display-touite&id=1'>Afficher touite id 1</a><br>
        HTML;
    }

}