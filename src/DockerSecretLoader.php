<?php

function docker_secret($name)
{
    $str = @file_get_contents('/run/secrets/' . $name);
    if ($str === FALSE) {
        return null;
    } else {
        return trim($str);
    }
}

function docker_secret_callable($name)
{
   return function () use ($name) {
        return docker_secret($name);
    };
}
