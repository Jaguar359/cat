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
        // добавляем новые данные
        $_SESSION[$name] = $value;
    }

    /**
     * Был ли такой ключ добавлен в сессии
     *
     * @param $name
     *
     * @return bool
     */
    public static function check($name)
    {
        if (isset($_SESSION[$name])){
            return true;
        }

        return false;
    }
}