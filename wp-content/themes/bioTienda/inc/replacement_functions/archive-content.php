<?php
function bt_woocommerce_output_all_notices()
{
    echo '<div class="flex woocommerce-notices-wrapper">';
    wc_print_notices();
    echo '</div>';
}
?>