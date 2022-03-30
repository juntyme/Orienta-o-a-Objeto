<?php

namespace app\classes;

use app\traits\ValidationFile;

class UploadFile extends Upload
{
    use ValidationFile;

    public $extensions = ['zip', 'rar', 'pdf'];

    public function __construct($file)
    {
        parent::__construct($file);
    }

    public function upload()
    {
        return "Gerou o arquivo {$this->rename()}";
    }
}
