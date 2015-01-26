<?php get_header(); ?>
<section class="main-page">
    <div class=" row contenedor">        
        <div class="single col-md-10">  
     
            <h2>Resultados de la búsqueda</h2>     
            <!-- Inicio del loop de WordPress -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="panel panel-default">
                <div class="title-search panel-heading">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="panel-body">
                    <!-- Muestra la fecha de publicación, el autor y las etiquetas del post -->
                    <small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?> <span> |  <?php the_tags('Etiquetas: ', ', ', ''); ?></span> </small>
                        <!-- Mostrar la imagen destacada de la entrada -->
                    <?php
                        if ( has_post_thumbnail() ) { // comprobar si el post tiene un thumbnail.
                                        the_post_thumbnail();
                        }
                    ?>
                    <!-- Muestra el extracto de la entrada -->
                    <?php the_excerpt(); ?>
                </div>
            </div>
             
            <?php endwhile; ?>
            <!-- Aquí insertamos nuestro código para la paginación -->
            <?php  else: ?>
                <?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?>
            <?php endif; ?>

        </div><!-- end of wrapper-->
        <div class="sidebar col-md-2">    
            <div class="sidebar-content">
                <?php  get_sidebar()?>
            </div>
        </div>    
    </div> 

</section>
<?php get_footer(); ?>


