<?php
?><h2>Задание 1</h2><?
//СРС №1. Часть 1| Вопрос 1
$a=3;
$b=$a;
echo $b,"<br>";
//СРС №1. Часть 1| Вопрос 2
$a=3;
$b=10;
echo $a-$b,"<br>";
echo $a+$b,"<br>";
echo $a*$b,"<br>";
echo $a/$b,"<br>";
//СРС №1. Часть 1| Вопрос 3
$c=15;
$d=2;
$result = $c+$b;
echo $result,"<br>";
//СРС №1. Часть 1| Вопрос 4
$a=10;
$b=2;
$c=5;
echo ($a+$b+$c)/(($a+$b+$c)/3),"<br>";
//СРС №1. Часть 1| Вопрос 5
$a=17;
$b=10;
$c=$a-$b;
$b=17;
$result = $c+$b;
echo $result,"<br>";
?><h2>Задание 2</h2><?
//СРС №1. Часть 2| Вопрос 1
$text = 'Привет мир!';
echo $text .='Это моя пернвая программа',"<br>";
//СРС №1. Часть 2| Вопрос 2
$text1=$text1.'Привет';
$text2=$text2.'Мир!';
echo $text1.$text2,"<br>";
//СРС №1. Часть 2| Вопрос 3
$name='Максим';
echo 'Привет'.$name,"<br>";
$text='Новый текст';
//СРС №1. Часть 2| Вопрос 4
$age='19';
$height='163';
echo 'Мой возраст:'.$age.'|'.'Мой рост'.$height,"<br>";
//СРС №1. Часть 2| Вопрос 5
$text='abcde';
echo $text [0],"<br>";
echo $text [2],"<br>";
echo $text [4],"<br>";
?><h2>Задание 3</h2><?
//СРС №1. Часть 3| Вопрос 1
$arr =['a', 'b', 'c'];
var_dump($arr);
for($i=0;$i < count($arr);$i++) {
    var_dump($arr[$i]);
}
//СРС №1. Часть 3| Вопрос 2
$ss = '';
for($i=0;$i < count($arr);$i++) {
    $ss .= $arr[$i];
}
echo $ss,"<br>";
//СРС №1. Часть 3| Вопрос 3
$arr=['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.$arr[3].','.$arr[0].'/'.$arr[3],"<br>";
//СРС №1. Часть 3| Вопрос 4
$arr=['2', '5', '3', '9'];
$result = ($arr[0] * $arr[1])+($arr[2] *$arr[3]);
echo $result,"<br>";
//СРС №1. Часть 3| Вопрос 5
$arr[0]=1;
$arr[1]=2;
$arr[2]=3;
$arr[3]=4;
$arr[4]=5;
?><h2>Задание 4</h2><?
//СРС №1. Часть 4| Вопрос 1
$arr = ['a'=>11, 'b'=>20, 'c'=>30];
echo $arr['c'],"<br>";
//СРС №1. Часть 4| Вопрос 2
$arr = ['q3'=>12, 'r3'=>23, 'f3'=>34];
echo array_sum($arr);
//СРС №1. Часть 4| Вопрос 3
$arrr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arrr['Коля'].'-Зарплата Коли',"<br>";
echo $arrr['Петя'].'-Зарплата Пети',"<br>";
//СРС №1. Часть 4| Вопрос 4
$m = ['1'=>"январь", '2'=>"февраль",'3'=>"март",'4'=>"апрель",'5'=>"май",'6'=>"июнь",'7'=>"июль",'8'=>"август",'9'=>"сентябрь",'10'=>"октябрь",'11'=>"ноябрь",'12'=>"декабрь"];
echo $m['9'],"<br>";
echo $m['6'];

?><br><?php
//4.5
$day = 3;
$week = ['1'=>'Понедельник','2'=>'Вторник','3'=>'Среда','4'=>'Четверг','5'=>'Пятница','6'=>'Сббота','7'=>'Воскресенье'];
echo $week[$day];


