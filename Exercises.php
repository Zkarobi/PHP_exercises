<?php
function hello_world() {
    echo "Hello world!<br>";
}
hello_world();
?>
<?php

function triangle($size) {
    for ($i = 1; $i <= $size; $i++) {
        //Right-aligning the triangle
        echo str_repeat('*', $i) . "<br>";
    }
}
triangle(5); //Example call
?>
<?php
function word_count($str) {
    $count = 0;
    $words = explode(' ', $str); //Splitting based on spaces
    foreach ($words as $word) {
        if (trim($word) != '') {
            $count++;
        }
    }
    echo "Phrase: $str<br>";
    echo "Word count: $count<br>";
    return $count;
}
word_count("hello, how are you?");
?>
<?php
function countWords($str) {
    $str = strtolower($str); //Convert to lowercase
    $words = str_word_count($str, 1); //Returns an array of words
    $word_counts = array();
    
    foreach ($words as $word) {
        if (isset($word_counts[$word])) {
            $word_counts[$word]++;
        } else {
            $word_counts[$word] = 1;
        }
    }
    
    echo "<pre>";
    print_r($word_counts);
    echo "</pre>";
}
countWords("This is a test. This test is fun.");
?>
<?php
function remove_all($str, $char) {
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != $char) {
            $result .= $str[$i];
        }
    }
    echo "Original: $str<br>";
    echo "Modified: $result<br>";
    return $result;
}
remove_all("Summer is here!", 'e');
?>
