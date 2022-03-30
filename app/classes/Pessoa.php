<?php

namespace app\classes;

class Pessoa
{
    public $idade;
    public $nome;
    public $email;

    public function dados()
    {
        return "meu nome é {$this->nome}, minha idade é {$this->idade} e meu email é {$this->email}";
    }
}
