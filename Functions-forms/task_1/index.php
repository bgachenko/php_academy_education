/*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в
первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
которая будет возвращать массив с общими словами.*/
<?php
function getCommonWords($a, $b){
    $result = array ();
    $uniq = array ();
    foreach (explode(' ', $a) as $word1){
        foreach (explode(' ', $b) as $word2){
            if ($word1 == $word2){
                array_push($result, $word1);
                $uniq = array_unique($result);
            }
        }
    }
    return $uniq;
}
if (isset($_POST['submit'])){
    $all_words = getCommonWords($_POST['text_1'], $_POST['text_2']);
    foreach ($all_words as $word){
        echo $word . "\n";
    }
        
}
include 'main.php';