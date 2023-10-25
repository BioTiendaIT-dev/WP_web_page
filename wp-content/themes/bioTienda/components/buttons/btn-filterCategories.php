<?php
$args = [
    'classes' => 'mx-auto text-green-dark w-fit h-fit p-4 border-2 bg-white border-green rounded-full ',
    'id' => 'search_mobile'
]
?>
<nav class="fixed bottom-0 left-0 flex w-full pb-8 lg:hidden">
    <?= get_template_part(COMPONENTS . 'icons/i', 'search', $args) ?>
</nav>