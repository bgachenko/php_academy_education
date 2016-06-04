/**
* Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
* Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
*/
<?php
function delete_words_length_like($number, $text){
    $new_text = array();
    foreach(preg_split('/[\s,\n]+/', $text) as $word){
        if(mb_strlen($word, 'utf-8') <= $number){
            array_push($new_text, $word);
        }
    }
    return $new_text;
}
function my_print_array($array){
    foreach($array as $item){
        echo $item . " ";
    }
}
$file = file_get_contents('./text.txt');
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $text_array = delete_words_length_like($number, $file);
    $new_text = implode(' ', $text_array);
    file_put_contents('./text.txt', $new_text);
}
include "main.html";
