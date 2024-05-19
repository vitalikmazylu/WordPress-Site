<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */


//echo $_GET['lang'];



if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	/*echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;*/
}

if($_GET['lang']){
    
    if($_GET['lang']=="ru"){
        
    }
    if($_GET['lang']=="pt"){
        $name="Nome ";
        $phone="Telefone ";
        $payment_detail="Detalhes do pagamento ";
        $info="Detalhes ";
        $example_in_info="Nota de pedido (opcional) ";
        $placeholder_info="Notas sobre o seu pedido, como solicitações especiais para o departamento de expedição.";
        $your_order="Seu pedido";
        $product="Produtos ";
        $sub_total="Subtotal ";
        $total="Total";
    }
    
}

//checkout woocommerce-checkout 
?>
<style>

    header{
        position: relative;
    }
.woocommerce-message{
    display: none;
}
</style>

<form name="checkout" method="post" class="flex flex-col max-w-xl mx-auto shadow-md rounded-md bg-white py-10 px-5 space-y-2" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data ">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
                
             <?php   do_action( 'woocommerce_checkout_shipping' );?>
			</div>

		
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php //do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

<script type="text/javascript">

 lang="<?php echo $_GET['lang']; ?>";
    
    if(lang=="pt"){
       
        setTimeout(() => {
 var name=document.querySelector("label[for='billing_first_name']");
var phone=document.querySelector("label[for='billing_phone']");
       // var payment_detail=document.querySelector(".woocommerce-billing-fields h3");
       // var info=document.querySelector(".woocommerce-additional-fields h3");
        var example_in_info=document.querySelector("label[for='order_comments']");
         var placeholder_info=document.querySelector("textarea[name='order_comments']");
       // var your_order=document.querySelector("#order_review_heading");
       // var product=document.querySelector("thead tr .product-name");
       // var sub_total=document.querySelector(".cart-subtotal th");
        //var total=document.querySelector(".order-total th");

        var order_button=document.querySelector('button[name="woocommerce_checkout_place_order"]');
        var nopay=document.querySelector('label[for="payment_method_cod"]');


     //   console.log(product);
name.innerHTML="<?php echo $name;?>";
        phone.innerHTML="<?php echo $phone;?>";
      //  payment_detail.innerHTML="<?php echo $payment_detail;?>";
        //info.innerHTML="<?php echo $info;?>";
        example_in_info.innerHTML="<?php echo $example_in_info;?>";
        console.log(placeholder_info);
        placeholder_info.attributes[3].value="<?php echo $placeholder_info;?>";
    //   your_order.innerHTML="<?php echo $your_order;?>";
       // product.innerHTML="<?php echo $product;?>";
      //  sub_total.innerHTML="<?php echo $sub_total;?>";
      //  total.innerHTML="<?php echo $total;?>";
        order_button.innerHTML="Confirme a ordem";
        nopay.innerHTML="Sem pagamento";
        
        
}, "3000");
        
    }
    
    

</script>
