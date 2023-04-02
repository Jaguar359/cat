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
        session_start();

        if (Session::check('mood')) {
            $this->status = Session::get('status');
            $this->mood   = Session::get('mood');
        } else {
            $this->status = 'Кот сидит';
            $this->mood   = 50; // дефолтное состояние настроения = 50 пунктов (из 100)
        }
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

    /**
     * Играем с котом
     */
    public function game()
    {
        $this->mood   += 30;
        $this->status = 'Кот играет';
    }

    /**
     * Гладим кота
     */
    public function stroke()
    {
        $_SESSION['mood'] = $this->mood + 30;
        $this->mood += 30;

        if (isset($_SESSION['mood']) && $_SESSION['mood'] > 100){
            $_SESSION['mood'] = 100;
        }
    }
}