<?php

class Student
{
    protected $start = "start";
    protected $end = "end";
    protected $name = "Nguyễn Mạnh Cường";
    
    //thực hiện ngay khi vừa mới khởi tạo class
    public function __construct()
    {
        echo $this->start;   
    }

    public function getName()
    {
        echo $this->name;
    }
    // chờ các phương thức khác chạy rồi mới chạy
    public function __destruct()
    {
        echo $this->end;
    }
}

$obj = new Student;
$obj->getName();
