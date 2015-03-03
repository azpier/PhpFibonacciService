# PhpFibonacciService

### Description ###

Provides a simple Fibonacci RestFul web service. it accepts a number, n, as input and returns the first n Fibonacci numbers, starting from 0. I.e. given n = 5, appropriate output would represent the sequence "0 1 1 2 3".

### Install ###

Copy the fibservice.php file to your PHP development stacks folder.

### Usage ###

http://mydomain.com/fibservice.php?num=5

### JSON output ###

{"fibonacci":[0,1,1,2,3]}

###  Handling Errors 

Given a negative number, it will respond with an array with -1.
{"fibonacci":[-1]}




