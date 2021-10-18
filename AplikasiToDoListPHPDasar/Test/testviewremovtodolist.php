<?php
require_once "../APLIKASITODOLISTPHPDASAR/Model/Todolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/View/viewRemoveTodolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/busineslogic/addtodolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/View/viewshowtodolist.php";


addtodolist("yurdi");
addtodolist("stewie");
addtodolist("meg");
showtodolist();

viewremovetodolist();

showtodolist();