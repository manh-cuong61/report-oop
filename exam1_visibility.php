<?php
class Person
{
    protected $address = 'Hà Nội';
    public function getName()
    {
        return 'Name from Persion class';
    }
}

class Student extends Person
{
    public $name = 'Nguyễn Mạnh Cường';
    protected $email = 'cuong@gmail.com';
    private $phone = '0999999999';

    // protected truy cập được từ class con
    public function getAdress()
    {
        return $this->address;
    }
    // private chỉ truy cập được bên trong class
    public function getPhone()
    {
        return $this->phone;
    }

    // ex: ghi đè dữ liệu với function getName() của class cha persion
    public function getName()
    {
        return 'Name from student class';
    }
}

$student1 = new Student;

// public truy cập được ở mọi nơi
echo $student1->name;

// ex về kế thừa
echo $student1->getName();

echo $student1->getAdress();

echo $student1->getPhone();
