<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fairy
 */

get_header();
global $fairy_theme_options;
?>

    <main class="site-main">
        <section class="single-section sec-spacing">
            <div class="container">
                <?php
                $sidebar_options = esc_attr($fairy_theme_options['fairy-sidebar-single-page']);
                $sidebar_class = '';
                if ($sidebar_options == 'left-sidebar') {
                    $sidebar_class = 'row-inverse-md';
                } elseif ($sidebar_options == 'no-sidebar') {
                    $sidebar_class = 'row-full-width';
                } elseif ($sidebar_options == 'middle-column') {
                    $sidebar_class = 'row-center-col';
                }
                ?>
                <div class="row <?php echo esc_attr($sidebar_class); ?>">
                    <div id="primary" class="col-1-1 col-md-2-3">

                        <?php do_action('fairy_breadcrumb'); ?>

                        <?php
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content-single', get_post_type());


                            the_post_navigation(
                                array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'fairy') . '</span> <span class="nav-title">%title</span>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'fairy') . '</span> <span class="nav-title">%title</span>',
                                )
                            );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number())  :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                    <?php
                    if (($sidebar_options == 'left-sidebar') || ($sidebar_options == 'right-sidebar')) {
                        ?>
                        <div id="secondary" class="col-12 col-md-1-3 col-lg-1-3">
                            <?php get_sidebar(); ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();
