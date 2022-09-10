<?php

?>
<section id="side_col_categories" class="col-span-1">
    <div class="sticky top-20 my-auto flex flex-col items-center">
        <h3 class="text-2xl font-bold mb-7 text-green-dark ">Categorias:</h3>
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
</section>