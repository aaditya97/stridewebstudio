<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elvinaa
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="blog-wrapper">
            <div class="cat">
                <div class="circle-ripple">
                  <div class="dot"></div>
                </div>
                <div class="cat-name">
                    <?php the_category(); ?>
                    <?php
                        if(is_sticky()){
                            ?>                                        
                                <span class="meta-item">
                                    <i class="fa fa-thumb-tack"></i><?php _e('Sticky Post','elvinaa') ?>
                                </span> 
                            <?php       
                        }                                
                    ?>  
                </div>
            </div>
            <div class="title-date">
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <p class="date"><?php the_time(get_option('date_format')) ?></p>
            </div>
            <div class="post-image">
                <?php
                    if ( has_post_thumbnail()) {
                        ?>
                            <div class="image">
                                <?php
                                    the_post_thumbnail('full');
                                ?>
                            </div>                      
                        <?php                    
                    }                   
                ?>
            </div>
            <?php
                if ( has_post_thumbnail()) {
                    ?>
                        <div class="author-image">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ) , 128 ); ?>
                            <h6>
                                <a class="author-post-url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php esc_attr(the_author()) ?>
                                </a>
                            </h6>
                        </div>
                    <?php
                }
                else{
                    ?>  
                        <div class="author-whitespace">
                        </div>
                    <?php
                }
            ?>            
            <div class="meta">
                <span class="comments">
                    <i class="fa fa-comments-o"></i>
                    <a class="post-comments-url" href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%'); ?> <?php _e('Comments','elvinaa'); ?>
                    </a>
                </span>
                <?php
                    if ( ! has_post_thumbnail() && is_single()) {
                        ?>
                            <span class="author-no-image">
                                <i class="fa fa-user"></i>
                                <a class="author-post-url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author() ?>
                                </a>
                            </span>
                        <?php
                    }
                ?>
                <span class="share">
                    <a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php _e('Share on Facebook','elvinaa') ?>"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/intent/tweet/?text=<?php the_permalink() ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php _e('Share on Twitter','elvinaa') ?>"><i class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php _e('Share on Google Plus','elvinaa') ?>"><i class="fa fa-google-plus"></i></a>
                    <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php _e('Share on Pinterest','elvinaa') ?>"><i class="fa fa-pinterest"></i></a>
                </span>
            </div>
            <div class="content">
                <p>
                    <?php
                        if(is_single()){
                            the_content();
                        }
                        else{
                            the_excerpt();  
                        }
                    ?>
                </p>
            </div>
            <?php 
                if(!is_single()){
                    ?>
                        <div class="read-more">
                            <a href="<?php the_permalink() ?>"><?php _e('CONTINUE READING ... ','elvinaa'); ?></a>
                        </div>
                    <?php
                }
            ?>

            <?php 
                if(is_single()){
                    ?>
                        <div class="post-tags">
                            <?php the_tags(); ?>
                        </div>
                    <?php
                }
            ?>
        
            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links">' . __( 'Pages:', 'elvinaa' ),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ) );
            ?>        
        </div>
    </article>