# Mikko test

Cli utility to calculate salary and bonus days for the remaining of the year.

Project specifications:

- Sales staff get a regular monthly fixed base salary and a monthly bonus.
- The base salaries are paid on the last day of the month unless that day is a Saturday or a Sunday
  (weekend), then it will be paid the friday before that.
- On the 15th of every month bonuses are paid for the previous month, unless that day is a weekend. In
  that case, they are paid the first Wednesday after the 15th

A .csv file is generated to output these values. The user can specify the filename.

## Requirements
- PHP 8.1 or higher
- Composer installed
- To run tests, PhpUnit 9 is required

## How to use
1. Open project root
2. Run `$ php main.php [<filename>.<ext>]`

   filename and extension are optional. The code will generate a correct filename for the output
