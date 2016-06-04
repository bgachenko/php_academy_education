/*
Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.
*/
<?php
function unique_words($text) {
    $arr = explode(' ', $text);
    $words = array_count_values($arr);
    $result = array();
    foreach ($words as $word => $count) {
        if($count == 1) {
            array_push($result, $word);
        }
    }
    return count($result);
}
if (isset($_POST['submit'])) {
    echo unique_words($_POST['text']);
}