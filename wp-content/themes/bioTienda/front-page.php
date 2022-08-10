<?php get_header() ?>
<div class="bt-slider">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
</div>
<?php while (have_posts()) {

    the_post();
    the_content();
} ?>

<?php get_footer() ?>