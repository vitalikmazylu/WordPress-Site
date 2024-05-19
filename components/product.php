

<div class="shadow-md border-green-600 border-2 rounded-md sm:py-5 py-3 sm:px-10 px-4 detail-cont">

							<h4 class="font-bold text-center sm:text-2xl text-lg md:mb-8 mb-4"><?php echo $data['name']; ?></h4>

							<p class="mb-6 sm:text-base text-sm"><?php echo $data['short_description']; ?></p>

							<img class="mb-6 card-photo" src="<?php echo $data['main_image']; ?>">

							<button

								class="block mx-auto border-2 py-2 px-6 rounded-md hover:bg-green-600 hover:text-white duration-500 detail-btn border-green-600"><?php 	pll_e( 'Подробнее' );?></button>

							<div class="overlay">

								<div class="bg-white rounded-md popup">

									<div class="absolute sm:right-8 right-3 text-xl cursor-pointer close-overlay">

										<i class="fa-solid fa-xmark"></i>

									</div>

									<h4 class="font-bold sm:text-center text-lg md:text-2xl mb-8"><?php echo $data['name']; ?></h4>

									<div class="flex lg:flex-row flex-col gap-4 items-start justify-between">

										<div>

											<ul class="grid space-y-2">

												<li class="flex items-center gap-3 font-semibold md:text-lg">

													<i class="fa-solid fa-map-location-dot"></i>

												<?php echo $data['location']; ?>

												</li>

												<li class="flex items-center gap-3 font-semibold md:text-lg">

													<i class="fa-regular fa-clock"></i>

													<?php echo $data['time']; ?>

												</li>

												<li class="flex items-center gap-3 font-semibold md:text-lg">

													<i class="fa-solid fa-users"></i>

													<?php echo $data['people']; ?>

												</li>

												<li class="flex items-center gap-3 font-semibold md:text-lg">

													<i class="fa-solid fa-euro-sign"></i>

													<?php echo $data['price']." ".get_woocommerce_currency_symbol(); ?>

												</li>

											</ul>

											<div class="flex md:flex-row flex-col md:items-center gap-5 mt-5">

												<input placeholder="<?php 	pll_e( 'Выберите дату' );?>" class="border border-green-500 rounded-md py-2 px-6"

													type="text" title="<?php echo $data['name']; ?>" id="myDatepicker" >

                                                <div class="loader_btn"> 

												<button product="?add-to-cart=<?php echo $i->id; ?>" id="order_buttom"

													class="border-2 py-2 px-6 rounded-md hover:bg-green-600 hover:text-white duration-500 detail-btn border-green-600 load-button"><?php 	pll_e( 'Забронировать' );?></button>

                                                 <div class="loader_cont"> 
              <div class="sk-chase"> 
               <div class="sk-chase-dot"></div> 
               <div class="sk-chase-dot"></div> 
               <div class="sk-chase-dot"></div> 
               <div class="sk-chase-dot"></div> 
               <div class="sk-chase-dot"></div> 
               <div class="sk-chase-dot"></div> 
              </div> 
             </div> 
            </div>
 
											</div>

                                         <div class="info-data"></div>  

										</div>

										<img src="<?php echo $data['main_image']; ?>"

											class="lg:max-w-[25vw] md:w-1/2 md:h-auto w-full">

									</div>

									<p class="md:mt-8 md:text-base text-sm mt-4 leading-normal"><?php echo $data['description']; ?></p>

									<div class="slider-container flex flex-col items-center justify-center gap-8">

										<div class="slider-items mt-4">

                                            <?php foreach($data['images'] as $img_src){  ?>

                                            

											<img class="active-img" src="<?php echo $img_src; ?>">

											

                                            <?php }?>

										</div>

										<div class="flex items-center justify-center gap-3">

										</div>

									</div>

								</div>

							</div>

						</div>