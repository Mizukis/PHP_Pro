<?php

// Задание 1-4 Создали класс пользователь и класс наследник компания. 

class User
{
    public $id;
    public $name;
    public $surname;
    public $address;
    public $tel;

    public function __construct($id, $name, $surname, $address, $tel)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->tel = $tel;
    }

    public function display(): string
    {
       return "<h4>{$this->name}, {$this->surname}</h4>" .
           $this->getAddress() .
           $this->getTel() . '<hr>';
    }

    public function getAddress(): string
    {
        return "<p>{$this->address}</p>" ;
    }

    public function getTel(): string
    {
        return "<p>Tel.: {$this->tel} </p>" ;
    }
}

class Company extends User
{
    public function __construct($id, $name, $surname, $address, $tel, $company, $vat)
    {
        parent::__construct($id, $name, $surname, $address, $tel);
        $this->company = $company;
        $this->vat = $vat;
    }

    public function display(): string
    {
        return "<h2>{$this->company}</h2>" .

            parent::display();
    }

}

$user = new User(1,"John","Smeeth", "Allee 21, 12815 Town", 358931468 );
echo $user->display();

$company = new Company(2,"Ben", "Down", "Forest 45, 17945 Villa", 390210293, "Bones Ltd", "US567828345");
echo $company->display();


