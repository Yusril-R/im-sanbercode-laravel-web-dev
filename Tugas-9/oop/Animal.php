<?php
class Animal
{
    public $legs;
    public $cold_blooded;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = "no";
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function get_cold_blooded()
    {
        return $this->cold_blooded;
    }
}
