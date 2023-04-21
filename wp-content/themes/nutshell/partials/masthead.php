<header class="masthead">
    <div class="container">
        <?php if($subheading = get_field('subheading')): ?>
        <h5 class="masthead__subheading">
            <?php echo $subheading; ?>
        </h5>
        <?php endif; ?>
        <?php if ( is_search() ): ?>
            <h3 class="h1 masthead__maintitle">Search Results</h3><?php /* different heading type for SEO benefit */ ?>
        <?php elseif ( is_home() ): ?>
            <h3 class="h1 masthead__maintitle">Blog</h3><?php /* different heading type for SEO benefit */ ?>
        <?php elseif ( is_404() ) : ?>
            <h1 class="masthead__maintitle"><?php the_field('404_title', 'option'); ?></h1>
        <?php else : ?>
            <h1 class="masthead__maintitle"><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if($description = get_field('description')): ?>
            <div class="line-separator"></div>
            <div class="masthead__description">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>

        <?php
            if( function_exists( 'yoast_breadcrumb' ) ) {
                yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
            }
        ?>
    </div>
</header>
