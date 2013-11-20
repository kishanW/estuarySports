<?php
global $post;
$archive_excerpt = get_theme_option('post_custom_excerpt');
if($archive_excerpt == '0') { $archive_excerpt = '0'; } else if( empty($archive_excerpt) ) { $archive_excerpt = '30'; }

$featcat1 = get_theme_option('side_feat_cat1');
$featcat2 = get_theme_option('side_feat_cat2');
$featcat3 = get_theme_option('side_feat_cat3');
$featcat4 = get_theme_option('side_feat_cat4');
$featcat5 = get_theme_option('side_feat_cat5');
$featcat6 = get_theme_option('side_feat_cat6');
$featcat7 = get_theme_option('side_feat_cat7');
$featcat8 = get_theme_option('side_feat_cat8');
$featcat9 = get_theme_option('side_feat_cat9');
$featcat10 = get_theme_option('side_feat_cat10');

$featcat1_name = get_cat_name($featcat1);
$featcat2_name = get_cat_name($featcat2);
$featcat3_name = get_cat_name($featcat3);
$featcat4_name = get_cat_name($featcat4);
$featcat5_name = get_cat_name($featcat5);
$featcat6_name = get_cat_name($featcat6);
$featcat7_name = get_cat_name($featcat7);
$featcat8_name = get_cat_name($featcat8);
$featcat9_name = get_cat_name($featcat9);
$featcat10_name = get_cat_name($featcat10);

$featcat1_count = get_theme_option('side_feat_cat1_count');
$featcat2_count = get_theme_option('side_feat_cat2_count');
$featcat3_count = get_theme_option('side_feat_cat3_count');
$featcat4_count = get_theme_option('side_feat_cat4_count');
$featcat5_count = get_theme_option('side_feat_cat5_count');
$featcat6_count = get_theme_option('side_feat_cat6_count');
$featcat7_count = get_theme_option('side_feat_cat7_count');
$featcat8_count = get_theme_option('side_feat_cat8_count');
$featcat9_count = get_theme_option('side_feat_cat9_count');
$featcat10_count = get_theme_option('side_feat_cat10_count');

$cat1_count = dez_get_cat_post_count($featcat1);
$cat2_count = dez_get_cat_post_count($featcat2);
$cat3_count = dez_get_cat_post_count($featcat3);
$cat4_count = dez_get_cat_post_count($featcat4);
$cat5_count = dez_get_cat_post_count($featcat5);
$cat6_count = dez_get_cat_post_count($featcat6);
$cat7_count = dez_get_cat_post_count($featcat7);
$cat8_count = dez_get_cat_post_count($featcat8);
$cat9_count = dez_get_cat_post_count($featcat9);
$cat10_count = dez_get_cat_post_count($featcat10);

$icon_name = "";
$icon_time = "";
$icon_comment = '<i class="icon-comment-alt"></i>';

