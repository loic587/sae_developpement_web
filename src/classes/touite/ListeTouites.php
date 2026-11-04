<?php

namespace iutnc\touiteur\touite;

class ListeTouites {

    protected array $touites;

    public function __construct(array $t) {
        $this->touites = $t;
    }

    public function __get(string $at) : mixed {
        if (property_exists($this, $at)) return $this->$at;
        throw new \Exception ("invalid property : $at");
    }
    
}