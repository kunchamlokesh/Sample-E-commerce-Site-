<?php/** * The template for displaying posts in the Image post format. * * @package metro-creativex */?>			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				<?php 					$metro_creativex_posttitle = get_the_title();					$metro_creativex_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );					if(isset($metro_creativex_feat_image[0])):						echo '<div class="img"><img src='.$metro_creativex_feat_image[0].' alt="'.$metro_creativex_posttitle.'"></div>';					endif;					?>				<div class="post_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/pt_image.png);"></div>				<div class="post_content">					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>					<div class="post_date"><?php echo date("d M Y"); ?></div>				</div><!--/post_content-->			</article>