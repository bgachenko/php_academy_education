/*
Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
*/
<?php
function reverse($a){
    $words = strrev($a);
    return $words;
}
if (isset($_POST['submit'])) {
    $qq = reverse($_POST['text']);
    print_r($qq); }

include 'main.html';