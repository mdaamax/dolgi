<?php
$arr = [
    0=>['name'=>'Коля', 'salary'=>300],
    1=>['name'=>'Вася', 'salary'=>400],
    2=>['name'=>'Петя', 'salary'=>500],
];
foreach ($arr as $mas) {
    echo 'Имя:'.$mas['name'].'|'.'Зарплата:'.$mas['salary'].'<br>';
}
?>