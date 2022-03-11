<?php

class UploadFoto
{
    public $file;
    public $newName;
    public $extensions = ['png', 'jpg'];

    public function file($file)
    {
        $this->file = $file;
    }

    public function extension()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    public function rename()
    {
        $unigId = uniqid(true);
        $this->newName = $unigId . '.' . $this->extension();
    }

    public function upload()
    {
        return $this->newName;
    }
}
