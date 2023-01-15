<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function iaMaintenace(): bool;
}

interface Car extends HasBrand, IsMaintenance
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car {

    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): boolval
    {
        return false;
    }

}