<div class="container toys">
    <h2 class="subtitle"><?php the_title(); ?></h2>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
            
            <?php the_content(); ?>
        </div>
    </article>
</div>
