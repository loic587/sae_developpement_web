<?php

namespace iutnc\touiteur\action;

use Exception;
use iutnc\touiteur\render\RenderTouite;
use iutnc\touiteur\touite\Touite;

class DefaultAction extends Action {

    public function execute() : string {
        return "default action, this is mostly just for testing, will be changed to something else later";
    }

}