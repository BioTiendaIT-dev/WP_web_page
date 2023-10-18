<?php
$args = [
    'classes' => 'mx-auto text-green-dark w-fit h-fit p-4 border-2 bg-white border-green rounded-full ',
    'id' => 'search_mobile'
]
?>
<nav class="fixed bottom-0 left-0 z-50 flex flex-col w-full px-4 pb-6 lg:hidden">
    <div id="searchbar-mobile" class="relative hidden transition-all duration-500 translate-y-full opacity-0">
        <?php get_search_form() ?>
    </div>
    <?= get_template_part(COMPONENTS . 'icons/i', 'search', $args) ?>
</nav>