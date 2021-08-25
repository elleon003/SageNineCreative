<?php get_header(); ?>

<div class="container h-full pt-24 px-8 lg:px-24 xl:px-32"> 
    <h2 class="pb-8 text-center"><?php the_title(); ?></h2>
    <img src="http://pinegrow.com/placeholders/img10.jpg" class="mx-auto my-8 w-full md:w-2/3"/> 
    <?php the_content(); ?> 
</div>                         

<?php get_footer(); ?>