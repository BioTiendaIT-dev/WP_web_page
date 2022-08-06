<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open() ?>

    <nav>
    <?php wp_nav_menu(array(
        'theme_location' => 'top_menu',
        'container' => 'nav',
        'menu_class' => 'list-none inline-flex flex-row',
        'container_class' => 'w-full'
    )) ?>
    </nav>