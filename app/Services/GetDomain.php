<?php


namespace App\Services;

class GetDomain
{
    public function return()
    {
        $name = $_SERVER['HTTP_HOST'];

        $extensionsToFilter = ['test', 'nl', 'com', 'net', 'online'];

        $pattern = '/\.(?:' . implode('|', $extensionsToFilter) . ')\b/i';

        $name = preg_replace($pattern, '', $name);

        $name = trim($name, '.');

        return $name;
    }
}
