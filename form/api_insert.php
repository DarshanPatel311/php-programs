<?php 



include 'config/config.php';

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

$c1 = new Config();

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $product = $_REQUEST['name'];
  $category = $_REQUEST['description'];
  $price = $_REQUEST['price'];

 $res =  $c1->insertDatabase($product, $price, $category);
 if($res){
    $arr['status'] = "Record insertaion successfully!!";
    echo json_encode($arr);
 }else{
    $arr['error'] = "Record insertaion failed!!";
    echo json_encode($arr);
 }
}
else{
    $arr['msg'] = "Only POST method is allowed !!";
    echo json_encode($arr);
}





?>