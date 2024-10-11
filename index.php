<?php
require_once 'domain_object/node_role.php';
require_once 'domain_object/node_barang.php';

$obj_role = [];
$obj_role[] = new Node_role( 1, "kasir",  "dibuat untuk kasir", 1);
$obj_role[] = new Node_role(2,"admin", "dibuat untuk admin", 2);
$obj_role[] = new Node_role(3,"owner","dibuat untuk punya", 3);
$obj_role[] = new Node_role(4,"customer","untuk pelanggan", 4);

$obj_barang = [];
$obj_barang[] = new Barang(1,"Coca Cola",40000,1) ;
$obj_barang[] = new Barang(1,"Pepsi",20000,2) ;
$obj_barang[] = new Barang(1,"Fanta",30000,3) ;
$obj_barang[] = new Barang(1,"Aqua",45000,4) ;

include 'views/role_list.php';
?> 