# Maison Philo

## Production environment

PHP 7.4.9


## Initialisation

`symfony server:run`
Wampserver Mysql 5.7.31
Symfony 5.4.7

### Php fixer

`phpcs -v --standard=PSR12 --ignore=./src/Kernel.php ./src `
`phpcbf -v --standard=PSR12 --ignore=./src/Kernel.php ./src`

### Coding standard

` npx eslint assets --fix`