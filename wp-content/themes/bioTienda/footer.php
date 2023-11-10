<footer class="flex flex-col justify-around py-16 text-white lg:flex-row m-ext bg-green-dark">
    <ul>
        <li class="mb-5">
            <h3 class="text-xl font-bold">Información de contacto</h3>
        </li>
        <li class="mt-8">
            <h4 class="text-base font-bold">Dirección</h4>
            <p class="max-w-[260px]"><?= DIRECCION ?></p>
        </li>
        <li class="mt-5">
            <h4 class="text-base font-bold">Télefono / Whatsapp</h4>
            <a href="https://wa.me/<?= WHATS ?>?text=Hola!"><?= WHATS_IMPRIMIBLE ?></a>
        </li>
        <li class="mt-8">
            <h4 class="text-base font-bold">Email</h4>
            <a href="mailto:=<?= EMAIL ?>?subject=Hola!&body=Estoy interezado en"><?= EMAIL ?></a>
        </li>
        <li class="mt-8">
            <h4 class="text-base font-bold">Horarios de atención</h4>
            <p><?= HORARIO_DIAS ?> <?= HORARIO_HORAS ?></p>
        </li>
    </ul>
    <ul class="mt-12 lg:ml-5 lg:mt-0">
        <li class="mb-5">
            <h3 class="text-xl font-bold">Menú</h3>
        </li>
        <li>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu_one',
                'container' => 'nav',
                'menu_class' => 'list-none flex flex-col text-base',
                'container_class' => 'inline-block mx-auto',
            ))
            ?>
        </li>
        <!-- <li class="mt-1 lg:mt-3 hover:text-green hover:font-semibold"><a href="">Nosotros</a></li>
        <li class="mt-1 lg:mt-3 hover:text-green hover:font-semibold"><a href="">Blog</a></li>
        <li class="mt-1 lg:mt-3 hover:text-green hover:font-semibold"><a href="">bioTienda</a></li>
        <li class="mt-1 lg:mt-3 hover:text-green hover:font-semibold"><a href="">Salud funcional</a></li>
        <li class="mt-1 lg:mt-3 hover:text-green hover:font-semibold"><a href="">Contacto</a></li> -->
    </ul>
    <ul class="mt-12 lg:ml-5 lg:mt-0">
        <li class="mb-5">
            <h3 class="text-xl font-bold">Productos</h3>
        </li>
        <li>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu_two',
                'container' => 'nav',
                'menu_class' => 'list-none flex flex-col text-base',
                'container_class' => 'inline-block mx-auto',
            ))
            ?>
        </li>
    </ul>
    <ul class="mt-12 lg:mt-0">
        <li class="mb-5">
            <h3 class="text-xl font-bold">Rastrea tu pedido</h3>
        </li>
        <li>
            <form action="" class="flex flex-col mt-3">
                <label for="numeroGuia">Numero de guía</label>
                <input class="w-full px-4 py-2 bg-transparent border-2 rounded-xl" type="text" name="numeroGuia" id="numeroGuia">
                <button class="px-8 py-4 mx-auto mt-5 text-lg font-semibold text-green-dark bg-green">Rastrea tu pedido</button>
            </form>
        </li>
        <li class="mt-10">
            <img width="80%" class="mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/envios.png" alt="envios icon">
        </li>
    </ul>
</footer>
<div class="flex flex-row my-2 text-gray-500 bg-white m-ext "><span class="mx-auto">Diseñado por <a href=""> Karol </a> Desarrollado por <a href=""> Luane </a> | copyright 2022</span></div>
<?php wp_footer() ?>
</body>

</html>