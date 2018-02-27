# php5to7converter
This is simple library that is able to convert php 5 code to php 7.
It runs from cli (command line) and scans a single file that you passed as argument. 
Then it converts the functionality that has been removed to its equivalent to PHP 7.
It adds comments with // WARNING where changes in language use are occured, but where rewrite is not possible.

## Usage
Simply run the following command
```sh
php convert.php > output.php -- input.php
```
This command will parse the `input.php`, process it and make `output.php` file. Just make shure that you have read/write permissions.
If you just want to see result printed in cli run:
```sh
php convert.php -- input.php
```
This will print the processed output to the console.
