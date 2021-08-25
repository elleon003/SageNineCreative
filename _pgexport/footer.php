
</main>         
        <footer class="bg-gray mt-auto"> 
            <div class="container mt-auto mx-auto px-4 text-gray-700"> 
                <div class="py-4 text-sm"> 
                    <div class="flex flex-wrap -mx-4  items-center"> 
                        <div class="px-4 py-2 w-full md:flex-1"> 
                            <p>&copy;  <?php echo date("Y"); ?> <span><a href="<?php echo esc_url( home_url() ); ?>" class="hover:font-bold hover:underline" target="_pg_blank" rel="home"><?php bloginfo( 'name' ); ?></a></span></p> 
                        </div>                         
                        <div class="px-4 py-2 w-full sm:w-auto"> 
                            <a href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'privacy-policy', 'page' ) ) ); ?>" class="hover:font-bold hover:underline"><?php _e( 'Privacy Policy', 'sage_nine_creative' ); ?></a> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </footer>                  
        <?php wp_footer(); ?>
    </body>     
</html>