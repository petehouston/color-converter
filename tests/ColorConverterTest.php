<?php

require './src/ColorConverter.php';

function test_it_should_be_an_instance_of_ColorConverter() 
{
    $converter = new ColorConverter;
    if($converter instanceof ColorConverter) {
        echo "[PASSED] test: instance of ColorConverter";
    } else {
        echo "[FAILED] test: instance of ColorConverter";
    }
}



// execute tests
test_it_should_be_an_instance_of_ColorConverter();
