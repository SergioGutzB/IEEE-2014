<?php get_header(); ?>
<section class="main-page">
	<table class="contenedor">	
		<tr>
			<td>  
				<div class="single">
					<h2 >Error 404 - Página no encontrada</h2>
					<p>Vaya, parece que este contenido no ha sido encontrado en la web.<br>
						Puedes ayudarnos llenando el siguiente formulario.<hr>
						<?php echo do_shortcode('[contact-form-7 id="33" title="404"]'); ?>
					</p>
				</div>
			</td>
            <!-- <td class="tbl-sidebar">    
                <div class="sidebar-content">
                    <?php  get_sidebar()?>
                </div>
            </td> -->
        </tr>
    </table>
    
</section>
<?php get_footer(); ?>