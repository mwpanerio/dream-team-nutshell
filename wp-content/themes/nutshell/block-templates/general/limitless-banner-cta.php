<?php
    while(have_rows('background_type')) {
        the_row();
        $top_background = get_sub_field('top'); 
        $bottom_background = get_sub_field('bottom'); 
    }
?>
<section class="limitless-banner bg-top-<?php echo $top_background; ?> bg-bottom-<?php echo $bottom_background; ?>">
    <div class="container">
        <div class="limitless-banner__content">
            <h2 class="h4">Nutshell Limitless</h2>
            <?php if($subheading = get_field('subheading')): ?>
            <p>
                <?php echo fx_get_image_tag(151); ?> <strong><?php echo $subheading; ?></strong>
            </p>
            <?php endif; ?>
            <?php if($description = get_field('description')): ?>
                <?php echo $description; ?>
            <?php endif; ?>
        </div>
    </div>
</section>