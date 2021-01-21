<?php

namespace Gen2;

class Routeur
{
    public function __construct()
    {
        try {
            echo "Hello";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
