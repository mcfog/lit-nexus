<?php namespace Lit\Nexus\Interfaces;

interface IReadableKeyValue
{
    /**
     * @param string $key
     * @return mixed
     */
    public function get($key);

    /**
     * @param string $key
     * @return bool
     */
    public function exists($key);
}