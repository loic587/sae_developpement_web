<?php

namespace iutnc\touiteur\touite;

class Touite {

    private string $text;
    private string $auteur;
    private string $date;
    private array $tags;
    private string $image;

    public function __construct(string $txt, string $a, string $d, string $img = "")
    {
        $this->text = $txt;
        $this->auteur = $a;
        $this->date = $d;
        $this->image = $img;
    }

    public function __get(string $at)
    {
        if (property_exists($this, $at)) return $this->$at;
        throw new \Exception ("invalid property : $at");
    }

    
}