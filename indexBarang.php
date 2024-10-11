<?php
require_once 'domain_object/node_barang.php';

$obj_barang = [];
$obj_barang[] = new Barang(1,"Coca Cola",40000,1) ;
$obj_barang[] = new Barang(1,"Pepsi",20000,2) ;
$obj_barang[] = new Barang(1,"Fanta",30000,3) ;
$obj_barang[] = new Barang(1,"Aqua",45000,4) ;

include 'views/barang_list.php';