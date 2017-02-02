<?php

require 'vendor/autoload.php';

$nbIterations = 10000;

$loaders = array(
    'josegonzalez' => function () {
        return (new josegonzalez\Dotenv\Loader(__DIR__ . '/.env'))
            ->parse()
            ->toEnv(true)
            ->putenv(true)
            ->toServer(true);
    },

    'vlucas'       => function () {
        return (new Dotenv\Dotenv(__DIR__))->load();
    },

    'symfony' => function () {
        return (new Symfony\Component\Dotenv\Dotenv)->load(__DIR__ . '/.env');
    },

    'rfussien'     => function () {
        return (new Rfussien\Dotenv\Loader(__DIR__))->load();
    },
);

foreach ($loaders as $loader => $function) {
    $timestart = microtime(true);

    for ($i = 0; $i <= $nbIterations; $i++) {
        $res = $function();
    }

    $time = number_format(microtime(true) - $timestart, 4);
    printf("Execution time for %s: %s\n", $loader, $time);
}
