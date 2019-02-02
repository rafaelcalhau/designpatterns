<?php

if (!is_file( 'vendor/autoload.php' )) {
    die( 'Please generate the autoload first using the composer.' );
}

require( 'vendor/autoload.php' );

use App\Classes\{ Calculator, Budget };
use App\Classes\Taxes\{ A, B, C };

$value = 1000;

$budget = new Budget();
$budget->setValue( $value );

$calculator = new Calculator( $budget );

echo "Budget: $". number_format( $value, 2, ".", "," );
echo '<br /><br />';

echo "Tax A: $" . number_format ($calculator->calc( new A ), 2, ".", "," );
echo '<br />';

echo "Tax B: $" . number_format( $calculator->calc( new B ), 2, ".", "," );
echo '<br />';

echo "Tax C: $" . number_format( $calculator->calc( new C ), 2, ".", "," );
echo '<br />';