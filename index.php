<?php get_header(); ?>

<?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
            echo '<h2 class="header-logo__est">Колдуем над страницей...</h2>';
        endif;
        ?>

<?php
get_footer();
