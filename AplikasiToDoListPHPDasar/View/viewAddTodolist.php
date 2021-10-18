<?php
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../Model/Todolist.php";
require_once __DIR__."/../busineslogic/addtodolist.php";



function viewaddtodolist()
{
  echo "tambah list" . PHP_EOL;
  
  $todo = input("list(x untuk batal)");

  if($todo == "x"){
    echo "batal tambah list" . PHP_EOL;
  }else{
      addtodolist($todo);
  }
  
}