<?php
/**
 * Thankyou page
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
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<?php wc_get_template( 'checkout/order-received.php', array( 'order' => $order ) ); ?>

			

		<?php endif; ?>


		<?php //do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

		<!--<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

		

		<tbody>
			<tr class="woocommerce-table__line-item order_item">

	<td class="woocommerce-table__product-name product-name">
		Екскурсия 	</td>

	<td class="woocommerce-table__product-total product-total">
		<span class="woocommerce-Price-amount amount"><bdi>Заголовок экскурсии&nbsp;</bdi></span>	</td>

</tr>

		</tbody>

		<tfoot>
								<tr>
						<th scope="row">Подытог:</th>
						<td><span class="woocommerce-Price-amount amount">270,00&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span></td>
					</tr>
										<tr>
						<th scope="row">Доставка:</th>
						<td>Бесплатная доставка</td>
					</tr>
										<tr>
						<th scope="row">Метод оплаты:</th>
						<td>Оплата при доставке</td>
					</tr>
										<tr>
						<th scope="row">Итого:</th>
						<td><span class="woocommerce-Price-amount amount">270,00&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span></td>
					</tr>
										</tfoot>
	</table>-->

	<?php else : ?>

		<?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

	<?php endif; ?>

</div>
