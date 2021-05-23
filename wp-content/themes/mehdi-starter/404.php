<?php get_header(); ?>
<?php wp_head(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php _e( 'Page Not Found' , 'mehdi-starter' ); ?></h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_half nobottommargin">
                <div class="error404 center">404</div>
            </div>

            <div class="col_half nobottommargin col_last">

                <div class="heading-block nobottomborder">
                    <h4><?php _e( "Ooopps! The Page you were looking for, couldn't be found.", 'mehdi-starter' ); ?></h4>
                    <span><?php _e( "Try searching for the best match or browse the links below:", 'mehdi-starter' ); ?></span>
                </div>
                <?php get_search_form(); ?>
            </div>

        </div>

    </div>

</section><!-- #content end -->

<?php wp_footer(); ?>s
<?php get_footer(); ?>