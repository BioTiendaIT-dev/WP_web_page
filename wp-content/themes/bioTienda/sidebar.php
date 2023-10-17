<?php

?>
<?php
if (!is_singular('product')) :
?>
    <section id="side_col_categories" class="col-span-1">
        <div id="side-bar-content" class="transition-all duration-700 lg:sticky fixed bg-white w-full -bottom-[63%] left-0 lg:top-64 pt-11 pb-24 border-green border-t-2 lg:py-0 lg:my-auto flex flex-col items-center">
            <h3 class="pt-10 text-2xl font-bold transition-all duration-75 mb-7 text-green-dark ">Categorias:</h3>
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
        <?= get_template_part(COMPONENTS . 'buttons/btn', 'filterCategories') ?>
    </section>
<?php endif; ?>