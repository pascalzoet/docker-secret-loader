<?php

namespace DockerSecret;

class DockerSecretLoader
{
    public static function docker_secret($name)
    {
        return trim(file_get_contents('/run/secrets/' . $name));
    }

    public static function docker_secret_callable($name)
    {
        return self::docker_secret($name);
    }
}
