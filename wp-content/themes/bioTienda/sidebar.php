<?php

?>
            <?php
            if(!is_singular('product')):
            ?>
<section id="side_col_categories" class="col-span-1">
    <div id="side-bar-content" class="transition-all duration-700 lg:sticky fixed bg-white w-full -bottom-[63%] left-0 lg:top-20 pt-11 pb-24 border-green border-t-2 lg:py-0 lg:my-auto flex flex-col items-center">
        <h3 class="text-2xl font-bold transition-all pt-10 duration-75 mb-7 text-green-dark ">Categorias:</h3>
        <ul id="categories" class="">
            <?php
            $args = [
                'taxonomy' => 'product_cat',
                'orderby' => 'parent',
                'hide_empy' => false,
                'title_li' => '',
            ];
            wp_list_categories($args); ?>
        </ul>
    </div>
    <nav class="flex lg:hidden w-full fixed bottom-0 left-0 pb-5">
        <button id="filter-col-button" class="text-green-dark w-fit h-fit mx-auto">
            <iconify-icon class="rounded-full bg-white border-2 border-green p-5" icon="ci:filter"></iconify-icon>
        </button>
    </nav>
</section>
<?php endif; ?>