//featcat1
if($featcat1 && $featcat1 != 'Choose a category'):
$my_query1 = new WP_Query('cat='. $featcat1 . '&' . 'offset=' . '&' . 'showposts=' . $featcat1_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat1); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat1); ?>"><a href="<?php echo get_category_link( $featcat1 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat1_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat1_name; ?>" href="<?php echo rtrim( get_category_link( $featcat1 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat1_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc1 = 0; while ($my_query1->have_posts()) : $my_query1->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc1 < 1 ) { ?>

<article class="<?php if( $cat1_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc1; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc1); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>

</div>

</article>

<?php } ?>

<?php $hfc1++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;





//featcat2
if($featcat2 && $featcat2 != 'Choose a category'):
$my_query2 = new WP_Query('cat='. $featcat2 . '&' . 'offset=' . '&' . 'showposts='.$featcat2_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat2); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat2); ?>"><a href="<?php echo get_category_link( $featcat2 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat2_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat2_name; ?>" href="<?php echo rtrim( get_category_link( $featcat2 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat2_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc2 = 0; while ($my_query2->have_posts()) : $my_query2->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc2 < 1 ) { ?>

<article class="<?php if( $cat2_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc2; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc2); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>

</article>

<?php } ?>

<?php $hfc2++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;







//featcat3
if($featcat3 && $featcat3 != 'Choose a category'):
$my_query3 = new WP_Query('cat='. $featcat3 . '&' . 'offset=' . '&' . 'showposts='.$featcat3_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat3); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat3); ?>"><a href="<?php echo get_category_link( $featcat3 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat3_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat3_name; ?>" href="<?php echo rtrim( get_category_link( $featcat3 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat3_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc3 = 0; while ($my_query3->have_posts()) : $my_query3->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc3 < 1 ) { ?>

<article class="<?php if( $cat3_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc3; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft','featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc3); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>

</article>

<?php } ?>

<?php $hfc3++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;



//featcat4
if($featcat4 && $featcat4 != 'Choose a category'):
$my_query4 = new WP_Query('cat='. $featcat4 . '&' . 'offset=' . '&' . 'showposts='.$featcat4_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat4); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat4); ?>"><a href="<?php echo get_category_link( $featcat4 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat4_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat4_name; ?>" href="<?php echo rtrim( get_category_link( $featcat4 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat4_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc4 = 0; while ($my_query4->have_posts()) : $my_query4->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc4 < 1 ) { ?>

<article class="<?php if( $cat4_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc4; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc4); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>
</article>

<?php } ?>

<?php $hfc4++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;




//featcat4
if($featcat5 && $featcat5 != 'Choose a category'):
$my_query5 = new WP_Query('cat='. $featcat5 . '&' . 'offset=' . '&' . 'showposts='.$featcat5_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat5); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat5); ?>"><a href="<?php echo get_category_link( $featcat5 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat5_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat5_name; ?>" href="<?php echo rtrim( get_category_link( $featcat5 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat5_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc5 = 0; while ($my_query5->have_posts()) : $my_query5->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc5 < 1 ) { ?>

<article class="<?php if( $cat5_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc5; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc5); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>
</article>

<?php } ?>

<?php $hfc5++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;




//featcat6
if($featcat6 && $featcat6 != 'Choose a category'):
$my_query6 = new WP_Query('cat='. $featcat6 . '&' . 'offset=' . '&' . 'showposts='.$featcat6_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat6); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat6); ?>"><a href="<?php echo get_category_link( $featcat6 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat6_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat6_name; ?>" href="<?php echo rtrim( get_category_link( $featcat6 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat6_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc6 = 0; while ($my_query6->have_posts()) : $my_query6->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc6 < 1 ) { ?>

<article class="<?php if( $cat6_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc6; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc6); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>
</article>

<?php } ?>

<?php $hfc6++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;






//featcat7
if($featcat7 && $featcat7 != 'Choose a category'):
$my_query7 = new WP_Query('cat='. $featcat7 . '&' . 'offset=' . '&' . 'showposts='.$featcat7_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat7); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat7); ?>"><a href="<?php echo get_category_link( $featcat7 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat7_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat7_name; ?>" href="<?php echo rtrim( get_category_link( $featcat7 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat7_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc7 = 0; while ($my_query7->have_posts()) : $my_query7->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc7 < 1 ) { ?>

<article class="<?php if( $cat7_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc7; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc7); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>
</article>

<?php } ?>

<?php $hfc7++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;




//featcat8
if($featcat8 && $featcat8 != 'Choose a category'):
$my_query8 = new WP_Query('cat='. $featcat8 . '&' . 'offset=' . '&' . 'showposts='.$featcat8_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat8); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat8); ?>"><a href="<?php echo get_category_link( $featcat8 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat8_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat8_name; ?>" href="<?php echo rtrim( get_category_link( $featcat8 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat8_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc8 = 0; while ($my_query8->have_posts()) : $my_query8->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc8 < 1 ) { ?>

<article class="<?php if( $cat8_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc8; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc8); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>
</article>

<?php } ?>

<?php $hfc8++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;




//featcat9
if($featcat9 && $featcat9 != 'Choose a category'):
$my_query9 = new WP_Query('cat='. $featcat9 . '&' . 'offset=' . '&' . 'showposts='.$featcat9_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat9); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat9); ?>"><a href="<?php echo get_category_link( $featcat9 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat9_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat9_name; ?>" href="<?php echo rtrim( get_category_link( $featcat9 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat9_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc9 = 0; while ($my_query9->have_posts()) : $my_query9->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc9 < 1 ) { ?>

<article class="<?php if( $cat9_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc9; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc9); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>
</article>

<?php } ?>

<?php $hfc9++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;



//featcat10
if($featcat10 && $featcat10 != 'Choose a category'):
$my_query10 = new WP_Query('cat='. $featcat10 . '&' . 'offset=' . '&' . 'showposts='.$featcat10_count); ?>

<aside class="home-feat-cat post_tn_cat_color_<?php echo dez_get_strip_variable($featcat10); ?>">
<h4 class="homefeattitle feat_tn_cat_color_<?php echo dez_get_strip_variable($featcat10); ?>"><a href="<?php echo get_category_link( $featcat10 ); ?>"><?php printf( __( '%1$s', TEMPLATE_DOMAIN ), stripcslashes($featcat10_name) ); ?></a>&nbsp;&nbsp;<a title="Get Feed for <?php echo $featcat10_name; ?>" href="<?php echo rtrim( get_category_link( $featcat10 ), '/'); ?>/feed/"><img class="home-feat-rss" src="<?php echo get_template_directory_uri(); ?>/images/rss2.png" alt="<?php _e('Get Feed for', TEMPLATE_DOMAIN); ?> <?php echo $featcat10_name; ?>" /></a></h4>
<div class="homefeat">

<?php $hfc10 = 0; while ($my_query10->have_posts()) : $my_query10->the_post(); $do_not_duplicate = $post->ID; ?>

<?php if( $hfc10 < 1 ) { ?>

<article class="<?php if( $cat10_count <= 1 ): ?>feat-is-single <?php endif; ?>feat-post fpost feat-<?php echo $post->ID; ?> fp<?php echo $hfc10; ?>">

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('<div class="feat-thumb">','</div>',480, 200, 'alignleft', 'featured-post-img',dez_get_singular_cat('false'),the_title_attribute('echo=0'),false); ?>
</a>

<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>

<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>

<div class="feat-content"><?php echo dez_get_custom_the_excerpt($archive_excerpt); ?></div>

</article>


<?php } else { ?>

<article <?php post_class('feat-post apost'. ' fp'.$hfc10); ?>>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo dez_get_featured_post_image('','',120, 120, 'alignleft', 'thumbnail',dez_get_singular_cat('false'),the_title_attribute('echo=0'), false); ?>
</a>

<div class="feat-right">
<h2 class="feat-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h2>
<div class="feat-meta"><span class="feat_author"><?php the_author_posts_link(); ?></span><span class="feat_time"><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="feat_comment"><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span></div>
<?php if($archive_excerpt != '0') { ?><div class="feat-content"><?php echo dez_get_custom_the_excerpt(15); ?></div>
<?php } ?>
</div>
</article>

<?php } ?>

<?php $hfc10++; endwhile; wp_reset_postdata(); ?>

</div>
</aside>

<?php endif;



?>