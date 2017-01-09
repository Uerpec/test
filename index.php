<?php
require_once 'dataBase.php'; //класс подключения к базе
require_once 'config.php'; //параметры подключения к базе

//
$dataBase = new DataBase($host,$user,$password,$base);
$dataBase->connection_info();
