
<?php

class Person {

    public $name;
    public $lastName;
    public $city;
    public $email;
    public $phoneNumber;
    public $age;
    public $post;
    public $time;
    public $day;
    public $started;
    public $experience;

    public function __construct($name,$lastName,$city,$email,$phoneNumber,$age,$post,$time,$day,$started,$experience){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->city = $city;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->age = $age;
        $this->post = $post;
        $this->time = $time;
        $this->day = $day;
        $this->started = $started;
        $this->experience = $experience;
    }
}
?>