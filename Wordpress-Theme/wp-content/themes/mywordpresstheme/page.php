<?php
 /*
  * Template Name: page
  */
	get_header(); #Inclu le template partiel header.php
?>
<div class="container" style="margin-top: 30px">
	<div class="row">
		<section class="col-12">
			<!--<h2><?/*= bloginfo('description') */?></h2>-->
			<div id="page">
				<?php get_template_part('loop')?>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>
<!--  http://wphierarchy.com -->
