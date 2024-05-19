<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Green_Voyage
 * @since Green_Voyage 1.0
 */

?>
		<footer
			class="flex sm:flex-row flex-col gap-5 sm:items-center items-start justify-between mt-6 md:mt-20 py-10 shadow-md px-4 bg-white">
			<div>© 2019 GREEN VOYAGE</div>
			<div class="flex items-center space-x-3"> 
    <a href="https://www.youtube.com/@greenvoyage853"> 
    
     <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
      xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 461.001 461.001" xml:space="preserve"> 
      <g> 
       <path style="fill:#F61C0D;" d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728 
          c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137 
          C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607 
          c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z" /> 
      </g> 
     </svg> 
    </a> 
    <span>Green Voyage</span> 
   </div>
			<div>
<?php  if(pll_current_language()=='pt'){ ?>
 <a class="hover:text-sky-500 duration-500" href="./politica-e-privacidade"><?php   pll_e( 'Политика и конфедициальность' );?></a></div>

<?php  }else{  ?>
            <a class="hover:text-sky-500 duration-500" href="./политика-и-конфедициальность"><?php 	pll_e( 'Политика и конфедициальность' );?></a></div>
<?php  } ?>


		</footer>
	</div>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/assets/js/script.js'; ?>"></script>
<?php wp_footer(); ?>
</body>

</html>

