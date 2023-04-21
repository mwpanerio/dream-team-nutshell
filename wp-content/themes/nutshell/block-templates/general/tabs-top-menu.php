<section class="section-padding tab-top-menu">
    <div class="container">
        <div class="tab-top-menu__upper">
            <?php $tab_count = 0; while(have_rows('tabs')): the_row(); ?>
                <button <?php echo $tab_count == 0 ? 'class="is-active"' : ''; ?> data-tab-target="#js-<?php echo str_replace(' ', '-', strtolower(get_sub_field('tab_title'))); ?>"><?php echo get_sub_field('tab_title'); ?></button>
            <?php $tab_count++; endwhile; ?>
        </div>
        <?php $tab_content = 0; while(have_rows('tabs')): the_row(); ?>
        <div class="tab-top-menu__lower" id="js-<?php echo str_replace(' ', '-', strtolower(get_sub_field('tab_title'))); ?>"<?php echo $tab_content == 0 ? ' style="display: none;"' : ''; ?>>
            <div class="tab-top-menu__content">
                <?php while(have_rows('tab_content')): the_row(); ?>
                <div class="tab-top-menu__content__item">
                    <div class="tab-top-menu__content__box">
                        <?php if(get_sub_field('most_popular')): ?>
                            <div class="tab-top-menu__popular">MOST POPULAR</div>
                        <?php endif; ?>
                        <?php echo fx_get_image_tag(get_sub_field('logo_image')); ?>
                        <?php echo get_sub_field('description'); ?>
                        <h3>$<?php echo get_sub_field('price'); ?> <span>per user per month</span></h3>
                        <div class="line-separator"></div>
                        <?php if(get_sub_field('list_heading')): ?>
                        <p><strong><?php echo get_sub_field('list_heading'); ?></strong></p>
                        <?php endif; ?>
                        <ul class="checklist">
                            <?php while(have_rows('checklist')): the_row(); ?>
                                <li><?php echo get_sub_field('item'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <a href="#compare-plans" class="btn btn--bg-orange">
                            <strong>Compare Plans</strong>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php $tab_content++; endwhile; ?>
    </div>
</section>