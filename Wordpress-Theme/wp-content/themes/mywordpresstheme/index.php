<?php get_header(); #Inclu le template partiel header.php ?>
	<div class="container" style="margin-top: 30px">
        <div class="row">
            <section class="col-sm-8">
                <!--<h2><?/*= bloginfo('description') */?></h2>-->
                <div id="page">
                    <?php get_template_part('loop') ?>
                </div>
            </section>
            <?php  get_sidebar() ?>
        </div>
    </div>
<?php get_footer(); ?>
<!--  http://wphierarchy.com -->
