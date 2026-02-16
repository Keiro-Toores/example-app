<?php

class Student{
    public $name;
    public $age;
    public $grade;

    Public function introduce()
    {
        return "Hi I'm {$this->name}, I am {$this->age} years old and I am in grade {$this->grade}.";
    }
    public function study($subject)
    {
        return "{$this->name} is studying {$subject}.";
    }
}

$student = new Student();
$student->name = "Ragnar";
$student->age = 17;
$student->grade = 11;

echo $student->introduce();
echo $student->study("Mathematics");