<section class="section-padding table-compare" id="compare-plans">
    <div class="container">
        <div class="section__upper">
            <h2><?php echo get_field('title'); ?></h2>
            <?php echo get_field('description'); ?>
        </div>
        <div class="table-compare__row">
            <div class="table-compare__row__upper hidden-xs-down">
                <div class="table-compare__row__upper__item"></div>
                <div class="table-compare__row__upper__item">
                    <img src="/wp-content/uploads/2022/12/nutshell-logo.png" alt="">
                </div>
                <div class="table-compare__row__upper__item">
                    <img src="/wp-content/uploads/2022/12/nutshell-pro-logo.png" alt="">
                </div>
            </div>
            <?php while(have_rows('features')): the_row(); ?>
            <div class="table-compare__item">
                <h3 class="table-compare__item__heading"><?php echo get_sub_field('title'); ?></h3>
                <ul>
                    <?php while(have_rows('feature_list')): the_row(); ?>
                    <li class="table-compare__item__row">
                        <div class="table-compare__item__row__item">
                            <p>
                                <span><?php echo get_sub_field('text'); ?></span>
                                <?php if($tooltip = get_sub_field('tooltip')): ?>
                                <span class="tooltip">
                                    <img src="/wp-content/uploads/2022/12/info-button.svg" alt="">
                                    <span class="tooltip__content"><?php echo $tooltip; ?></span>
                                </span>
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="table-compare__item__row__item">
                            <img src="/wp-content/uploads/2022/12/nutshell-logo.png" alt="" class="table-compare__logo hidden-sm-up">
                            <?php if(get_sub_field('included_in_nutshell')): ?>
                                <img src="/wp-content/uploads/2022/12/icon-checklist.png" alt="">
                            <?php else: ?>
                                <img src="/wp-content/uploads/2022/12/icon-wrong.svg" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="table-compare__item__row__item">
                            <img src="/wp-content/uploads/2022/12/nutshell-pro-logo.png" alt="" class="table-compare__logo hidden-sm-up">
                            <?php if(get_sub_field('included_in_nutshell_pro')): ?>
                                <img src="/wp-content/uploads/2022/12/icon-checklist.png" alt="">
                            <?php else: ?>
                                <img src="/wp-content/uploads/2022/12/icon-wrong.svg" alt="">
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>