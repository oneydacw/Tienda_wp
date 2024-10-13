
<?php get_header(); //referencia entradas de blog y postype 
 ?>
<main class='container my-3'>
    <?php if(have_posts()){
      //loop 

      //mostrar toda  la inf. que hay
    while(have_posts()){
            the_post();
        ?>
       
        <h1 class='my-5'><?php the_title()  //mostrar la imagen y la descp. ?></h1>
        <div class="row">
            <div class="col-4">
                <?php the_post_thumbnail('large'); //tamaño de la img?>
            </div>
            <div class="col-8">
                <?php the_content(); ?>
            </div>
            <div class="col-8">
            <button type="button" class="btn btn-primary btn-sm">Comprar</button>
            <button type="button" class="btn btn-secondary btn-sm">Añadir a lista de deseos</button>
            </div>
        </div>

        <?php
    } 
    }?>

</main>


<?php get_footer(); ?>
