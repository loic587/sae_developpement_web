<?php

class Tag {

    private string $text;

    public function __construct(string $txt)
    {
        $this->text = $txt;
    }

    public function __get(string $at)
    {
        if (property_exists($this, $at)) return $this->$at;
        throw new \Exception ("invalid property : $at");
    }

}