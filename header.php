<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Green_Voyage
 * @since Green_Voyage 1.0
 */
wp_head();
echo pll_current_language('pl');
?>

<!DOCTYPE html>
<html lang="<?php echo pll_current_language(); ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title(); ?></title>

<!--	<link rel="stylesheet" href="./css/style.css">-->
	<script src="https://kit.fontawesome.com/8a26229144.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    

</head>

<body>
   
	<div class="wrapper-secondary">
		<div
			class="burger-container flex items-start duration-500 justify-start flex-col w-screen pt-32 pb-16 px-10 fixed bg-white z-30 translate-y-[-100%]">
			<nav>
<?php if($_GET['lang']=="pt"){ ?>
	<ul class="grid items-center gap-4">
					<li class="header-link scroll-link burger-link">
						<a href="/">Inicio</a>
					</li>
					<li class="header-link scroll-link burger-link">
						<a href="#tours">Excursões</a>
					</li>
					<li class="header-link scroll-link burger-link">
						<a href="#about">Sobre nós</a>
					</li>
					<li class="header-link scroll-link burger-link">
						<a href="#services">Serviços</a>
					</li>
					
				</ul>

<?php }else{?>

				<ul class="grid items-center gap-4">
					<li class="header-link scroll-link burger-link">
						<a href="/"><?php 	pll_e( 'Главная' );?></a>
					</li>
					<li class="header-link scroll-link burger-link">
						<a href="#tours"><?php 	pll_e( 'Экскурсии' );?></a>
					</li>
					<li class="header-link scroll-link burger-link">
						<a href="#about"><?php 	pll_e( 'О нас' );?></a>
					</li>
					<li class="header-link scroll-link burger-link">
						<a href="#services"><?php 	pll_e( 'Услуги' );?></a>
					</li>
					
				</ul>
			<?php } ?>
			</nav>
			<div class="grid md:hidden gap-6 my-4">
				<a href="mailto:greenvoyag@gmail.com">greenvoyag@gmail.com</a>
				<a href="tel:+351929124623" rel="nofollow">+ 351 929 124 623<img src="https://download.logo.wine/logo/WhatsApp/WhatsApp-Logo.wine.png" ></a>
			</div>
			<div class="flags">
				  <?php if(pll_current_language()=='ru'){?>
                        <a href="pt">
                          	<img class=" active" width="40px" src="<?php echo get_template_directory_uri() . '/assets/images/pt-circle-01-64.png'; ?>">  
                        </a>
					
                        <?php
                                                              }
                        if(pll_current_language()=='pt'){
                        ?>
                        <a href="../">
                        <img class=" active" width="40px" src="<?php echo get_template_directory_uri() . '/assets/images/ru-circle-01-64.png'; ?>">
                        </a>
						
                        <?php
                        }
                        ?>
			
			</div>
		</div>
		<header
			class="flex lg:flex-row flex-row-reverse items-center justify-between fixed w-full z-30 shadow-md p-4 font-bold duration-300">
			<div class="block lg:hidden cursor-pointer burger relative z-40">
				<span class="block h-1 w-5 mb-1 rounded-md bg-[#31405b]"></span>
				<span class="block h-1 w-5 mb-1 rounded-md bg-[#31405b]"></span>
				<span class="block h-1 w-5 rounded-md bg-[#31405b]"></span>
			</div>
			<div class="md:flex hidden gap-6">
				<a href="mailto:greenvoyag@gmail.com">greenvoyag@gmail.com</a>
				<a href="tel:+351929124623" style="display:flex;flex-direction: row-reverse;">+ 351 929 124 623 <img src="https://download.logo.wine/logo/WhatsApp/WhatsApp-Logo.wine.png" style="
    width: 40px;
    margin-left: 10px;
"></a>
			</div>
			<div><a href="https://greenvoyage.pt/"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo"></a></div>
			<nav class="lg:block hidden">
				<?php if($_GET['lang']=="pt"){ ?>
<ul class="flex items-center gap-4">
					<li class="header-link ">
						<a href="https://greenvoyage.pt/">Inicio</a>
					</li>
					<li class="header-link scroll-link">
						<a href="#tours">Excursões</a>
					</li>
					<li class="header-link scroll-link">
						<a href="#about">Sobre nós</a>
					</li>
					<li class="header-link scroll-link">
						<a href="#services">Serviços</a>
					</li>
					<div class="flags cursor-pointer">
                        <?php if(pll_current_language()=='ru'){?>
                        <a href="pt">
                          	<img class="port active" width="40px" src="<?php echo get_template_directory_uri() . '/assets/images/pt-circle-01-64.png'; ?>">  
                        </a>
					
                        <?php
                                                              }
                        if(pll_current_language()=='pt'){
                        ?>
                        <a href="../">
                        <img class="port active" width="40px" src="<?php echo get_template_directory_uri() . '/assets/images/ru-circle-01-64.png'; ?>">
                        </a>
						
                        <?php
                        }
                        ?>
					</div>
				</ul>


				<?php }else{ ?>
				<ul class="flex items-center gap-4">
					<li class="header-link ">
						<a href="https://greenvoyage.pt/"><?php 	pll_e( 'Главная' );?></a>
					</li>
					<li class="header-link scroll-link">
						<a href="#tours"><?php 	pll_e( 'Экскурсии' );?></a>
					</li>
					<li class="header-link scroll-link">
						<a href="#about"><?php 	pll_e( 'О нас' );?></a>
					</li>
					<li class="header-link scroll-link">
						<a href="#services"><?php 	pll_e( 'Услуги' );?></a>
					</li>
					<div class="flags cursor-pointer">
                        <?php if(pll_current_language()=='ru'){?>
                        <a href="pt">
                          	<img class="port active" width="40px" src="<?php echo get_template_directory_uri() . '/assets/images/pt-circle-01-64.png'; ?>">  
                        </a>
					
                        <?php
                                                              }
                        if(pll_current_language()=='pt'){
                        ?>
                        <a href="../">
                        <img class="port active" width="40px" src="<?php echo get_template_directory_uri() . '/assets/images/ru-circle-01-64.png'; ?>">
                        </a>
						
                        <?php
                        }
                        ?>
					</div>
				</ul>
			<?php } ?>
			</nav>
		</header>