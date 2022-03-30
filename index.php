<?php

require "vendor/autoload.php";

// use app\classes\UploadFoto;
// use app\classes\UploadFile;
// use app\classes\AtividadesPessoa;
// use app\classes\Pessoa;

class Controller
{

    public function make()
    {
        if (!$this->controllerExist()) {
            throw new ControllerNotExistException;
        }

        if (!$this->methodExists()) {
            throw new MethodNotExistException;
        }

        return 'contoller';
    }

    private function controllerExist()
    {

        return true;
    }

    private function methodExists()
    {
        return false;
    }
}

class ControllerNotExistException extends Exception
{
    public function message()
    {
        return "Erro no arquivo {$this->getFile()} na linha {$this->getLine()}";
    }
}


class MethodNotExistException extends Exception
{
    public function message()
    {
        return "Erro no método {$this->getFile()} na linha {$this->getLine()}";
    }
}


try {
    $controller = new Controller;
    echo $controller->make();
} catch (Exception $e) {

    var_dump($e->message());
}



// METODOS MAGICOS
// class ShoppingCart
// {
//     private $get = [];
//     private $product = [];

//     public function __toString()
//     {
//         return "Chamando o toString";
//     }

    // public function __call($name, $value)
    // {
    //     $this->product[] = $value;
    // }

    // public function products()
    // {
    //     return $this->product;
    // }

    // public function __set($name, $value)
    // {
    //     if (!property_exists($this, $name)) {
    //         $this->get[$name][] = $value;
    //     }
    //     throw new \Exception("Essa propridade já existe");
    // }

    // public function __get($name)
    // {
    //     var_dump($this->get);
    // }
// }

// $shoppingCart = new ShoppingCart;
// echo $shoppingCart;

// $shoppingCart->add('Monitor');
// var_dump($shoppingCart->products());


// $shoppingCart->product = 'Monitor';
// $shoppingCart->product = 'Carrinho';
// $shoppingCart->product;

/// EXEMPLO POLIMORFISMO

// interface EmailInterface
// {
//     public function send();
// }

// class Swift implements EmailInterface
// {

//     public function send()
//     {
//         return "enviando email com o swift";
//     }
// }

// class Mailer implements EmailInterface
// {
//     public function send()
//     {
//         return "enviando email com o Mailer";
//     }
// }

// class SendEmail
// {
//     private $email;

//     public function __construct(EmailInterface $email)
//     {
//         $this->email = $email;
//     }

//     public function send()
//     {
//         return $this->email->send();
//     }
// }

// $email = new SendEmail(new Mailer);
// echo $email->send();

/// EXEMPLO POLIMORFISMO CONCRETO

// abstract class Banco
// {
//     abstract public function depositar($valor);
// }

// class Itau extends Banco
// {
//     private $juros = 0.6;

//     public function depositar($valor)
//     {
//         return "depositando com juros de {$this->juros} com o valor de {$valor}";
//     }
// }

// class Bradesco extends Banco
// {
//     private $juros = 1;

//     public function depositar($valor)
//     {
//         return "depositando com juros de {$this->juros} com o valor de {$valor}";
//     }
// }

// $itau = new Itau;
// echo $itau->depositar(10);

// EXEMPLO INJEÇÃO DE DEPENDENCIA COM ABSTRACT

// abstract class Model
// {
//     public function all()
//     {
//         return "todos registros";
//     }

//     public function find($id)
//     {
//         return "Encontrando o user com o id {$id}";
//     }

//     abstract public function create();
// }

// class User extends Model
// {
//     public function create()
//     {
//     }
// }

// class Login
// {
//     private $model;

//     public function __construct(Model $model)
//     {
//         $this->model = $model;
//     }

//     public function logar()
//     {
//         return $this->model->all();
//     }
// }

// $login = new Login(new User);
// echo $login->logar();


// EXEMPLO INJEÇÃO DE DEPENDENCIA COM INTERFACE

// interface UploadInterface
// {
//     public function uploadFile();
// }

// class Upload
// {
//     private $upload;

//     public function __construct(UploadInterface $upload)
//     {
//         $this->upload = $upload;
//     }

//     public function doUpload()
//     {
//         return $this->upload->uploadFile();
//     }
// }

// class UploadPdf implements UploadInterface
// {
//     public function uploadFile()
//     {
//         return "Upload pdf file";
//     }
// }

// class UploadFoto implements UploadInterface
// {
//     public function uploadFile()
//     {
//         return "Upload foto";
//     }
// }

// $upload = new Upload(new UploadFoto);
// echo $upload->doUpload();


// EXEMPLO CABEÇA

// interface HeadInterface
// {
//     public function create();
// }

// class Head implements HeadInterface
// {
//     public function create()
//     {
//         return "criando a cabeça";
//     }
// }

// class HeadLoiro implements HeadInterface
// {
//     public function create()
//     {
//         return "criando cabeça loira";
//     }
// }

// class Person
// {
//     private $head;

//     // injeção de dependencia
//     public function __construct(HeadInterface $head)
//     {
//         $this->head = $head;
//     }

//     public function create()
//     {
//         return $this->head->create();
//     }
// }

// $person = new Person(new HeadLoiro);
// echo $person->create();


// TESTE 6
// interface InterfaceLogin
// {
//     public function login();
// }

// abstract class Login
// {
//     abstract public function logar();
// }

// class LoginUser extends Login
// {
//     public function logar()
//     {
//     }
// }

// $login = new LoginUser;

// TESTE 5
// class Resize
// {
//     public function resize()
//     {
//         return "resize";
//     }
// }

// class UploadFoto
// {
//     public function upload(ValidateExtension $validate)
//     {
//         $resize = new Resize;
//     }
// }

// TESTE 4
// class head
// {
//     public function create()
//     {
//         return "criando a cabeça";
//     }
// }

// class Hand
// {
//     public function create()
//     {
//         return "criando a mão";
//     }
// }

// class Person
// {
//     private $head;
//     private $hand;

//     public function __construct()
//     {
//         // composição
//         $this->head = new Head;
//     }

//     /// Agregação
//     public function create(Hand $hand)
//     {
//         $this->head->create();
//         $hand->create();
//     }
// }

// $person = new Person;
// echo $person->create(new Hand);


// TESTE 3
// $upload = new UploadFoto('teste.png');
// $upload->upload();
// echo $upload->newName();


// TESTE 2
// abstract class Email
// {
//     public function __construct()
//     {
//     }

//     public static function teste()
//     {
//         return "teste";
//     }

//     public static function who()
//     {
//         return "Alexandre";
//     }

//     public static function send()
//     {
//         return static::who();
//     }
// }

// TESTE 1

// class SendEmail extends Email
// {

//     public static function who()
//     {
//         return parent::teste();
//     }
// }

// echo SendEmail::send();



// carrega um statico
// echo UploadFoto::$propriedade_teste;
// echo UploadFoto::teste();

// $upload = new UploadFoto('foto.png');

// $upload->extension();
// $upload->rename();
// $upload->validation();
// echo $upload->upload();

// $atividadesPessoa = new AtividadesPessoa;
// echo $atividadesPessoa->pular();


// $pessoa = new Pessoa;
// $pessoa->idade = 35;
// $pessoa->nome = "Alexandre";
// $pessoa->email = "contato@devclass.com.br";
// echo $pessoa->dados();
