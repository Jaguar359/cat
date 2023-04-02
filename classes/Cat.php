<?php

class Cat
{
    public $name;   // имя
    public $mood;   // настроение
    public $weight; // вес
    public $status; // статус/состояние
    public $color;  // цвет

    public function __construct()
    {
        $this->status = 'Кот сидит';
        $this->mood = 50; // дефолтное состояние настроения = 50 пунктов (из 100)
    }

    /**
     * Получить состояние кота
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function getMood()
    {
        return $this->mood;
    }

    public function game(){
        $this->mood += 30;
        $this->status = 'Кот играет';
    }
}