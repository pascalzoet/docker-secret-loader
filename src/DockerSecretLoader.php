<?php

function docker_secret($name)
{
    try {
       return trim(file_get_contents('/run/secrets/' . $name));
    } catch(Exception $ex) {
        return null;
    }
}

function docker_secret_callable($name)
{
   return function () use ($name) {
        return docker_secret($name);
    };
}
