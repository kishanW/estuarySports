<div class="post-meta the-icons pmeta-alt">
<span class="post-author"><i class="icon-user"></i><?php the_author_posts_link(); ?></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="post-time"><i class="icon-time"></i><?php echo the_time( get_option( 'date_format' ) ); ?></span>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php if( is_tax() ) { ?>
<?php echo the_taxonomies('before=<span class="post-category"><i class="icon-file"></i>&after=</span>'); ?>
<?php } else { ?>
<span class="post-category"><i class="icon-file"></i><?php echo dez_get_singular_cat(); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
<?php } ?>
<?php if ( comments_open() ) { ?>
<?php if( !is_tax() ) { ?>
<span class="post-comment"><i class="icon-comment"></i><?php comments_popup_link(__('No Comment',TEMPLATE_DOMAIN), __('1 Comment',TEMPLATE_DOMAIN), __('% Comments',TEMPLATE_DOMAIN) ); ?></span>
<?php } ?>
<?php } ?>
</div>