<section class="section-padding accordion">
    <div class="container">
        <div class="section__upper">
            <h2><?php echo get_field('title'); ?></h2>
        </div>
        <div class="accordion__container">
            <ul class="accordion__list">
                <?php while(have_rows('accordion')): the_row(); ?>
                <li class="accordion__item">
                    <h3 class="accordion__heading js-accordion-heading">
                        <?php echo get_sub_field('title'); ?>
                        <span></span>
                    </h3>
                    <div class="accordion__content js-accordion-content">
                        <?php echo get_sub_field('content'); ?>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>