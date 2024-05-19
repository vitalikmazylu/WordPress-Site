<?php
/**
 * "Order received" message.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order|false $order
 */

defined( 'ABSPATH' ) || exit;

?>



<div class="flex flex-col max-w-xl mx-auto shadow-md rounded-md bg-white py-10 px-5 space-y-2">


<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
	<?php
	/**
	 * Filter the message shown after a checkout is complete.
	 *
	 * @since 2.2.0
	 *
	 * @param string         $message The message.
	 * @param WC_Order|false $order   The order created during checkout, or false if order data is not available.
	 */
	$message = apply_filters(
		'woocommerce_thankyou_order_received_text',
		__( 'Thank you. Your order has been received.', 'woocommerce' ),
		$order
	);

	echo esc_html( $message );
    
    
    
    $orderdata=$order->get_data();
    $data=array();
    $data['name']=$orderdata['billing']['first_name'];
    $data['phone']=$orderdata['billing']['phone'];
    $data['date']=$orderdata['meta_data'][4]->value;
    //$data['product_name']="null";
    // Номер заказчика
    $phone_owner="351929124623";
   
    $text;
   


$content=array(
    "messaging_product"=> "whatsapp",
    "to"=> $phone_owner,
    "type"=> "template",
    "template"=>array(
        "name"=> "green_voyage",
        "language"=>array(
           "code"=> "ru" 
            )
        )
    
    );


    foreach ( $order->get_items() as $item_id => $item ) {
        
        $data['product_name']=$item->get_name();
        
         $text=$data['product_name']."
 "."Имя ".$data['name']."
".
"Телефон ".$data['phone']."
".
"Запланирована дата ".$data['date'];

$content2=array(
"messaging_product"=> "whatsapp",
"to"=> $phone_owner,
"type"=> "text",
"text"=> array(
"preview_url"=> false,
"body"=> $text
)
);
        
        WhatsApp($content);
        WhatsApp($content2);
        
    }
    
    function WhatsApp($body){
        $token="EABYhdypm1ZA4BOZBegZAJaicAPeSMLBlgbTm4H6Wpy0GNMcK83LcMyL0LQQRvfEdgAHnITCDYdpPZAEWZBqfR96XOCeDjWMMZARKhnMyZBdLZBgyrT1Uy8EIY8bVGe5itUAOhIB4BIeKJi0JS9Jc9dls4w3y1aGgaxorod5TZCRepoGRiLmt7DGZB9pP88YL9BHBIPcZBWlnrRHZClaIZCQK2";
    $phone_id=166376296555585;


        
        
  $url = "https://graph.facebook.com/v18.0/".$phone_id."/messages";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
 "Authorization: Bearer ".$token,
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);









curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
    }
    
    
    
	?>



</p>


<a class="border-2 py-2 px-6 rounded-md hover:bg-green-600 hover:text-white duration-500 detail-btn border-green-600" href="https://greenvoyage.pt/" style="
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    text-align: center;
"> Вернуться к главной странице</a>

<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
Seu pedido foi aceito. Obrigado.
</p>
<a class="border-2 py-2 px-6 rounded-md hover:bg-green-600 hover:text-white duration-500 detail-btn border-green-600" href="https://greenvoyage.pt/" style="
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    text-align: center;
">Voltar à página principal</a>

</div>