<?php


echo $_POST['name'];

echo getinfo($_POST['name'],$_POST['data']);

function getinfo($name,$data){
    if($name!=null && $data!=null){
        
global $orders;        
         require(dirname(__FILE__) . '/wp-load.php'); 
        
$orders = wc_get_orders( array('numberposts' => -1) );
$order_list=array();

foreach( $orders as $order ){
    foreach ( $order->get_items() as $item_id => $item ) {
   $product=$item->get_name(); 
    
}
  $data=$order->get_data()['meta_data'][1]->value;  

    array_push($order_list,array(
    "name"=>$product,
    "data"=>$data   
    ));
    
}
    //print_r($order_list);    
       return count($order_list);
        
    }
}


?>