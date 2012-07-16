# codeigniter-extensions

Extensions and helpers for CodeIgniter.

Currently limited to the following helper functions:

* **label**(*string $data*, *string $class*) : *string*
* **tooltip**(*string $tooltip*, *string $class*, *string $text*, *int $datawidth*) : *string*

## label

* string **$data**: content of the label.
* string **class**: type of label, any combination of [*round, radius*] and [*secondary, alert, success*].

## tooltip

* string **$tooltip**: the message of the tooltip. 
* string **$class**: any combination of [*tip-top*, *tip-left*, *tip-right*, *tip-bottom*] and [*noradius*].
* string **$text**: the text that's going to have a tooltip.
* int **$datawidth**: defines the width of the tooltip.