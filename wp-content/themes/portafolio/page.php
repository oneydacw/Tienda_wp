<?php get_header() ; ?>
<main class='container'>
    <?php if(have_posts()){ 
            while(have_posts()) { //si hay algo adiccional para mostrar en la pag.
            the_post(); ?> 
            <h1 class= 'my-3'><?php the_title(); ?></h1>

            <?php the_content(); //mostrar el bloque de texto de la pag. ?> 

        <?php }
    }?>
</main>

<?php get_footer(); ?>