<?php 
declare(strict_types=1);

$input = readline("Type text to be reversed: ");

echo reverseWords($input);

function reverseWords(string $input)
{
    $words = explode(" ", $input);
    $newString = "";
    $size = count($words);

    for ($i=$size -1; $i >= 0; $i--) { 
        $newString .= $words[$i] . " ";
    }

    return $newString; 
}