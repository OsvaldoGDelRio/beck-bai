[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/beck-bai/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/beck-bai/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/OsvaldoGDelRio/beck-bai/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/beck-bai/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/beck-bai/badges/build.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/beck-bai/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/beck-bai/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)
# beck-bai
Librería para la prueba de síntomas de ansiedad de BECK

### Instalación

```shell
composer require osvaldogdelrio/beck-bai
```

### Uso

A partir de un array con los datos, ya sean de BD o un formulario, los datos que puede tener cada frase pueden ser el valor numérico de cada frase o su representación textual, '0' o 'Poco o nada' y así sucesivamente.
```php
$datos = [
    'frase1' => '2',
    'frase2' => '0',
    'frase3' => '0',
    'frase4' => '0',
    'frase5' => '3',
    'frase6' => '0',
    'frase7' => '0',
    'frase8' => '0',
    'frase9' => '0',
    'frase10' => '0',
    'frase11' => '0',
    'frase12' => '0',
    'frase13' => '0',
    'frase14' => '0',
    'frase15' => '0',
    'frase16' => '0',
    'frase17' => '0',
    'frase18' => '0',
    'frase19' => '0',
    'frase20' => '0',
    'frase21' => '0'
];
```

Creamos un [Factory](https://github.com/OsvaldoGDelRio/factory) de la prueba y le pasamos los datos como parámetro
```php
$factory = new Factory();
$beck = $factory->crear('src\factory\PruebaBeckBai',$datos);
```

Mostramos los resultados
```php
//Frase $beck->frase()->{NUMERO_DE_FRASE}()->{VALOR_REQUERIDO}();

echo $beck->frase()->frase1()->fraseNumero();
echo $beck->frase()->frase1()->fraseTexto();
echo $beck->frase()->frase1()->valorTexto();
echo $beck->frase()->frase1()->valorNumero();

//Molestia $beck->molestia()->{VALOR_REQUERIDO}();

echo $beck->molestia()->numero();
echo $beck->molestia()->texto();
```
### Ejemplo

Se elaboró un ejemplo de implementación sencillo con Bootstrap y CkEditor, se encuentra en al carpeta web y en el siguiente enlace: [Prueba BECK:BAI - Síntomas de ansiedad](https://beckbai.ticsa.org.mx/)