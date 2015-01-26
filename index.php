 <?php get_header(); ?>
 <script type="text/javascript">
 	$(window).load(function(){   
 		$('#post').masonry({
 			itemSelector: '.post',
 		});    
 	});
 </script>
 
 <section class="main" > 	
 	<div class="video-2">				   
 		<img id="" src="http://ieee.udistrital.edu.co/wp-content/uploads/2014/12/PortadaNavidadRama.jpg" style="width:100%;">
 	</div>
 	<div class=" row contenedor con-all">	
 		<hr>	
 		<!-- loop de Noticias -->
 		<div class="contenedor-post col-md-10 col-xs-7">
 			<div id="post">	
 				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>	
 					<div class="post"> 						
 						<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
 						<div class="miniatura" >
 							<a href="<?php the_permalink() ?>">
 								<img src="<?php $values = get_post_custom_values("miniatura"); echo $values[0]; ?>" alt="<?php the_title(); ?>">
 							</a>
 						</div>		
 						<div class="text">
 							<?php the_excerpt(); ?>
 							<p>
 								<small class="postdate"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2014/03/date.png" /> <?php the_time('F jS, Y') ?>				
 								</small>
 								<a class="leer-mas" href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon-arrow-right"></span></a>
 							</p>
 						</div>									
 					</div>
 				<?php endwhile; else: ?>
 				<p><?php _e('No hay entradas .'); ?></p>
 			<?php endif; ?>					
 		</div>
 	</div>	
 	<!-- Sidebar -->	
		<!-- <div id="post" >
			<div class="sidebar col-md-2 col-sm-2">	
				<div class="sidebar-content">
					<?php  get_sidebar()?>
				</div>
			</div>			
		</div> -->
		<div id="footer">	
			<?php get_footer(); ?>	
		</div>		 
	</div>
	
</section> <!-- Fin de main -->

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.form.min.js"></script>    
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.52674.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.masonry.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/gnmenu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>

</body>
</html>










