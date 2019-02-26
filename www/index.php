<?php
include_once 'User.php';

//формирование массива
$dataUsers = User::createUsers();

include_once 'view.php';