<?php
isset($args['classes']) ? $classes = $args['classes'] : $classes = '';
$classes . 'col-span-1';
?>
<?php
if (!is_singular('product')) :
?>
    <section id="side_col_categories" class="<?= $classes ?> z-50">
        <div id="side-bar-content" class="transition-all border-t-2 border-green lg:border-0 duration-700 lg:sticky fixed bg-white w-full -bottom-[80%] left-0 lg:top-60 pt-8 pb-32 lg:pb-8 lg:my-auto flex flex-col items-center">
            <div id="seach_page_search_bar" class="hidden pb-8 transition-all duration-75 border-b-2 lg:block searchbar_container border-green">
                <?= get_search_form() ?>
            </div>
            <h3 class="pt-10 mt-4 text-2xl font-bold transition-all duration-75 mb-7 lg:mt-0 text-green-dark ">Categorias:</h3>
            <ul id="categories" class="mb-2">
                <?php
                $args = [
                    'taxonomy' => 'product_cat',
                    'orderby' => 'parent',
                    'hide_empy' => false,
                    'title_li' => '',
                ];
                wp_list_categories($args); ?>
            </ul>
            <div id="searchbar-mobile" class="flex w-11/12 pt-4 mx-auto transition-all duration-75 lg:hidden searchbar_container">
                <?= get_search_form() ?>
            </div>
        </div>
        <?= get_template_part(COMPONENTS . 'buttons/btn', 'filterCategories') ?>
    </section>

<?php endif; ?>