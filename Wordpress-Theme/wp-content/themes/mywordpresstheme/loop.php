<?php
if(have_posts()){
	while(have_posts()){
		the_post(); // -- Incrementation automatique
		?>
		<h1>
            <a href="<?= the_permalink()?>"> <?php the_title() ?></a>
            <?php
                if (is_search()){
                    echo 'by ';the_author();
                }
                ?>
        </h1>
        <div>
			<?php if (is_single()) {
			    the_content();
			}else{
			    the_excerpt();
			}?>
        </div>
        <div>
			<?php the_author() ?>  <?php the_date('d/m/Y')  ?>
        </div>
		<?php
	}
}
?>