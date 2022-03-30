<?php

namespace app\classes;

use app\traits\ValidationFile;

/// acoplamento
/// composição
/// favoreça a composição sobre a herança

// é um acoplamento
class UploadFoto extends Upload
{
    use ValidationFile;

    private $extensions = ['png', 'jpg'];
    private $upload;

    public function __construct()
    {
        // composição
        // $this->upload = new Upload;
    }

    public static function teste()
    {
        return "teste";
    }

    public function newName()
    {
        return $this->newName;
    }

    public function upload()
    {
        return $this->rename();
    }
}
