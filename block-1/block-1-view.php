<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'cp-img-text-cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cp-img-text-cta';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and handle defaults.
$image = get_field('image') ?: 295;
$title = get_field('title') ?: 'Your title';
$text = get_field('text') ?: 'Your text';
$cta = get_field('cta') ?: 'Your cta';

?>

<div id="<?= esc_attr( $id ) ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <!-- Image -->
        <div class="illust">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="content">
            <!-- Titre -->
            <h3 class="title">
                <?php echo $title; ?>
            </h3>
            <!-- Texte -->
            <p class="text">
                <?php echo $text; ?>
            </p>
            <!-- Bouton -->
            <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>" class="btn">
                <?php echo $cta['title']; ?>
            </a>
        </div>
    </div>
</div>