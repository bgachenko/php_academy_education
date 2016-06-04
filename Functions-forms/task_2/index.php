/**
* Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
*  Реализовать с помощью функции.
*/
<?php
function top_3($string) {
    $list_of_words = explode(" ", $string);
    for ($i = 0; $i < count($list_of_words) - 1; $i++) {
        $j = 0;
        while ($j < count($list_of_words) - 1) {
            if (strlen($list_of_words[$j]) < strlen($list_of_words[$j + 1])) {
                $temp = $list_of_words[$j];
                $list_of_words[$j] = $list_of_words[$j + 1];
                $list_of_words[$j + 1] = $temp;
            }
            ++$j;
        }
    }
    if (count($list_of_words) >= 3) {
        echo $list_of_words[0] . " - " . strlen($list_of_words[0]) . "</br>";
        echo $list_of_words[1] . " - " . strlen($list_of_words[1]) . "</br>";
        echo $list_of_words[2] . " - " . strlen($list_of_words[2]) . "</br>";
    } else echo "This array doesn't have 3 items!";
}
if (isset($_POST['submit'])) {
    top_3($_POST['text_1']); }
include "main.html";