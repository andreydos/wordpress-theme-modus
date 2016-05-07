<?php get_header(); ?>
<section id="post">
    <div class="container-fluid post__top-header">
        <div class="container">
            <div class="post__blog">BLOG
                <div class="post__top-header-triangle"></div> <!-- decorative triangle -->
            </div>
            <div class="post__breadcrumps">Home / Blog</div>
        </div>
    </div>

    <div class="container post__content">
        <row class="post__header">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-1">
                <div class="post-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
            </div>
            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-12">
                        <h1 class="post__title"><?php the_title(); ?></h1>
                    </div>

                    <div class="col-md-12 post-details">
                        <div class="post__date">
                            <?php the_time('d M Y') ?>,
                        </div>
                        <div class="post__author">
                            Posted by <span><?php $author_id=$post->post_author;
                                        echo the_author_meta( 'user_nicename' , $author_id ); ?></span> in <span>Wordpress</span>
                        </div>
                        <div class="post__tags">
                            <span><i class="fa fa-tags" aria-hidden="true"></i><?php the_category(', ') ?></span>
                        </div>
                        <div class="post__comment-count">
                            <span><i class="fa fa-comments" aria-hidden="true"></i><?php comments_popup_link('No Comments', '1', '%'); ?></span>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-12">
                <div class="post__post-img">
                    <?php if(has_post_thumbnail()){ the_post_thumbnail('single-page-img'); }  ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 post__content-inner-text">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 post__footer">
                <div class="post__footer-share">
                    <span>SHARE</span>
                    <a href="#" class="post__share btn btn-facebook"><i class="fa fa-facebook fa-inverse" aria-hidden="true"></i></a>
                    <a href="#" class="post__share btn btn-twitter"><i class="fa fa-twitter fa-inverse" aria-hidden="true"></i></a>
                    <a href="#" class="post__share btn btn-gplus"><i class="fa fa-google-plus fa-inverse" aria-hidden="true"></i></a>
                    <a href="#" class="post__share btn btn-linkedin"><i class="fa fa-linkedin fa-inverse" aria-hidden="true"></i></a>
                </div>
                <div class="post__footer-nav">
                    <?php previous_post_link(); ?>
                    <?php next_post_link(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php comments_template(); ?>
            </div>
        </div>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>

</section>
<?php get_footer(); ?>