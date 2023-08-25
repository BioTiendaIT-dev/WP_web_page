<?php
// Obtener el número de productos en el carrito
$cart_count = WC()->cart->get_cart_contents_count();
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
<a class="relative my-auto <?= $classes ?>" href="<?php echo wc_get_cart_url() ?>">
    <div class="absolute flex items-center justify-center w-5 h-5 text-sm rounded-full left-5 bottom-2/3 bg-green">
        <span class="m-auto -mt-[1px] font-bold text-green-dark"><?= $cart_count ?></span>
    </div>
    <iconify-icon class="flex mt-auto text-3xl text-green-dark" icon="el:shopping-cart"></iconify-icon>
</a>