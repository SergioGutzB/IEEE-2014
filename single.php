<?php get_header(); ?>
<section class="main-page">
    <?php include ('wp-content/themes/IEEE/' . '/breadcrumbs.php'); ?>
    <div class="row contenedor">        
        <!-- loop de Noticias -->
        <div class="single col-md-10 col-md-10 col-xs-7">
            <article>               
                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                    <div> 
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?>. </a></h2>
                        <small class="postdate" style="padding-left:50px;"><img src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('F jS, Y') ?>. Categoría: <?php the_category(', '); ?> </small>                    
                        <br>  
                        <br>            
                        <div> 
                           <?php the_content(); ?>
                       </div>  
                   </div>  
                   <br>  
                   <div><hr></div>                
                   <br>  
               <?php endwhile; ?>                                        
           <?php endif; ?>  
       </article> <!-- Fin de single -->
   </div>
   <div class="sidebar col-md-2">    
    <div class="sidebar-content">
        <?php  get_sidebar()?>
    </div>
</div>      
<?php get_footer(); ?>  
</div>
</section> <!-- Fin de main -->
<!--<?php  get_sidebar()?> -->
</body> 
</html>