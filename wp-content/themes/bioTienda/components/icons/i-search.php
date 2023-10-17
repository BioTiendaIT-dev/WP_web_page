<?php
try {
    //code...
    if (isset($args['classes'])) {
        $classes = $args['classes'];
    }
} catch (\Throwable $th) {
    //throw $th;
    $classes = '';
}
?>
<button type="button" id="search-btn" class="relative my-auto <?= $classes ?>">
    <iconify-icon class="flex mt-auto text-3xl text-green-dark" icon="iconamoon:search-duotone"></iconify-icon>
</button>