<?php
require_once __DIR__."/../busineslogic/showtodolist.php";
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../View/viewRemovetodolist.php";
require_once __DIR__."/../View/viewAddTodolist.php";
require_once __DIR__."/../Model/Todolist.php";
function viewshowtodolist()
{
    while(true) {
        showtodolist();

    echo "MENU". PHP_EOL;
    echo "1. tambah list" . PHP_EOL;
    echo "2. hapus list" . PHP_EOL;
    echo "x. keluar" . PHP_EOL;
    $pilihan = input("pilih");

    if ($pilihan == "1"){
        viewaddtodolist();
    }else if($pilihan == "2"){
        viewremovetodolist();
    }else if($pilihan == "x"){
        break;
    } else {
        echo "pilihan tidak sesuai" . PHP_EOL;
    }
    
    }
    echo "selesai";
}