<?php
require_once "../APLIKASITODOLISTPHPDASAR/Model/Todolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/busineslogic/removetodolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/busineslogic/addtodolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/busineslogic/showtodolist.php";

addtodolist("yurdia");
addtodolist("stewiea");
addtodolist("peter");

showtodolist();

removetodolist(2);
showtodolist();


$succes = removetodolist(4);

var_dump($succes);
showtodolist();