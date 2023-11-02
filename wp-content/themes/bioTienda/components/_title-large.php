<?php
$title = $args['title'];
$ContainerClasses = '';
isset($args['containerClasses'])? $ContainerClasses = $args['containerClasses'] : '';
if(!isset($title) || $title == ''){
    $title = 'no hay title';
}
?>
<div class="p-11 lg:p-4 lg:pt-0 <?= $ContainerClasses ?>">
    <div class="flex flex-row items-center justify-center mx-auto w-60">
        <div class="h-[1px] w-full bg-green"></div>
        <img class="px-5 max-h-16" src="<?= ISOLOGOURL ?>" alt="">
        <div class="h-[1px] w-full bg-green"></div>
    </div>
    <h2 class="text-3xl italic font-bold text-center text-green-dark"><?= $title ?></h2>
</div>
<!-- --------------- End Title -->