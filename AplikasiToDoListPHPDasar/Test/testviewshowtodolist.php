<?php
require_once "../APLIKASITODOLISTPHPDASAR/View/viewshowtodolist.php";
require_once "../APLIKASITODOLISTPHPDASAR/busineslogic/addtodolist.php";
addtodolist("yurdi");
addtodolist("stewie");
addtodolist("peter");
viewshowtodolist();