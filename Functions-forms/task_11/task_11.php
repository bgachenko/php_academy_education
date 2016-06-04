/*Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.
*/
<?php
$string = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
function big_later ($string){
    $result = array();
    $a = explode('. ', $string);
    foreach ($a as $value) {
        $first_later = mb_substr($value, 0, 1);
        $another = mb_substr($value, 1, mb_strlen($value) - 1);
        array_push($result, mb_strtoupper($first_later) . $another);
    }
    $string = implode('. ', $result);
    return $string;
}
