<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="relative w-full mt-3 mb-auto ml-auto text-green-dark">
    <label for="search"></label>
    <input type="search" class="w-full px-5 py-3 border text-green-dark uc_searchForm rounded-2xl border-green-dark" placeholder="¿Qué producto buscas?" name="s" id="search" value="<?= get_search_query(); ?>" />
    <!-- <input type="image" alt="Search" src="<?php // bloginfo('template_url'); 
                                                ?>/images/search.png" /> -->
</form>