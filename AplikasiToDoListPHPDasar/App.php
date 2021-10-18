<?php
require_once __DIR__. "/Model/Todolist.php";
require_once __DIR__. "/busineslogic/showtodolist.php";
require_once __DIR__."/busineslogic/addtodolist.php";
require_once __DIR__."/busineslogic/removetodolist.php";
require_once __DIR__."/View/viewshowtodolist.php";
require_once __DIR__."/View/viewAddTodolist.php";
require_once __DIR__. "/View/viewRemoveTodolist.php";
require_once __DIR__."/helper/input.php";
echo "Aplikasi ToDoList" . PHP_EOL;

viewshowtodolist();
