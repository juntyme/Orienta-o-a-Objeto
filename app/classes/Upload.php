<?php

namespace app\classes;

abstract class Upload
{
    private $file;
    protected $newName;


    public function __construct($file)
    {
        $this->file = $file;
    }

    protected function extension()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    protected function rename()
    {
        $unigId = uniqid(true);
        $this->newName = $unigId . '.' . $this->extension();
        return  $unigId . '.' . $this->extension();
    }
}
