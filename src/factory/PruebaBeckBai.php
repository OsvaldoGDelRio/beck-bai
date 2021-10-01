<?php declare(strict_types=1);
namespace src\factory;

use src\Factory;
use src\FactoryClassInterface;
use src\molestia\Molestia;
use src\molestia\ValoresMolestia;
use src\PruebaBeckBai as SrcPruebaBeckBai;

class PruebaBeckBai implements FactoryClassInterface
{
    public function crear(array $array): SrcPruebaBeckBai
    {
        $factory = new Factory();

        $frases = $factory->crear('src\factory\Frases', $array);

        $molestia = new Molestia($frases, new ValoresMolestia());

        return new SrcPruebaBeckBai($frases, $molestia);
    }
}
