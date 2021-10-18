<?php

require_once "../APLIKASITODOLISTPHPDASAR/Model/Todolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/busineslogic/addtodolist.php";

addtodolist("yurdi");
addtodolist("stewie");
addtodolist("peter");

var_dump($todolist);

