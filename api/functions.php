<?php
function get_price($find)
{
    $books = array(
        'java' => 500,
        'c' => 250,
        'c++' => 390,
        'php' => 450,
        'python' => 825,
        'ruby' => 421
    );
    
    foreach ($books as $book => $price) {
        # code...
        if ($book == $find) {
            return $price;
            break;
        }
    }
    
    
}
?>