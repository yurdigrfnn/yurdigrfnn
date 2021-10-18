<?php
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../busineslogic/removetodolist.php";

function viewremovetodolist()
{
    echo "menghapus list" . PHP_EOL;

    $pilihan = input("nomor (x untuk batal)");

    if($pilihan == "x"){
        echo "batal menghapus list";
    }else{
        $succes = removetodolist($pilihan);
         if($succes){
            echo "$pilihan telah di hapus".PHP_EOL;
        }else{
            echo "nomor $pilihan gagal di hapus(mungkin tidak ada dalam list" . PHP_EOL;
    }
    }
   
}