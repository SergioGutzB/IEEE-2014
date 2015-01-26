<?php
/*
Template Name: IEEE
*/
?>


<?php get_header(); ?>
 <section class="main-page">
 	<div class="img-page"> 
	 	<?php	 		
	 		$img = get_post_custom_values("banner");
	 		
	 		if ($img[0] != "")	{ 		
	 			echo "<img src='$img[0]'>";	 			
	 		}
	 	?>
 	</div>

 	<?php include ('wp-content/themes/IEEE/' . '/breadcrumbs.php'); ?>

 	<div class=" row contenedor">        
        <!-- loop de Noticias -->
        <div class="single col-md-10 col-md-10 col-xs-7">				 	
			<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
				<div class="page-title"><?php the_title(); ?></div><br>
				<?php the_content(); ?>
				<?php the_time('F jS, Y') ?>
			</br>
			<?php endwhile; else: ?>
				<h2>No encontrado</h2>
				<p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
				<br>
				<br>
			 <?php endif; ?>
		 </div><!-- end of wrapper-->
        <div class="sidebar col-md-2">    
            <div class="sidebar-content">
                <?php  get_sidebar()?>
            </div>
        </div>  
    	
		 <?php get_footer(); ?>	 
    </div>
    
</section>
</body>	
</html>