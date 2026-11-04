<?php

namespace iutnc\touiteur\action;

use Exception;
use iutnc\touiteur\render\RenderTouite;

class DisplayTouiteAction extends Action {

    public function execute() : string {
        if ($this->http_method === 'GET' && isset($_SESSION["touite"])) {
            $r = new RenderTouite($_SESSION["touite"]);
            return $r->render(2);
        } else {
            return new \Exception("Touite introuvable");
        }
    }

}