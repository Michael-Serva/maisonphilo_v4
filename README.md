# Maison Philo

## Production environment

PHP 7.4.9

## Initialisation

`symfony server:run`
Wampserver Mysql 5.7.31
Symfony 5.4.7

## Coding standard

### Php fixer

`phpcs -v --standard=PSR12 --ignore=./src/Kernel.php ./src`
`phpcbf -v --standard=PSR12 --ignore=./src/Kernel.php ./src`

### Eslint js

`npx eslint assets`

### eslint scss

`npx stylelint "assets/**/*.scss"`

add --fix for fixes errors

## Codepen

### Float button

<https://codepen.io/alvarotrigo/pen/OJmrqVB>
