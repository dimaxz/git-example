<?php

//формирование массива
$users = [];

$users []= "Шевченко А.С." ;
$users [] = "Новиков А.Э.";



//вывод данных
echo "На занятии присутствовали:". PHP_EOL . implode(PHP_EOL, $users);
