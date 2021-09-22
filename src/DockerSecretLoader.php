<?php

function docker_secret($name)
{
    return trim(file_get_contents('/run/secrets/' . $name));
}

function docker_secret_callable($name)
{
    return docker_secret($name);
}
