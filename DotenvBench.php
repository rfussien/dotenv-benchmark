<?php

class DotenvBench
{
    public function benchJosegonzalez()
    {
        (new josegonzalez\Dotenv\Loader(__DIR__ . '/.env'))
            ->parse()
            ->toEnv(true)
            ->putenv(true)
            ->toServer(true);
    }

    public function benchVlucas()
    {
        (new Dotenv\Dotenv(__DIR__))->load();
    }

    public function benchSymfony()
    {
        (new Symfony\Component\Dotenv\Dotenv)->load(__DIR__ . '/.env');
    }

    public function benchRfussien()
    {
        (new Rfussien\Dotenv\Loader(__DIR__))->load();
    }
}
