<?php
try {
    //code...
    if (isset($args['classes'])) {
        $classes = $args['classes'];
    }
    if (isset($args['id'])) {
        $id = $args['id'];
    }
} catch (\Throwable $th) {
    //throw $th;
    $classes = '';
    $id = '';
}
?>
<button type="button" id="<?= $id ?>" class="search-btn relative my-auto <?= $classes ?>">
    <iconify-icon class="flex mt-auto text-3xl text-green-dark" icon="iconamoon:search-duotone"></iconify-icon>
</button>