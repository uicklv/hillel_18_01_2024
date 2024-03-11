<?php

class Request
{
    public static function getUrl(): string
    {
        $url = $_SERVER['REQUEST_URI'];

        if (str_contains($url, '?')) {
            $url = substr($url, 0, strpos($url, '?'));
        }

        return $url;
    }

    public static function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function getReferer(): string
    {
        return $_SERVER['HTTP_REFERER'];
    }

    public static function get(string $key, string $mode = 'string'): mixed
    {
        $data = self::getData();
        $value = $data[$key] ?? null;

        if ($value !== null) {

            if ($mode === 'int') {
                $value = intval($value);
            } elseif ($mode === 'float') {
                $value = floatval($value);
            }

            $value = preg_replace("/<script.*?<\/script>/", '', $value);
            $value = htmlspecialchars($value);
//            $string = filter_var($string, FILTER_SANITIZE_ADD_SLASHES);
        }

        return $value;
    }

    public static function getData(): array
    {
        $data = [];
        if (self::getMethod() === 'post') {
            $data = $_POST;
        } elseif (self::getMethod() === 'get') {
            $data = $_GET;
        }

        return $data;
    }
}