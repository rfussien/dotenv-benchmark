# php dotenv loaders benchmark

This is a very small script to show the execution time of 4 dotenv loaders for
10.000 executions each.

## What is tested ?

Every loader has to reach the same point, so opening the .env file, parsing it
and loading the result into $_ENV and $_SERVER.

## Where does my results come from ?

I've got the execution time from the local execution (i5 1.8Ghz, php7.0.14).

But feel free to make yours:
```bash
composer install
./vendor/bin/phpbench run DotenvBench.php --report=default --revs=10000
```

## Comparaison

### [josegonzalez/php-dotenv](https://github.com/josegonzalez/php-dotenv)
 - actual version: 3.0.0 (_depends on m1/env 2.1.0_)
 - First commit: 30 Dec 2013
 - code lines in src: 538
 - 10.000 loops execution time: **2,990.724μs**

### [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)
 - actual version: v2.4.0
 - First commit: 23 jan 2013
 - code lines in src: 303
 - 10.000 loops execution time: **1,349.173μs**

### [symfony/dotenv](https://github.com/symfony/dotenv)
 - actual version: dev-master
 - First commit: Jan 12, 2017
 - code lines in src: 305
 - 10.000 loops execution time: **1,209.834μs**

### [rfussien/dotenv](https://github.com/rfussien/dotenv)
 - actual version: v1.0.0
 - First commit: Jan 26, 2017
 - code lines in src: 114
 - 10.000 loops execution time: **233.698μs**

## Raw results

```bash
dotenv-benchmark ⇒ ./vendor/bin/phpbench run DotenvBench.php --report=default --revs=10000
PhpBench 0.14-dev (@git_version@). Running benchmarks.
Using configuration file: /Users/remi/work/projects/repos/github.com/rfussien/dotenv-benchmark/phpbench.json

\DotenvBench

    benchJosegonzalez             I0 P0     [μ Mo]/r: 2,990.724 2,990.724 (μs)  [μSD μRSD]/r: 0.000μs 0.00%
    benchVlucas                   I0 P0     [μ Mo]/r: 1,349.173 1,349.173 (μs)  [μSD μRSD]/r: 0.000μs 0.00%
    benchSymfony                  I0 P0     [μ Mo]/r: 1,209.834 1,209.834 (μs)  [μSD μRSD]/r: 0.000μs 0.00%
    benchRfussien                 I0 P0     [μ Mo]/r: 233.698 233.698 (μs)  [μSD μRSD]/r: 0.000μs 0.00%

4 subjects, 4 iterations, 40,000 revs, 0 rejects
(best [mean mode] worst) = 233.698 [1,445.858 1,445.858] 233.698 (μs)
⅀T: 5,783.430μs μSD/r 0.000μs μRSD/r: 0.000%
suite: 133c5dd10833d125736896ffa9414de355fb16af, date: 2017-02-05, stime: 11:33:22
+-------------+-------------------+--------+--------+-------+------+-------------+-------------+--------------+----------------+
| benchmark   | subject           | groups | params | revs  | iter | mem_peak    | time_rev    | comp_z_value | comp_deviation |
+-------------+-------------------+--------+--------+-------+------+-------------+-------------+--------------+----------------+
| DotenvBench | benchJosegonzalez |        | []     | 10000 | 0    | 39,153,608b | 2,990.724μs | 0.00σ        | 0.00%          |
| DotenvBench | benchVlucas       |        | []     | 10000 | 0    | 883,144b    | 1,349.173μs | 0.00σ        | 0.00%          |
| DotenvBench | benchSymfony      |        | []     | 10000 | 0    | 926,312b    | 1,209.834μs | 0.00σ        | 0.00%          |
| DotenvBench | benchRfussien     |        | []     | 10000 | 0    | 841,720b    | 233.698μs   | 0.00σ        | 0.00%          |
+-------------+-------------------+--------+--------+-------+------+-------------+-------------+--------------+----------------+
``