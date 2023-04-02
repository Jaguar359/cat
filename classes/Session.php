<?php

/**
 * Сессии
 */
class Session
{
    /**
     * Получить
     *
     * @param $name
     *
     * @return mixed
     */
    public static function get($name){
        // стартуем сессии
        session_start();

        // выводим данные
        return $_SESSION[$name];
    }

    /**
     * Задать
     *
     * @param $name
     * @param $value
     */
    public static function set($name, $value)
    {
        // стартуем сессии
        session_start();

        // добавляем новые данные
        $_SESSION[$name] = $value;
    }
}