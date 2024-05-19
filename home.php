<?php get_header(); 







if($_GET["add-to-cart"]==""){

WC()->session->set('cart', array());

}



//WC()->cart->empty_cart( false );



 require(dirname(__FILE__) . '/wp-load.php'); 

$orders = wc_get_orders( array('numberposts' => -1) );

$order_list=array();







foreach( $orders as $order ){



    foreach ( $order->get_items() as $item_id => $item ) {

    

   $product=$item->get_name(); 

    

}

//echo $product;

  $data=$order->get_data()['meta_data'][4]->value;  

   // print_r($order->get_data()['meta_data'][1]->value);

   // echo $data;

 //print_r($order);

    array_push($order_list,array(

    "name"=>$product,

    "data"=>$data   

    ));

    

}







    // Получаем записи из категорий



$lang=pll_current_language();

                        

                        global $posts;



                          $posts = get_posts([ 

	'numberposts' => -1,

	'offset'      => 1

]);

 

$about=array();

$points=array();

$guits=array();

$services=array();







                    if($posts){

                        foreach( $posts as $post ){

                            setup_postdata( $post );

            $categories = get_the_category($post->ID);

                            $category_name=$categories[0]->name;



                            if($category_name=="Что из себя представляет Green Voyage Алгарве"){

                               array_push($about,[

                                   'name'=>$post->post_title,

                                   'description'=>$post->post_content,

                                   'image'=>get_the_post_thumbnail_url()

                               ]);

                                

                            }  

                             if($category_name=="Миссия,Цель,Вклад,Отличия"){

                               array_push($points,[

                                   'name'=>$post->post_title,

                                   'description'=>strip_tags($post->post_content)

                               ]);

                                

                            } 

                             if($category_name=="Гиды"){

                               array_push($guits,[

                                   'name'=>$post->post_title,

                                   'description'=>$post->post_content,

                                    'image'=>get_the_post_thumbnail_url()

                               ]);

                                

                            } 

                              if($category_name=="Услуги"){

                               array_push($services,$post->post_title

                               );

                                

                            } 

    }

                    }

?>

		<main orders='<?php echo json_encode($order_list); ?>'>

			<section class="hero pt-0 sm:pt-20 flex flex-col items-center justify-center px-0 sm:px-10">

				<h1 class="uppercase text-4xl sm:text-5xl font-bold text-white text-center mb-20">Green Voyage</h1>

				<p class="uppercase text-xl sm:text-2xl font-bold text-white">Todos a bordo!</p>

			</section>

			<div class="container py-10 px-6 2xl:px-10 mx-auto">

				<section id="tours">

					<h2 class="text-center text-2xl sm:text-3xl font-bold"><?php 	pll_e( 'НАШИ ЭКСКУРСИИ' );?></h2>

					<div class="grid lg:grid-cols-2 gap-8 items-center justify-between md:mt-12 mt-6">

                     <!-- Товары с екскурсий -->   

                        

                        <?php

                        //echo get_the_title(98);



                       $args = array(

        'post_type'      => 'product',

        'posts_per_page' => 10,

        'product_cat'    => 'Misc'

    );

                        

                         $loop =  wc_get_products( $args );

                        $products_id=array();

                      

                        

                        foreach($loop as $i){



                         array_push($products_id, $i->id); 

                          $data=get_product_info($i->id);

                      

                        if($lang==$data['lang']){

                            include('components/product.php');   

                        }

                        

                     

                        }

                        

                        

                        

                        function get_product_info($id){

                            $data=array();

                            

                              $product = wc_get_product($id);

                        

                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ) );

                        

                        $image_gallery=$product->get_gallery_image_ids();

                        

                    

                            

                            

                     $data['id']=$product->get_id();

                       

                        $data['name']=$product->get_title();

                        $data['description']=$product->get_description();

                        $data['short_description']=$product->get_short_description(); 

                        $data['price']=$product->get_price();

                        $data['main_image']=get_the_post_thumbnail_url($id);

                        $data['images']=array();

                        $data['location']=$product->get_attribute( 'Location' );

                        $data['time']=$product->get_attribute( 'Time' );

                        $data['people']=$product->get_attribute( 'People' );

                        $data['lang']=$product->get_attribute( 'Language' );

                        foreach($image_gallery as $a){

                            array_push($data['images'],wp_get_attachment_url( $a ));

                        } 

                            return $data;

                        }

                        

                   

                                     

                        ?>

                        

						

                        

                        

                        

					</div>

				</section>

				<section id="about">

                    

                    <?php

                    if($about){

                    ?>

                    

                   <h2 class="text-center text-2xl sm:text-3xl sm:my-12 my-6 font-bold"><?php echo $about[0]['name'];?>

					</h2>

					<div class="flex lg:flex-row flex-col items-start justify-between gap-10 mb-12 sm:mb-16">

						<p class="lg:max-w-xl leading-normal text-base sm:text-xl" ><?php echo strip_tags($about[0]['description']);?>

						</p>

						<div >

							<img  src="<?php echo $about[0]['image'];?>">

						</div>

					</div> 

                    

                <?php    

                    }

?>

					

 

                    

                    

					<div class="flex flex-wrap items-center sm:gap-10 gap-6 justify-between ">

                        <?php

                        if($points){

                            foreach($points as $i){

                              ?>

                        	<div>

							<h4 class="text-2xl"><?php echo $i['name'];?></h4>

							<p class="lg:max-w-xl mt-6"><?php echo $i['description'];?>

							</p>

						</div>

                        <?php

                            }

                        }

                        

                        ?>

					

					

					</div>

					<div class="flex lg:flex-row flex-col items-start justify-between gap-10 mt-12">

                        <?php

                        if($guits){

                            foreach($guits as $i){

                             ?> 

                        

                        <div class="lg:max-w-xl">

							<img class="rounded-[50%] w-[150px] block mb-4" src="<?php echo $i['image']; ?>">

							<h3 class="text-2xl font-bold mb-4"><?php echo $i['name']; ?></h3>

							<?php echo $i['description']; ?>

						</div>

                               <?php

                            }

                        }

                        

                        

                        ?>

						

				

					</div>

				</section>

				<section id="services" class="sm:mt-12 mt-6">

					<h2 class="text-center text-2xl sm:text-3xl font-bold"><?php 	pll_e( 'Услуги' );?></h2>

                    

                  

					<ul class="grid lg:flex items-center text-lg lg:gap-10 gap-5 justify-between sm:mt-12 mt-6	">

                        

                          <?php

                    if($services){

                       $service_size=count($services); 

                        ?>

                        <div class="space-y-5 xl:w-[576px]">

                        <?php

                        for($i=0;$i<$service_size/2;$i++){

                            ?>

                            <li class="flex gap-2 items-center"><span class="inline-block w-2 h-2 rounded-[50%] bg-green-500"></span>

								<?php echo $services[$i]; ?></li>

                            <?php

                        }

                        ?>

                           </div> 

                         <div class="space-y-5 xl:w-[576px]">

                            <?php

                        for($i=1*$service_size/2;$i<$service_size;$i++){

                            ?>

                              <li class="flex gap-2 items-center"><span class="inline-block w-2 h-2 rounded-[50%] bg-green-500"></span>

								<?php echo $services[$i]; ?></li>

                             <?php

                        }

                        ?>

                           </div>      

                             <?php

                    }

                    

                    

                    ?>

						

					</ul>

				</section>

			</div>

		</main>

		<?php get_footer(); ?>