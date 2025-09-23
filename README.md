# Analysis
# my-converter

Small CLI tool to convert decimal <-> binary <-> hex and apply bitwise operations.

## Usage

php bin/convert.php -n 23 --op convert
php bin/convert.php -n 23 --op and --mask 5
php bin/convert.php -n 6 --op flags --flags '{"read":4,"write":2,"exec":1}'
