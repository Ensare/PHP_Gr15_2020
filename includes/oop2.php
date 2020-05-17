<?php
    class Company {
        public $name;
        public $city;
        public $address;
        public $employees;
        public $phone;
        public $year;
        public $time;
        public $days;
        public $pronari;

    function set_Name($Name){
        $this->name = $Name;
    }

    function get_Name(){
        echo $this->name."<br/>";
    }

    function set_City($City){
        $this->city = $City;
    }

    function get_City(){
        echo $this->city."<br/>";
    }

    function set_Address($Address){
        $this->address = $Address;
    }

    function get_Address(){
        echo $this->address."<br/>";
    }

    function set_Employees($Emp){
        $this->employees = $Emp;
    }

    function get_Employees(){
        echo $this->employees."<br/>";
    }

    function set_Phone($Phone){
        $this->phone = $Phone;
    }

    function get_Phone(){
        echo $this->phone."<br/>";
    }

    function set_Year($Year){
        $this->year = $Year;
    }

    function get_Year(){
        echo $this->year."<br/>";
    }

    function set_Time($Time){
        $this->time = $Time;
    }

    function get_Time(){
        echo $this->time."<br/>";
    }

    function set_Days($Days){
        $this->days = $Days;
    }

    function get_Days(){
        echo $this->days."<br/>";
    }

    function set_Pronari($Pronari){
        $this->pronari = $Pronari;
    }

    function get_Pronari(){
        echo $this->pronari."<br/>";
    }
    }
    class oldCompany extends Company{
        var $var;
   
   function set_vitiMbylljes($Var){
      $this->var = $Var;
   }
   
   function get_vitiMbylljes(){
      echo $this->var. "<br />";
   }

   
    }
    

?>
